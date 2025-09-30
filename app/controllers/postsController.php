<?php
namespace App\Controllers\PostsController;
use \PDO;
use \App\Models\PostsModel;
use \App\Models\CategoriesModel;

function indexAction(PDO $conn){
include_once '../app/models/postsModel.php';
$posts = PostsModel\findAll($conn);
global $content, $title;
$title = "Alex Parker - Blog";
ob_start();
include '../app/views/posts/index.php';
$content = ob_get_clean();

}
function showAction(PDO $conn, int $id):void{
include_once '../app/models/postsModel.php';
$post = PostsModel\findOneByID($conn, $id);
global $content, $title;
$title = $post['title'];

ob_start();
include '../app/views/posts/show.php';
$content = ob_get_clean();

}

function addFormAction(PDO $conn){
    include_once '../app/models/categoriesModel.php';
    $categories = CategoriesModel\findAll($conn);
    global $title, $content;
    $title = "Add a post";
    ob_start();
    include "../app/views/posts/addForm.php";
    $content = ob_get_clean();

}

function insertAction(PDO $conn, array $data){
    include_once "../app/models/postsModel.php";
    $reponse = PostsModel\insert($conn, $data);
     header('location:' .PUBLIC_BASE_URL. 'posts');


}

function editFormAction(PDO $conn, int $id){
    // je recupere les infos du post a modifier
    include_once "../app/models/postsModel.php";
    $post = PostsModel\findOneByID($conn, $id);

    // je recupere les catégories
    include_once "../app/models/categoriesModel.php";
    $categories = CategoriesModel\findAll($conn);


    // j'affiche le formulaire de d'update
    global $content, $title;
    $title = "Alex Parker - Edit a post";
    ob_start();
    include "../app/views/posts/editForm.php";
    $content = ob_get_clean();

}