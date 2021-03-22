<?php
  require_once "DB.php";
  require_once "config.php";
?>
<html lang="en">

<head>
   <title><?=APP_NAME?></title>
   <?php  require_once "includes/a_header.php";   ?>
   
</head>

<body>
    <div class="banner-1 banner-img">
        <img src="<?=IMAGE_PATH?>project-5.jpg" alt="">
        <div class="text-box text-box-1">
            <h1>Hardwork pays with constitency</h1>
        </div>
    </div>
    <div class="banner-2 banner-img">
        <img src="<?=IMAGE_PATH?>project-1.jpg" alt="">
        <div class="text-box text-box-2">
            <h1>Keep your dream alive</h1>
        </div>
    </div>
    <div class="banner-3 banner-img">
        <img src="<?=IMAGE_PATH?>project-2.jpg" alt="">
        <div class="text-box text-box-3">
            <h1>Know your passion</h1>
        </div>
    </div>
    <div class="banner-4 banner-img">
        <img src="<?=IMAGE_PATH?>project-3.jpg" alt="">
        <div class="text-box text-box-4">
            <h1>Future of next generation</h1>
        </div>
    </div>
    <header class="header">
        <button class="btn-logo">
            <div class="logo">
                <h2>X</h2>
                <h5>&rlarr;</h5>
                <h4>BASE</h4>
            </div>
        </button>
        <div class="wrapper">
            <input type="checkbox" id="switch">
            <label for="switch" class="switch-label">
                <div class="toogle"></div>
            </label>
        </div>
        <div class="login">
            <a href="<?=APP_PATH?>login.php">LOGIN <i class="fa fa-sign-in" aria-hidden="true"></i></a>
        </div>
    </header>
    <section class="form-1" data-aos="zoom-in">
        <!-- <img src="<?=IMAGE_PATH?>x-base-2-logo.gif" alt=""> -->
        <div class="container-2">
            <button class="btn-logo btn-logo-2">
                <div class="logo logo-2">
                    <h2>X</h2>
                    <h5>&rlarr;</h5>
                    <h4>BASE</h4>
                </div>
            </button>
            <form  action="" class="search-form __search">
                <input type="text" placeholder="Search" class="search_input" id="search" required>
                <!-- <label for="search" >  <i class="fa fa-search fa2" aria-hidden="true" style="color: rgb(0, 140, 255); "></i></label> -->
            </form>
        </div>
    </section>
    <!-- <footer>
<marquee behavior="" direction="">ffdggg</marquee>
</footer> -->
<?php  require_once "includes/a_footer.php";   ?>







<div id="searchModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Related Student Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group student_found">

            </ul>
      </div>
    </div>
  </div>
</div>













</body>

</html>