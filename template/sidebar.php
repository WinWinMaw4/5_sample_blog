<!-- Sidebar Start -->
<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <!-- brand/logo -->
    <div class="d-flex justify-content-between align-items-center py-2 mt-3 nav-brand">
        <div class="d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-2 me-2">
                        <i class="feather-shopping-bag text-light h4 mb-0"></i>
                    </span>
            <span class="text-primary h4 mb-0 text-uppercase font-weight-bolder">My Shop</span>
        </div>
        <button class="hide-sidebar-btn btn btn-light  d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em;"></i>
        </button>
    </div>
    <!-- Menu start-->
    <div class="nav-menu">
        <ul>
            <li class="menu-item">
                <a href="<?php echo $url; ?>/dashboard.php" class="menu-item-link">
                            <span>
                                <i class="feather-home"></i>
                                    Dashboard
                            </span>
                </a>
            </li>
            <li class="menu-spacer">
            </li>
        </ul>
        <!-- Order Management -->
        <ul>
            <li class="menu-title">
                <span class="">MANAGE POST</span>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url; ?>/post_add.php" class="menu-item-link">
                            <span>
                                <i class="feather-plus-circle"></i>
                                Add Post
                            </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url; ?>/post_list.php" class="menu-item-link">
                           <span>
                            <i class="feather-list"></i>
                           Post List
                           </span>
                    <span class="badge rounded-pill bg-white text-primary shadow-sm">
                        <?php echo countTotal('posts'); ?>
                    </span>
                </a>
            </li>
<!--            menu-spacer-->
            <li class="menu-spacer">
            </li>
            <?php if($_SESSION['user']['role'] <= 1){ ;?>
                <li class="menu-title">
                    <span class="">SETTING</span>
                </li>
                    <li class="menu-item">
                    <a href="<?php echo $url; ?>/category_add.php" class="menu-item-link">
                        <span>
                            <i class="feather-layers"></i>
                            Category Manager
                        </span>
                        <span class="badge rounded-pill bg-white text-primary shadow-sm">
                            <?php echo countTotal('categories'); ?>
                        </span>
                    </a>
                </li>
            <?php if($_SESSION['user']['role'] == 0){ ;?>
                <li class="menu-item">
                    <a href="<?php echo $url; ?>/user_list.php" class="menu-item-link">
                        <span>
                            <i class="feather-users"></i>
                            User Manager
                        </span>
                        <span class="badge rounded-pill bg-white text-primary shadow-sm">
                            <?php echo countTotal('users'); ?>
                        </span>
                    </a>
                </li>
                <?php }; ?>
                <li class="menu-spacer"></li>

            <?php }; ?>

        </ul>
<!--        logout-->
        <ul>
            <li class="menu-item">
                <a href="<?php echo $url; ?>/logout.php" class="btn btn-secondary w-100">
                    <i class="feather-lock"></i>
                    Log Out
                </a>
            </li>
        </ul>

    </div>
</div>