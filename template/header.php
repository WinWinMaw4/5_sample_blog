<?php require_once "core/base.php"?>
<?php require_once "core/functions.php"?>

<!doctype html>
<!--animate__animated animate__backInDown-->
<html lang="en" class="animate__animated">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
<!--     <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/animate_it/animate.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
<!--    <link rel="stylesheet" href="--><?php //echo $url; ?><!--/assets/css/app.scss/app.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo $url; ?><!--/assets/vendor/data_table/jquery.dataTables.min.css">-->
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">

</head>
<body>

<section class="main container-fluid">
    <div class="row">
        <!-- Sidebar Start -->
       <?php include_once "template/sidebar.php" ?>
        <!-- Sidebar End -->
        <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">
            <div class="row header mb-4">
                <div class="col-12">
                    <div class="bg-primary p-2 rounded d-flex justify-content-between align-items-center">
                        <button class="show-sidebar-btn btn-primary d-block d-lg-none">
                            <i class="feather-menu text-light" style="font-size: 2em;"></i>
                        </button>
                        <form action="" method="post" class="d-none d-md-block">
                            <div class="form-inline d-flex justify-content-between">
                                <input type="text" class="form-control d-inline-flex me-2 " placeholder="Search">
                                <button class="btn btn-light ">
                                    <i class="feather-search"></i>
                                </button>

                            </div>
                        </form>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo $url; ?>/assets/img/<?php echo $_SESSION['user']['photo']; ?>" class="user-img rounded-circle shadow-sm" style="width: 30px;height: 30px;" alt="">
                                <?php echo $_SESSION['user']['name']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <div  class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
