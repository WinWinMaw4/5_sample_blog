
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
<?php
if(isset($_POST['addPost'])){
    postAdd();
}
?>
<form  class="row  animate__animated animate__fadeIn animate__delay-1s" method="post">
    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary me-2"></i>Create New Post
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary" title="Post List">
                            <i class="feather-list h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Post Description</label>
                        <textarea type="text" rows="15" class="form-control" name="description" id="description" required></textarea>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">
                        <i class="feather-layers text-primary me-2"></i>Select Category
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/category_add.php" class="btn btn-outline-primary" title="add category">
                            <i class="feather-list h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
<!--                <div class="form-group">-->
<!--                        --><?php //foreach (categories() as $c){?>
<!--                            <div class="form-check">-->
<!--                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault--><?php //echo $c['id']?><!--"  value="--><?php //echo $c['id']?><!--"  >-->
<!--                                <label class="form-check-label" for="flexRadioDefault--><?php //echo $c['id']?><!--">-->
<!--                                    --><?php //echo $c['title'] ?>
<!--                                </label>-->
<!--                            </div>-->
<!--                        --><?php //}?>
<!--                </div>-->
                <div class="form-group">
                    <?php foreach (categories() as $c){ ?>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio<?php echo $c['id']; ?>" value="<?php echo $c['id']; ?>" name="category_id" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio<?php echo $c['id']; ?>"><?php echo $c['title']; ?></label>
                        </div>
                    <?php } ?>

                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-primary float-start" name="addPost"><i class="feather-plus-circle text-light"></i>
                        Add post
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include  "template/footer.php"; ?>
<script>
    $('#description').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 500,
        lang: 'ko-KR' // default: 'en-US'
    });

</script>