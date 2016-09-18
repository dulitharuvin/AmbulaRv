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

    public function getRecipe($recipeid="",$lang =""){
       // $this->recipeId = $recipeid;

        $ingredients = array();
        $sql = "SELECT idRecipe,title,tags,users_user_id,prep_time ,cook_time ,views,rating,lang FROM recipes WHERE idRecipe = ?";


       $query = $this->db->query($sql,array($recipeid));
        $result = $query->row();
        $count = $query->num_rows();

//        if ($count == 1) {
//            $results = $query;
//            $this->recipename = $results->title;
//            $this->time = $results->cook_time;
//            $this->tag = $results->tags;
//            $this->view = $results->views;
//            $this->ratings = $results->rating;
//            $this->lang = $results->lang;
//
//            $sql = "SELECT Ingredients_idIngredients FROM recipe_has_ingredients WHERE Recipe_idRecipe = :Recipe_idRecipe";
//
//            $query = $this->db->prepare($sql);
//           $result1  = $query->execute(array(':Recipe_idRecipe' => $recipeid));
//
//            while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
//                $sql2 = "SELECT idIngredients,title,ing_si FROM ingredients WHERE idIngredients = :idIngredients";
//
//                $result = $this->db->prepare($sql2);
//                $result->execute(array(':idIngredients' => $r['Ingredients_idIngredients']));
//
//                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//                    $ingredients[] = $row['title'];
//                }
//            }
//            $this->ingredients = $ingredients;
//
//        }
        return json_encode($result);
    }

    public function getRecipeIngredients($recipeId = '')
    {

        $array = $this->db->query("SELECT ingredients.idIngredients,ingredients.title , ingredients.ing_si ,recipe_has_ingredients.units ,recipe_has_ingredients.qty , recipe_has_ingredients.id_recipe_has_ingredients
                                   FROM ingredients INNER JOIN  recipe_has_ingredients
                                   WHERE recipe_has_ingredients.Recipe_idRecipe =" . $recipeId . "
                                   AND recipe_has_ingredients.Ingredients_idIngredients = ingredients.idIngredients")->result();

        return json_encode($array);
    }

    //returnImage for recipe gallery
//    public function getRecipeImages($recipeId = '')
//    {
//
//        $array = $this->db->query("SELECT image_url
//                                   FROM recipe_img
//                                   WHERE Recipe_idRecipe =" . $recipeId . "
//                                   UNION
//                                   SELECT image_url
//                                   FROM recipe_description
//                                   WHERE Recipe_idRecipe =" . $recipeId . " LIMIT 5")->result();
//        return json_encode($array);
//    }

    public function getRecipeDescription($recipeId = '')
    {
        $array = $this->db->query("SELECT description_en,image_url from recipe_description WHERE Recipe_idRecipe=" . $recipeId)->result();
        return json_encode($array);
    }

    public function getRecipeImages($recipeId = '')
    {
        $urls[] = array();
        $i = 0;

        $handle = opendir('uploads/recipes/' . $recipeId);
        while ($file = readdir($handle)) {
            if ($file !== '.' && $file !== '..' && preg_match('/thumb/', $file)) {
                $urls[$i] = $file;
                $i++;

            }
        }

        return json_encode($urls);
    }

    public function submitRecipe()
    {

        // generate integer-timestamp for saving of account-creating date
        $user_creation_timestamp = time();
        $var = $this->session->userdata;
        //tags
//        $tags = '';
//        for ($i = 0; $i < count($_POST['tags']); $i++)
//            if (isset($_POST['tags'][$i])) $tags .= $_POST['tags'][$i] . ',';

        if (!isset($_GET['lang'])) {
            $sql = "INSERT INTO recipes (title,  category_id, users_user_id, prep_time, cook_time )
                VALUES (? , ? , ? , ? , ? )";

            $query =  $this->db->query($sql, array( $_POST['recipetitle'],$_POST['category'] , $_SESSION['uid'] ,  $_POST['prep_time'], $_POST['cook_time']
                ));


        } else {

            $sql = "INSERT INTO recipes (title,  category_id, users_user_id, prep_time, cook_time ,lang )
                VALUES (? , ? , ? , ? , ?  , ?)";

            $query = $this->db->query($sql , array($_POST['recipetitle'],
                $_POST['category'],
                Session::get('uid'),
                $_POST['prep_time'],
                $_POST['cook_time'],
                'si'));
        }

        $recipeid = $this->db->insert_id();

//        mkdir("uploads/" . $recipeid);
//
//        $src = "uploads/recipes/temp/" . Session::get('username');
//        $dst = "uploads/" . $recipeid;
//
//        if (is_dir($src))
//            $this->rcopy($src, $dst);
//
//        //store recipe img url to db
//        $handle = opendir('uploads/' . $recipeid);
//        while ($file = readdir($handle)) {
//            if ($file !== '.' && $file !== '..' && !preg_match('/thumb/', $file)) {
//                $sql = "INSERT INTO recipe_img (image_url, Recipe_idRecipe)
//                VALUES (:image_url, :Recipe_idRecipe)";
//
//                $query = $this->db->prepare($sql);
//                $query->execute(array(':image_url' => 'uploads/' . $recipeid . '/' . $file,
//                    ':Recipe_idRecipe' => $recipeid));
//            }
//        }


        //query for recipe has ingredients
        $sql2 = "INSERT INTO recipe_has_ingredients (Recipe_idRecipe, Ingredients_idIngredients, units, qty)
                VALUES (? , ? , ? , ?)";

        //recipe compulsory image
//        $this->imageUpload('recipephoto1', $recipeid, 1);
        //loop through ingredients fields
        $count = count($_POST['ingname']);

        for ($i = 0; $i < $count; $i++) {

            $ingredient = $_POST['ingname'][$i];
            $qty = $_POST['amount'][$i];
            $units = $_POST['metrics'][$i];

            if ($ingredient != null) {
                //insert to ingredient if does not exists check for language
                if (!isset($_GET['lang'])) {
                    $sql4 = "INSERT IGNORE INTO ingredients (title) VALUES ( ? )";
                    $sth = $this->db->query($sql4 ,array( $ingredient));

                    //search from ingredients to get the id
                    $ingredientSql = "SELECT idIngredients FROM ingredients WHERE title = ?";
                    $sth = $this->db->query($ingredientSql ,array( $ingredient));

                } else {

                    $sql4 = "INSERT IGNORE INTO ingredients (ing_si) VALUES ( ? )";
                    $sth = $this->db->query($sql4 ,array( $ingredient));

                    //search from ingredients to get the id
                    $ingredientSql = "SELECT idIngredients FROM ingredients WHERE ing_si = ?";
                    $sth = $this->db->query($ingredientSql ,array( $ingredient));

                }

                //fetch ingredient id
                $result = $this->db->insert_id();

                //insert into recipe_has_ingredient
                $sth = $this->db->query($sql2 ,array($recipeid,
                     $result,
                     $units,
                     $qty
                ));

            }

        }

        $sql5 = "INSERT INTO recipe_description (description_en,Recipe_idRecipe) VALUES ( ?  ,  ? )";


        foreach ($_POST['steps'] as $key => $tmp_name) {

            $sth = $this->db->query($sql5 , array(
                 $_POST['steps'][$key],
                 $recipeid
            ) );

        }


        echo ":" . $recipeid . ";";
    }

    //get categories array
    public function getCategoriesArray()
    {
        $array = $this->db->query("SELECT idCategory,title,thumb_url from recipe_category")->result();
        return json_encode($array);
    }

    public function uploadRecipeImages(){
      //  $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
        $diretorio = $_REQUEST["diretorio"];

        $targetDir = 'uploads/tmp_uploads/'.$_SESSION['uid'].'/'.$diretorio;
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds

//        if (is_dir($targetDir))
//            $this->rrmdir($targetDir);

        // Create target dir
        if (!file_exists($targetDir)) {
            mkdir($targetDir);
        }


    // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }
        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;
                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }
                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }
// Open temp file
        if (!$out = fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }
        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }
            // Read binary input stream and append it to temp file
            if (!$in = fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }
        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }
        fclose($out);
        fclose($in);
// Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }
// Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }

    // Function to Copy folders and files
    function rcopy($src, $dst)
    {
        if (file_exists($dst))
            $this->rrmdir($dst);
        if (is_dir($src)) {
            mkdir($dst);
            $files = scandir($src);
            foreach ($files as $file)
                if ($file != "." && $file != "..")
                    $this->rcopy("$src/$file", "$dst/$file");

        } else if (file_exists($src))
            copy($src, $dst);
        $this->rrmdir($src);
    }

// Function to remove folders and files
    function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file)
                if ($file != "." && $file != "..") rrmdir("$dir/$file");

            rmdir($dir);
        } else if (file_exists($dir)) unlink($dir);
    }

    /////////////////////Function to delete a directory with its files//////////////////////////////////////
    public function delTree($dir)
    {
        if (empty($dir)) {
            return false;
        }
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

}