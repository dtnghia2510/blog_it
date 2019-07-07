<div class="box1 row">
    <div class="col-md-8 p-4">
        <h4 class="text-primary">Tiêu đề: <?php echo $result[4] ?></h4>
        <p class="text-right"><i>Ngày đăng: <?php echo $result[6] ?></i></p>
        <?php echo $result[2] ?>
    </div>
    <div class="col-md-4">
        <?php
        include_once './views/content/list_content_title.php';
        ?>
    </div>
</div>

