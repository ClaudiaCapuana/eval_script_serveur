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