
<?php require_once  "core/auth.php"; ?>
<?php include  "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Post</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row  animate__animated animate__fadeIn animate__delay-1s">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h4 class="mb-0">
                        <i class="feather-list text-primary me-2"></i>Post List
                    </h4>
                    <div>
                        <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary" title="Add Post">
                            <i class="feather-plus-circle h4 "></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary full-screen-btn">
                            <i class="feather-maximize-2 h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
                <table class="table table-hover table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <?php if($_SESSION['user']['role']==0){ ?>
                        <th>User</th>
                        <?php } ?>
                        <th>Control</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (posts() as $c){
                        ?>
                        <tr>
                            <td><?php echo $c['id']; ?></td>
                            <td><?php echo short($c['title']); ?></td>
                            <td><?php echo short(strip_tags(html_entity_decode($c['description']))); ?></td>
                            <td class="text-nowrap"><?php echo category($c['category_id'])['title']; ?></td>
                            <?php if($_SESSION['user']['role']==0){ ?>
                            <td class="text-nowrap"><?php echo user($c['user_id'])['name']; ?></td>
                            <?php }; ?>
                            <td class="text-nowrap">
                                <a href="post_detail.php?id=<?php echo$c['id']; ?>" class="btn btn-outline-info btn-sm">
                                    <i class="feather-info"></i>
                                </a>
                                <a href="post_delete.php?id=<?php echo$c['id']; ?>" onclick="return confirm('Are U sure to Delete this 😊 ️‼️');" class="btn btn-outline-danger btn-sm">
                                    <i class="feather-trash-2"></i>
                                </a>
                                <a href="post_edit.php?id=<?php echo$c['id']; ?>" class="btn btn-outline-warning btn-sm">
                                    <i class="feather-edit-2"></i>
                                </a>

                            </td>
                            <td class="text-nowrap"><?php echo showTime($c['created_at'],"d-m-y"); ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
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