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

    public function index()
    {
        $this->load->view('login/login');
    }

}