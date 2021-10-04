<?php require_once 'front_panel/head.php'; ?>
<title>Home</title>
<?php require_once 'front_panel/side_header.php';?>
<?php
$id=$_GET['id'];
$currentPost=post($id);
$currentCat = $currentPost['category_id'];
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-7">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home">Home</i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
                </ol>
            </nav>
            <div class="card shadow-sm mb-4">
               <div class="card-body">
                   <div>
                       <h4><?php echo $currentPost['title']; ?></h4>
                       <div class="my-3">
                           <i  class="feather-user text-primary"></i>
                           <small class="text-muted"><?php echo user($currentPost['user_id'])['name']; ?></small>
                           <i  class="feather-layers text-success"></i>
                           <small class="text-muted"><?php echo category($currentPost['category_id'])['title']; ?></small>
                           <i  class="feather-calendar text-danger"></i>
                           <small class="text-muted"><?php echo date('j M Y',strtotime($currentPost['created_at'])); ?></small>
                       </div>
                       <div ><?php echo html_entity_decode($currentPost['description'],ENT_QUOTES); ?></div>
                   </div>
               </div>
           </div>
            <div class="row">
                <?php foreach (fPostByCat($currentCat,2,$id) as $p) { ?>
                <div class="col-12 col-md-6 col-lg-6">
                        <div class="card mb-4 post">
                            <div class="card-body shadow-sm">
                                <a href="detail.php?id=<?php echo $p['id']; ?>" class="text-primary">
                                    <h4><?php echo $p['title']; ?></h4>
                                </a>
                                <div class="my-3">
                                    <i  class="feather-user text-primary"></i>
                                    <small class="text-muted"><?php echo user($p['user_id'])['name']; ?></small>
                                    <i  class="feather-layers text-success"></i>
                                    <small class="text-muted"><?php echo category($p['category_id'])['title']; ?></small>
                                    <i  class="feather-calendar text-danger"></i>
                                    <small class="text-muted"><?php echo date('j M Y',strtotime($p['created_at'])); ?></small>
                                </div>
                                <p class="text-black-50">
                                    <?php echo short(strip_tags(html_entity_decode($p['description'])),200); ?>
                                </p>
                            </div>
                        </div>
                </div>
                <?php }?>
            </div>
        </div>
        <?php require_once  "right-side-bar.php"?>
    </div>

</div>
<?php require_once 'front_panel/footer.php';   ?>



