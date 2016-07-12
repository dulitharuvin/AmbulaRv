<?php

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/12/2016
 * Time: 10:15 PM
 */
class Registration_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // model method for inserting new personal user in to the data base
    public function register_personal_user()
    {

        $first_name_flag = $last_name_flag = $email_flag = $username_flag = $password_flag = false;
        $firstNameErr = $lastNameErr = $emailErr = $usernameErr = $passwordErr = "";
        $first_name = $last_name = $email = $username = $password = "";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //firstname validation
            if (empty($_POST["first_name"])) {
                $firstNameErr = "firstName is required";
                $first_name_flag = false;
            } else {
                $first_name_flag = true;
                $first_name = $this->test_input($_POST["first_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
                    $first_name_flag = false;
                    $firstNameErr = "Only letters and white spaces allowed";
                }
            }

            //lastname validation
            if (empty($_POST["last_name"])) {
                $lastNameErr = "LastName is required";
                $last_name_flag = false;
            } else {
                $last_name_flag = true;
                $last_name = $this->test_input($_POST["last_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
                    $last_name_flag = false;
                    $lastNameErr = "only letters and white spaces allowed";
                }
            }

            //email validation
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                $email_flag = false;
            } else {
                $email_flag = true;
                $email = $this->test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email = false;
                    $emailErr = "Invalid email format";
                }
            }

            //user name validation
            if (empty($_POST["username"])) {
                $usernameErr = "username required";
                $username_flag = false;
            } else {
                $username = $this->test_input($_POST["username"]);
                $username_flag = true;
            }

            //password validation
            if (empty($_POST["password"]) || empty($_POST["password_confirm"])) {
                $passwordErr = "password is required!";
                $password_flag = false;
            } else {
                $password_flag = true;
                $password = $this->test_input($_POST["password"]);
                // check if name only contains letters and whitespace
            }


        }

        if (!$first_name_flag || !$last_name_flag || !$email_flag || !$password_flag || !$username_flag) {
            return false;
        }

        $this->load->helper('PasswordHash');
        $hasher = new PasswordHash(8, FALSE);
        $password_hash = $hasher->HashPassword($password);;

        // generate integer-timestamp for saving of account-creating date
        //$user_creation_timestamp = time();

        //insert into user table
        $userSql = "INSERT INTO users (user_email, user_name, user_password_hash, user_provider_type)
                VALUES (?, ?, ?, ?)";

        $userResult = $this->db->query($userSql,array($email,$username,$password_hash,'DEFAULT'));

        $user_personal_id = $this->db->insert_id(); //to take the laste inserted users , useri_id

        $userPersonalsql = "INSERT INTO user_personal (first_name,last_name,users_user_id) VALUES (? ,? ,?)";
        $userPersoanalResult = $this->db->query($userPersonalsql,array($first_name, $last_name, $user_personal_id));

        $this->session->set_userdata('refferer', 'registration');

        return $userResult && $userPersoanalResult;

    }


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Email availability checking function for js validator
    public function check_email($email = "")
    {
        $query = "SELECT user_email FROM  users  WHERE  user_email = ?";
        $result = $this->db->query($query, array($email));

        if ($result->num_rows() > 0) {
            http_response_code(400);
        } else {
            http_response_code(200);
        }

    }

    //Username availability checking function for js validator
    public function check_username($userName = "")
    {
        $query = "SELECT  user_name FROM users WHERE  user_name = ?";
        $result = $this->db->query($query, array($userName));

        if ($result->num_rows() > 0) {
            http_response_code(400);
        } else {
            http_response_code(200);
        }
    }

}