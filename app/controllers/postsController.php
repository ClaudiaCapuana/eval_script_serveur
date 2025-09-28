<?php
namespace App\Controllers\PostsController;
use \PDO;
use \App\Models\PostsModel;

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

function addFormAction(){
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