<?php

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 2/27/2016
 * Time: 11:10 PM
 */
class Profile extends CI_Controller
{

    private $userName;

    private $limit = 2;


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model', 'profile');
    }

    public function index($user = '')
    {
        $this->userName = $user;

        if (isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == true && isset($_SESSION["username"])) {
            if ($this->profile->checkUserExistAndGetType($user) != null) {
                if ($this->profile->checkUserExistAndGetType($user)->user_account_type == 1) {

                    $normUser = $this->viewNormalUserInfo($this->userName);
                    $recipes = $this->getRecipesByUser($this->userName, $this->limit);
                    $recipeCount = $this->usersRecipeCount($this->userName);

                    $config["full_tag_open"] = '<ul class="page-navigation">';
                    $config["full_tag_close"] = '</ul>';
                    $config["first_link"] = "&laquo;";
                    $config["first_tag_open"] = "<li>";
                    $config["first_tag_close"] = "</li>";
                    $config["last_link"] = "&raquo;";
                    $config["last_tag_open"] = "<li>";
                    $config["last_tag_close"] = "</li>";
                    $config['next_link'] = '<i class="fa fa-arrow-right"></i>';
                    $config['next_tag_open'] = '<li>';
                    $config['next_tag_close'] = '<li>';
                    $config['prev_link'] = '<i class="fa fa-arrow-left"></i>';
                    $config['prev_tag_open'] = '<li>';
                    $config['prev_tag_close'] = '<li>';
                    $config['cur_tag_open'] = '<li><span>';
                    $config['cur_tag_close'] = '</span></li>';
                    $config['num_tag_open'] = '<li>';
                    $config['num_tag_close'] = '</li>';
                    $config['total_rows'] = $recipeCount;
                    $config['per_page'] = $this->limit;
                    $config['uri_segment'] = 4;
                    $config['base_url'] = site_url('profile/index/'.$this->userName);
                    $this->load->library('pagination',$config);
                    $page_links = $this->pagination->create_links();

                    $data = array('normUser' => $normUser, 'recipeList' => $recipes, 'recipeCount' => $recipeCount, 'page_links' => $page_links);

                    $this->load->view('profile/normal_user_profile', $data);

                } else if ($this->profile->checkUserExistAndGetType($user)->user_account_type == 3) {

                    $adminUser = $this->viewNormalUserInfo($this->userName);

                    $recipes = $this->profile->getRecipesByUser($this->userName, $this->limit);

                    $data = array('normUser' => $adminUser, 'recipeList' => $recipes);

                    $this->load->view('profile/normal_user_profile', $data);

                } else if ($this->profile->checkUserExistAndGetType($user)->user_account_type == 2) {

                    $this->load->view('profile/cooperate_user_updated');

                }
            } else {
                $this->load->view('_template/error');
            }
        } else {
            redirect('/login');
        }
    }

    ////=============Normal user Profile===============///

    public function viewNormalUserInfo($user_name = '')
    {
        return $this->profile->viewNormalUserInfo($user_name);
    }

    ///====================================================///


    ////=============Common user function ================///

    //method call to HomeModel To view Recipes
    public function getRecipesByUser($user_name = '', $limit = '')
    {
        return $this->profile->getRecipesByUser($user_name, $limit);
    }

    //method to get the count of recipes by a user
    public function usersRecipeCount($user_name = '')
    {
        return $this->profile->usersRecipeCount($user_name);
    }

    //update the profile picture
    public function updateProfilePicture()
    {
        echo $this->profile->updateProfilePicture();
    }

    //update password method for every user through their respective profiles
    public function updatePassword()
    {
        echo $this->profile->updatePassword();
    }

    //This method is used to check whether the typed in password matches the current user password in the db
    public function  checkPassword()
    {
        $this->profile->checkPassword($_GET['curr_password']);
    }

    //Method for updating user fields
    public function updateUserField()
    {
        echo $this->profile->updateUserField();
    }

    //Function to refresh the single user field which was jus updated
    public function refreshUserField()
    {
        echo $this->profile->refreshUserField();
    }

    ///====================================================///


    ////=============Cooperate user Profile===============///

    public function getCooperateUserDetails()
    {
        return $this->profile->getCooperateUserDetails($this->user_name);
    }

    //To view all the promotions by a single commercial user
    public function getAllPromotionsByUser($user_name = "")
    {
        return $this->profile->getAllPromotionsByUser($user_name);
    }

    //To view all the recipes by a single commercial user
    public function getAllRecipesByUser($user_name = "")
    {
        return $this->profile->getAllRecipesByUser($user_name);
    }

    //To view which categories of food does a commercial user deals in
    public function getCategoriesByUser($user_name = "")
    {
        return $this->profile->getCategoriesByUser($user_name);
    }

    public function error_page()
    {
        $this->view('_template/error');
    }
}