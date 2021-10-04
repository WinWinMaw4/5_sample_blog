</div>
</div>
</section>

<script src="<?php echo $url; ?>/assets/vendor/jquery-3.6.0.min.js"></script>
<!--<script src="--><?php //echo $url; ?><!--/assets/vendor/bootstrap/js/bootstrap.js"></script>-->
<!--<script src="--><?php //echo $url; ?><!--/assets/vendor/popper.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap5.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="<?php echo $url; ?>/assets/js/app.js"></script>
<!--<script src="--><?php //echo $url; ?><!--/assets/js/dashboard.js"></script>-->
<script>
    let currentPage = location.href;
    $(".menu-item-link").each(function () {
        let links = $(this).attr('href');
        if(currentPage == links){
            $(this).addClass('active');
        }
    });

</script>

</body>
</html>
