<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../app/views/templates/partials/_head.php';?>
  </head>

  <body>
    <?php include '../app/views/templates/partials/_preload.php';?>

    <div id="main">
      <div class="container">
        <div class="row">
          <!-- About Me (Left Sidebar) Start -->
         <?php include '../app/views/templates/partials/_aside.php';?>
          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
         <?php include '../app/views/templates/partials/_header.php';?>
                  <!-- ADD A POST END -->

                  <!-- Blog Post Start -->
                 <?php include '../app/views/templates/partials/_main.php';?>
                  <!-- Blog Post End -->

          

                
                </div>
              </div>
            </div>

            <!-- Footer Start -->
           <?php include '../app/views/templates/partials/_footer.php';?>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>

    <!-- Back to Top Start -->
        <?php include '../app/views/templates/partials/_scrollarrow.php';?>
    <!-- Back to Top End -->

    <!-- All Javascript Plugins  -->
    <?php include '../app/views/templates/partials/_script.php';?>
  </body>
</html>
