<?php
//Book category
require './controllers/ContentsController.php';
//content category
$tin_tuc_controller = new ContentsController();
$tin_tuc = $tin_tuc_controller->new_content();
$list_tin_tuc = $tin_tuc_controller->list_content();
$scrum_new = $tin_tuc_controller->scrum_news();
$top_scrum_new = $tin_tuc_controller->top_scrum_news();
$new_asp = $tin_tuc_controller->asp_news();
$top_asp_new = $tin_tuc_controller->top_asp_news();
$work_news = $tin_tuc_controller->work_news();
$top_work = $tin_tuc_controller->top_work_news();
?>
<div class="box1 row">
    <div class="col-md-8">
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">BÀI VIẾT MỚI CẬP NHẬT</a>
                <?php
                foreach($tin_tuc as $item){
                    ?>
                    <div class="col-md-4">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="height: 300px;">
                            <div class="d-none d-lg-block" style="height: 150px;">
                                <a class="img" href=""><img height="150px;" src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block text-success"><a href=""><?php echo $item['category_name'] ?></a></strong>
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date'] ?></i></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="col-md-12 ml-2 py-2">
            <div class="text-center">
                <h5><a href="">**Thủ thuật mới được chia sẻ**</a></h5>
            </div>
            <div class="row border-top pr-1">
                <?php
                foreach($list_tin_tuc as $item){
                    ?>
                    <p class="border-left pl-2 mb-1"> ➥ <a href=""><?php echo $item['title']?></a></p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--Box 2-->
<div class="box2 row">
    <div class="col-md-8">
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">SCRUM - MÔ HÌNH PHÁT TRIỂN PHẦN MỀM HIỆN ĐẠI</a>
                <div class="col-md-6">
                    <?php
                    foreach ($top_scrum_new as $item){
                        ?>
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <a class="img" href=""><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block  text-success"><a href=""><?php echo $item['category_name'] ?></a></strong>
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date'] ?></i></div>
                                <button class="btn btn-outline-success d-lg-block">Xem thêm...</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    foreach ($scrum_new as $item) {
                        ?>
                        <div class="box row ml-1 mb-2 border-bottom">
                            <div class="col-md-4 p-0">
                                <a class="img" href=""><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">ASP.NET</a>
                <div class="col-md-6">
                    <?php
                    foreach ($top_asp_new as $item) {
                        ?>
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <a class="img" href=""><img src="admin/<?php echo $item['url_image']; ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block  text-success"><a href=""><?php echo $item['category_name']; ?></a></strong>
                                <h6 class="mb-0"><a href=""><?php echo $item['title']; ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date']; ?></i></div>
                                <button class="btn btn-outline-success d-lg-block">Xem thêm...</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    foreach ($new_asp as $item){
                        ?>
                        <div class="box row ml-1 mb-2 border-bottom">
                            <div class="col-md-4 p-0">
                                <a class="img" href=""><img src="admin/<?php echo $item['url_image']; ?>"></a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">KINH NGHIỆM THỰC TẾ</a>
                <div class="col-md-6">
                    <?php
                    foreach ($top_work as $item) {
                        ?>
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <a class="img" href=""><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block  text-success"><?php echo $item['category_name'] ?><a href=""></a></strong>
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date'] ?></i></div>
                                <button class="btn btn-outline-success d-lg-block">Xem thêm...</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    foreach ($work_news as $item) {
                        ?>
                        <div class="box row ml-1 mb-2 border-bottom">
                            <div class="col-md-4 p-0">
                                <a class="img" href=""><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './views/content_category/list_category.php';
    ?>
</div>

