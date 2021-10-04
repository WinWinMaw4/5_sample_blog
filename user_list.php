
<?php require_once  "core/auth.php"; ?>
<?php include "core/isAdmin.php"?>
<?php include  "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
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
                        <i class="feather-users text-primary me-2"></i>User List
                    </h4>
                    <div>
                        <a href="#" class="btn btn-outline-secondary full-screen-btn">
                            <i class="feather-maximize-2 h4 "></i>
                        </a>
                    </div>
                </div>
                <hr>
                <table class="table table-hover mt-3">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Control</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (users() as $c){
                        ?>
                        <tr>
                            <td><?php echo $c['id']; ?></td>
                            <td><?php echo $c['name']; ?></td>
                            <td><?php echo $c['email']; ?></td>
                            <td><?php echo $role[$c['role']]; ?></td>
                            <td>
                            </td>
                            <td><?php echo showTime($c['created_at'],"d-M-Y"); ?></td>
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