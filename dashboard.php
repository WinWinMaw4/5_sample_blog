<?php require_once "core/auth.php"; ?>
<?php include  "template/header.php"; ?>

<h1>This is dashboard pages of <?php echo $info["name"] ?></h1>
<?php
    print_r($_SESSION['user']);
?>

<?php include  "template/footer.php"; ?>
