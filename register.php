<?php
 require_once  "core/base.php";
 require_once  "core/functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/animate_it/animate.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/app.scss/app.css">
<!--    <link rel="stylesheet" href="--><?php //echo $url; ?><!--/assets/css/theme1.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo $url; ?><!--/assets/css/primaryBlueTheme.css.css"></head>-->
<body style="background-color: var(--primary-soft)">

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-primary text-center">
                        <i class="feather-users"></i>
                        User Register
                    </h4>
                    <?php
                        if(isset($_POST['reg-btn'])){
                            echo register();
                        }
                    ?>
<!--                    must be post-->
                    <form method="post">
                        <div class="form-group">
                            <label for="name">
                                <i class="feather-user text-primary"></i>
                                Your Name
                            </label>
                            <input type="text" name="name" class="form-control" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                <i class="feather-mail text-primary"></i>
                                Email
                            </label>
                            <input type="email" name="email" class="form-control" placeholder="John@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">
                                <i class="feather-lock text-primary"></i>
                                Password
                            </label>
                            <input type="text" name="password" min="8" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <i class="feather-lock text-primary"></i>
                                Confirm Password
                            </label>
                            <input type="text" name="cpassword" min="8" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mt-2 mb-0">
                            <button class="btn btn-primary form-control-sm" name="reg-btn">Register</button>
                            <a href="login.php" class="btn btn-outline-primary form-control-sm">Sing In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $url; ?>/assets/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/popper.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
