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
        if(isset($_SESSION['uid'])){
            $this->load->view('recipe/add_new_recipe');
        }else{
            redirect('/login');
        }

    }

    public function add_new_recipe()
    {
        if($this->recipe->add_new_recipe()){

        }
    }

    public function viewRecipe($id=''){
        $data['id'] = $_GET['id'];
        $this->load->view('recipe/single-recipe',$data);
    }

    public function getRecipe($id='',$lang =''){
      return  $this->recipe->getRecipe($id,$lang);
    }

    public function getRecipeIngredients($recipeId = '')
    {
        return $this->recipe->getRecipeIngredients($recipeId);
    }

    public function getRecipeImages($recipeId = '')
    {
        return $this->recipe->getRecipeImages($recipeId);
    }

    public function getRecipeDescription($recipeId = '')
    {
        return $this->recipe->getRecipeDescription($recipeId);
    }

    public function uploadRecipeImages()
    {
        return $this->recipe->uploadRecipeImages();
    }

    public function getCategoriesArray()
    {
        return $this->recipe->getCategoriesArray();
    }

    public function submitRecipe()
    {
        return $this->recipe->submitRecipe();
    }
}