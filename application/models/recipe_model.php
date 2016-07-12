<?php

/**
 * Created by PhpStorm.
 * User: Dulitha RD
 * Date: 6/17/2016
 * Time: 12:43 AM
 */
class Recipe_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add_new_recipe()
    {

    }

}