<?php
//Book category
require './controllers/ContentCategoriesController.php';
//content category
$loai_tin_tuc = new ContentCategoriesController();
$loai_tin = $loai_tin_tuc->index();
?>

<div class="col-md-4">
    <div class="col-md-12">
        <div class="text-center">
            <h5><a href="">CHUYÊN MỤC BÀI VIẾT</a></h5>
        </div>
        <div class="border-top">
            <?php
                foreach ($loai_tin as $value){
                    ?>
                    <p class="border-left pl-2 mb-1">✡<a class="pl-1" href=""><?php echo $value['category_name'] ?></a></p>
            <?php
                }
            ?>
        </div>
    </div>
</div>