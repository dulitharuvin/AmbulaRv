<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/11/2016
 * Time: 12:48 AM
 */
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
    }

    public function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $this->session->set_userdata('page_rdr', $_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_userdata('page_rdr', '/');
        }

        $this->load->view('login/login');
    }

    public function login()
    {
        if ($this->login->login()) {
            redirect('/');
        } else {
            redirect('/login');
        }
    }

    public function logout()
    {
        if($this->login->logout()){
            redirect(base_url());
        }
    }

}