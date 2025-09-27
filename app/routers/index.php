<?php
use \App\Controllers\PostsController;
if(isset($_GET['post'])):
  include_once '../app/routers/posts.php';

else:
include_once '../app/controllers/postsController.php';
  PostsController\indexAction($conn);
endif;