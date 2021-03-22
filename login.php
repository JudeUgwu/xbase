<?php
  require_once "DB.php";
  require_once "config.php";
?>
<html lang="en">

    <head>
        <title>Login</title>
        <?php  require_once "includes/a_header.php";   ?>
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
                    <form data-type="login" action="#" class="sign-in-form process_form">
                        <h2 class="title">Student</h2>
                        <div class="input-field">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="email" placeholder="Student ID / Email" />
                            <span class="email_error danger"></span>
                        </div>

                        <div class="input-field">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            <input type="password" name="password" placeholder="Password" />
                            <span class="password_error danger"></span>

                        </div>
                        <input class="btn solid" type="submit" value="Login As Student" />


                    </form>
                    <form action="#" class="sign-up-form admin_form">
                        <h2 class="title">Admin</h2>

                        <div class="input-field">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" placeholder="email" name="email" />
                        </div>
                        <div class="input-field">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            <input type="password" placeholder="Password" />
                        </div>


                        <input type="submit" class="btn" value="Login As Admin" />

                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Admin Login</h3>
                        <p>
                            An Admin? Please sign-up here
                        </p>
                        <button class="btn transparent" id="sign-up-btn">Sign up</button>
                    </div>
                    <img src="<?=IMAGE_PATH?>register-page-img.png"
                        class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Student Login</h3>
                        <p>
                            A student? Please sign-up here
                        </p>
                        <button class="btn transparent" id="sign-in-btn">Sign up</button>
                    </div>

                    <img src="<?=IMAGE_PATH?>hero-img.svg"
                        class="image" alt="" />
                </div>
            </div>
        </div>

        <footer>s
            <div class="forward" onclick="forward()">
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </div>
            <div class="backward" onclick="backward()">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            </div>
        </footer>
        <?php  require_once "includes/a_footer.php";   ?>

    </body>

</html>