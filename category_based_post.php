<?php require_once 'front_panel/head.php'; ?>
<title>Home</title>
<?php require_once 'front_panel/side_header.php';?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home">Home</i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo category($_GET['category_id'])['title'];?> Category
                    </li>
                </ol>
            </nav>
            <div class="d-flex justify-content-end">
                <div class="dropdown mb-3">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="feather-calendar me-1"></i>
                        Sort News
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="?category_id=<?php echo $_GET['category_id'] ?>&order_by=created_at&order_type=desc">
                                <i class="feather-arrow-down-circle"></i>
                                Newest to Oldest
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="?category_id=<?php echo $_GET['category_id'] ?>&order_by=created_at&order_type=asc">
                                <i class="feather-arrow-up-circle"></i>
                                Oldest to Newest
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href=" ">
                                <i class="feather-list"></i>
                                Default
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <?php

                if(isset($_GET['category_id']) && isset($_GET['order_by']) && isset($_GET['order_type'])){
                    $category_id = $_GET['category_id'];
                    $orderCol = $_GET['order_by'];
                    $orderType = strtoupper($_GET['order_type']);
                    $post = fSortByDate($category_id,$orderCol,$orderType);
                }else{
                    $post=fPostByCat($_GET['category_id']);
                }

                foreach (fPostByCat($_GET['category_id']) as $p) { ?>
                    <?php include 'single.php' ?>
                <?php }?>
            </div>
        </div>
        <?php require_once  "right-side-bar.php"?>
    </div>
</div>
<?php require_once 'front_panel/footer.php';   ?>



