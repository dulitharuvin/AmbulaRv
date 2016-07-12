<?php

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/12/2016
 * Time: 12:38 PM
 */
class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Registration_model','registration');
    }

    public function index()
    {
        $this->load->view('registration/personal_user_registration');
    }

    public function register_personal_user()
    {
        if($this->registration->register_personal_user()){
            redirect('/login');
        }else{
            redirect('/registration');
        }
    }

    public function check_email()
    {
        $this->registration->check_email($_GET['email']);
    }

    public function check_username()
    {
        $this->registration->check_username($_GET['username']);
    }

}