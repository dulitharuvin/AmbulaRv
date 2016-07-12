<?php

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/17/2016
 * Time: 12:39 AM
 */
class Recipe extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Recipe_model','recipe');
    }

    public function view_add_new_recipe()
    {
        $this->load->view('recipe/add_new_recipe');
    }

    public function add_new_recipe()
    {
        if($this->recipe->add_new_recipe()){

        }
    }
}