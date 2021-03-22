<?php
  require_once "../DB.php";
  require_once "../config.php";
?>
<html lang="en">

    <head>
        <title>Login</title>
        <?php  require_once "../includes/a_header.php";   ?>
    </head>
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
    </header>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form data-type="add-student" action="#" class="sign-in-form process_form">
                        <h2 class="title">Add A Student Record</h2>
                        <div class="input-field">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="firstname" placeholder="firstname" id="firstname" />
                            <span class="firstname_error danger"></span>
                        </div>
                        <div class="input-field">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="lastname" placeholder="lastname" id="lastname" />
                            <span class="lastname_error danger"></span>
                        </div>
                        <div class="input-field">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="email" placeholder="email" id="email" />
                            <span class="email_error danger"></span>
                        </div>
                        <div class="input-field">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="password" placeholder="password" id="password" />
                            <span class="password_error danger"></span>
                        </div>
                        <div class="input-field">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="phone" placeholder="phone" id="phone" />
                            <span class="phone_error danger"></span>
                        </div>


                        <input  name="login" class="btn solid" type="submit" value="Add Student" />


                    </form>

                </div>
            </div>

            <!-- <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Admin Dashboard</h3>
                        <p>
                           Are you done ?
                        </p>
                        <button onclick="location.href='index.php'" class="btn transparent" id="">Go Back</button>
                    </div>
                    <img src="<?=IMAGE_PATH?>register-page-img.png"
                        class="image" alt="" />
                </div>

            </div> -->
        </div>

        <footer>s
            <div class="forward" onclick="forward()">
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </div>
            <div class="backward" onclick="backward()">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            </div>
        </footer>
        <?php  require_once "../includes/a_footer.php";   ?>
      

    </body>

</html>