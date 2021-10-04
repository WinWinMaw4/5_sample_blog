
<?php require_once "core/auth.php"?>
<?php require_once "core/isEditor&Admin.php"?>
<?php include  "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php"  style="text-decoration: none;"><i class="feather-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row  animate__animated animate__fadeIn animate__faster">
    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">
                        <i class="feather-layers text-primary me-2"></i>Category Manager
                    </h4>
                    <div>
                        <a href="main_category.html" class="btn btn-outline-primary" title="main_category">
                            <i class="feather-package h4 "></i>
                        </a>
                        <a href="#" class="btn btn-outline-primary" title="sub_category">
                            <i class="feather-layers h4 "></i>
                        </a>
                        <a href="<?php echo $url; ?>/sample_list.php" class="btn btn-outline-primary" title="item list">
                            <i class="feather-list h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
                <?php
                    if(isset($_POST['addCat'])){
                        categoryAdd();
                    }
                ?>
                <form method="post">
                    <div class="row gx-3 gy-2">
                       <div class="col">
                           <input type="text" class="form-control" name="title">
                       </div>
                      <div class="col">
                          <button class="form-control-sm btn btn-primary" name="addCat">
                              <i class="feather-plus-circle text-light"></i>
                              Category Add
                          </button>
                      </div>
                    </div>
                </form>
                <?php include 'category_list.php'?>
            </div>
        </div>
    </div>
</div>

<?php include  "template/footer.php"; ?>
