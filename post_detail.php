
<?php require_once  "core/auth.php"; ?>
<?php include  "template/header.php"; ?>
<?php
$id=$_GET['id'];
$currentPost=post($id);
?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_list.php"  style="text-decoration: none;">post</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $currentPost['title']?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row  animate__animated animate__fadeIn animate__delay-1s">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">
                        <i class="feather-info text-primary me-2"></i>Post Detail
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary" title="post add">
                            <i class="feather-plus-circle h4 "></i>
                        </a>
                        <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary" title="post list">
                            <i class="feather-list h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
                <h4><?php echo $currentPost['title']; ?></h4>
                <div class="my-3">
                    <i  class="feather-user text-primary"></i>
                    <small class="text-muted"><?php echo user($currentPost['user_id'])['name']; ?></small>
                    <i  class="feather-layers text-success"></i>
                    <small class="text-muted"><?php echo category($currentPost['category_id'])['title']; ?></small>
                    <i  class="feather-calendar text-danger"></i>
                    <small class="text-muted"><?php echo date('j M Y',strtotime($currentPost['created_at'])); ?></small>
                </div>
                <div class=""><?php echo html_entity_decode($currentPost['description'],ENT_QUOTES); ?></div>
            </div>
        </div>
    </div>
</div>

<?php include  "template/footer.php"; ?>
<script>
    $(".table").DataTable({
        "order": [[ 0, "desc" ]]
    });
</script>