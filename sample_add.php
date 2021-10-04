

<?php include  "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"  style="text-decoration: none;"><i class="feather-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/sample_list.php" style="text-decoration: none;"> Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
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
                        <i class="feather-plus-circle text-primary"></i>Add Item
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
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="form-group">
                                <label for="photo" class="form-label mt-2">
                                    Photo Upload
                                </label>
                                <i class="feather-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="only support jpg, png"></i>
                                <input type="file" name="photo" id="photo" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="name" class="form-label mt-2">Item Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="t" class="form-label mt-2">Item Type</label>
                                <select name="t" id="t" class="form-select custom-select">
                                    <option value="0">ကုန်ဆို</option>
                                    <option value="1">ကုန်ခြောက်</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="c" class="form-label mt-2">Category</label>
                                <select name="c" id="c" class="form-select custom-select">
                                    <option value="" selected >Select Main Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sc" class="form-label mt-2">Sub Category</label>
                                <select name="sc" id="sc" class="form-select custom-select">
                                    <option value="" selected >Select Sub Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="q" class="form-label mt-2">Item Quantity</label>
                                    <input type="text" id="q" name="q" class="form-control" placeholder="">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="unit" class="form-label mt-2">Unit</label>
                                        <select name="unit" id="unit" class="form-select">
                                            <option value="0">ကုန်ဆို</option>
                                            <option value="1">ကုန်ခြောက်</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label mt-2" class="form-label">Price</label>
                                <input type="number" id="price" name="price" class="form-control" placeholder="price">
                            </div>
                            <div class="form-group">
                                <label for="des" class="form-label mt-2" class="form-label">Description</label>
                                <textarea type="text" id="des" rows="8" name="des" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary float-end"><i class="feather-plus-circle text-light"></i>
                            Add Item
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include  "template/footer.php"; ?>
