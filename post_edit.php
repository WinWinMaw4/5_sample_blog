
<?php require_once  "core/auth.php"; ?>
<?php include  "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_list.php" style="text-decoration: none;"> Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Post</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row  animate__animated animate__fadeIn animate__delay-1s">
    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary me-2"></i>Edit Post
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary" title="Post List">
                            <i class="feather-list h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
                <?php
                    $id = $_GET['id'];
                    $current = post($id);
                    if(isset($_POST['updatePost'])){
                        if(postUpdate()){
                            linkTo('post_list.php');
                        }
                    }
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $current['title']; ?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Select Category</label>
                        <select class="form-control custom-select " name="category_id" id="">
                            <?php foreach (categories() as $c){?>
                                <option value="<?php echo $c['id']?>" <?php echo $c['id']==$current['category_id']? "selected":"" ?>><?php echo $c['title'] ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Post Description</label>
                        <textarea type="text"  rows="10" name="description" class="form-control" required>
                            <?php echo $current['description']; ?>
                        </textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary float-end" name="updatePost"><i class="feather-plus-circle text-light"></i>
                           Update Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include  "template/footer.php"; ?>
