<?php

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/15/2016
 * Time: 10:21 PM
 */
class Login_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login()
    {
        $userQuery = "SELECT user_id,user_name,user_email,user_password_hash,user_avatar,user_provider_type,user_account_type FROM users WHERE (user_name = ?  OR user_email = ?) AND user_provider_type = ?";
        $userResult = $this->db->query($userQuery, array($_POST['username'],$_POST['username'],'DEFAULT'));
        $count = $userResult->num_rows();

        $this->load->helper('PasswordHash');
        $hasher = new PasswordHash(8, FALSE);

        if ($count == 1) {

            $result = $userResult->row();

            if ($hasher->CheckPassword($_POST["password"],$result->user_password_hash)) {

                $loggedInUser = array('uid' => $result->user_id,
                'username' => $result->user_name,
                'user_provider_type' => $result->user_provider_type,
                'user_logged_in' => true,
                'user_avatar' => $result->user_avatar,
                'user_account_type'=> $result->user_account_type,
                'user_email' => $result->user_email);

                $this->session->set_userdata($loggedInUser);

                if ($result->user_account_type == 2) {

                    $commUserQuery = "SELECT company_name ,idcommercial_user FROM commercial_user WHERE  users_user_id = ?";
                    $commUserResult = $this->db->query($commUserQuery,array($result->user_id ));
                    $commResult = $commUserResult->row();

                    $loggedInCommUser = array('user_avatar' => 1,
                    'name' => $commResult->company_name,
                    'coporate_user_id' => $commResult->idcommercial_user,
                    'user_avatar_url' => "http://localhost/Ambula/uploads/profile/commercial_user/" . $result->user_name . "/" . $result->user_name . ".jpg");

                    $this->session->set_userdata($loggedInCommUser);

                } else {

                    $normalUserQuery = "SELECT first_name,last_name FROM user_personal WHERE  users_user_id = ?";
                    $normalUserResult = $this->db->query($normalUserQuery,array($result->user_id));
                    $adminResult = $normalUserResult->row();

                    $loggedInNormalUser = array('first_name' => $adminResult->first_name ,
                        'last_name' => $adminResult->last_name,
                        'user_avatar_url' => "http://localhost/Ambula/uploads/profile/personal_user/" . $result->user_id . "/" . $result->user_id . ".thumb.jpg");

                    $this->session->set_userdata($loggedInNormalUser);
                }

                // if user has checked the "remember me" checkbox, then write cookie
                if (isset($_POST['remember'])) {

                    // generate 64 char random string
                    $random_token_string = hash('sha256', mt_rand());

                    // write that token into database
                    $remeberMeQuery = "UPDATE users SET user_rememberme_token = ? WHERE user_id = ?";
                    $remeberMeResult = $this->db->query($remeberMeQuery,array($random_token_string,$result->user_id));

                    // generate cookie string that consists of user id, random string and combined hash of both
                    $cookie_string_first_part = $result->user_id . ':' . $random_token_string;
                    $cookie_string_hash = hash('sha256', $cookie_string_first_part);
                    $cookie_string = $cookie_string_first_part . ':' . $cookie_string_hash;

                    // set cookie
                    setcookie('ambula_rememberme', $cookie_string, time() + COOKIE_RUNTIME, "/", COOKIE_DOMAIN);
                }

                return true;

            } else {
                $this->session->set_userdata("feedback_negative", "invalid Username or Password");
                return false;
            }
        } else {
            $this->session->set_userdata("feedback_negative", "invalid Username or Password");
            return false;
        }

    }

    public function logout()
    {
        return $this->session->sess_destroy();
    }

}