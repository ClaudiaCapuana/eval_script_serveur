

          <!-- Blog Post (Right Sidebar) Start -->

            <div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="posts" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>
                       <?php echo $post['title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?= \Core\Helpers\formatDate($post['created_at'], 'd F Y'); ?></span> | <span><?php echo $post['categoryName']; ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                     <?php echo $post['text']; ?>
                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                   
                       <?php echo $post['quote']; ?>
                    
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="posts/<?php echo $post['postsId']; ?>/<?php echo Core\Helpers\slugify($post['title'])?>/edit/form.html" formtype="button" class="btn btn-primary">Edit Post</a>
                      <a
                        href="posts/<?php echo $post['postsId']; ?>/<?php echo Core\Helpers\slugify($post['title'])?>/delete.html" 
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                </div>
              </div>
              </div>
        

          
         
