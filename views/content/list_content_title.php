<?php
require_once './controllers/ContentsController.php';
$tin_tuc_controller = new ContentsController();
$list_tin_tuc = $tin_tuc_controller->list_content();
?>
    <div class="col-md-12 ml-2 py-2">
        <div class="text-center">
            <h5><a href="">**Thủ thuật mới được chia sẻ**</a></h5>
        </div>
        <div class="row border-top pr-1">
            <?php
            foreach($list_tin_tuc as $item){
                ?>
                <p class="border-left pl-2 mb-1"> ➥ <a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title']?></a></p>
                <?php
            }
            ?>
        </div>
    </div>
