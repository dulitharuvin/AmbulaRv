<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/10/2016
 * Time: 11:59 PM
 */
class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('index');
    }

}