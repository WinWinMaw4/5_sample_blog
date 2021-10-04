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
                        Search By "<b><?php echo $_POST['searchKey'];?></b>"
                    </li>
                </ol>
            </nav>

            <div class="">
                <?php
                    $result = fSearch($_POST['searchKey']);
                    if(count($result)==0){
                        echo alert("This is no result","warning");
                    }

                ?>
                <?php foreach ($result as $p) { ?>
                    <?php include 'single.php' ?>
                <?php }?>
            </div>
        </div>
        <?php require_once  "right-side-bar.php"?>
    </div>
</div>
<?php require_once 'front_panel/footer.php';   ?>



