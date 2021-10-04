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