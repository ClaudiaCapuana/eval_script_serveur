<div class="col-md-12 page-body">
  <div class="row">
    <div class="col-md-12 content-page">
      <!-- ADD A POST -->
      <div>
        <a href="form.html" type="button" class="btn btn-primary"
          >Add a Post</a
        >
      </div>
      <!-- ADD A POST END -->
           <?php forEach ($posts as $post): ?>
<div class="col-md-12 blog-post row">

                    <div class="post-title">
                      <a href="posts/<?php echo $post['postsId']?>/<?php echo \Core\Helpers\slugify($post['title']) ?>.html"
                        ><h1>
                        <?php echo $post['title']; ?>
                        </h1></a
                      >
                    </div>
                    <div class="post-info">
                      <span><?= \Core\Helpers\formatDate($post['created_at'], 'd F Y'); ?></span> | <span><?php echo $post['categoryName']; ?></span>
                    </div>
                    <p>
                     <?php echo \Core\Helpers\truncate($post['text'],150); ?>
                    </p>
                    <a
                      href="posts/<?php echo $post['postsId']?>/<?php echo \Core\Helpers\slugify($post['title']) ?>.html"
                      class="
                        button button-style button-anim
                        fa fa-long-arrow-right
                      "
                      ><span>Read More</span></a>
                      </div>
   <?php endforeach; ?>
                    <?php include '../app/views/templates/partials/_nav.php';?>

                

</div>
</div>
</div>