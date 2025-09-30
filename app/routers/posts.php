<?php 

use \App\Controllers\PostsController;
include_once '../app/controllers/postsController.php';

switch ($_GET['posts']) :
   
    case 'show':
       PostsController\showAction($conn, $_GET['id']);
        break;
   
        case 'add-form':
           
    PostsController\addFormAction($conn);
        break;
   
        

          case 'insert':
           
    \App\Controllers\PostsController\insertAction($conn, $_POST);
        break;

             case 'edit':
           
    \App\Controllers\PostsController\editFormAction($conn,$_GET['id']);
        break;

 default: PostsController\indexAction($conn); break; endswitch;