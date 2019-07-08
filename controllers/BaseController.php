<?php
//Book category
require './controllers/ContentCategoriesController.php';
require './controllers/ContentsController.php';
//content category
if (isset($_GET['trang_chu'])){
    $tin_tuc_controller = new ContentsController();
    $tin_tuc = $tin_tuc_controller->new_content();
    $scrum_new = $tin_tuc_controller->scrum_news();
    $top_scrum_new = $tin_tuc_controller->top_scrum_news();
    $new_asp = $tin_tuc_controller->asp_news();
    $top_asp_new = $tin_tuc_controller->top_asp_news();
    $work_news = $tin_tuc_controller->work_news();
    $top_work = $tin_tuc_controller->top_work_news();
    //List content title
    include './views/content/new_content.php';
}
if (isset($_GET['chitiet_tintuc'])){
    $loai_bai_viet = new ContentCategoriesController();
    $data = $loai_bai_viet->index();
    $bai_viet = new ContentsController();
    $result = $bai_viet->detail();
    include './views/content/detail_news_content.php';
}
if (isset($_GET['tatcabaiviet'])){
    $tin_tuc_controller = new ContentsController();
    $all_content = $tin_tuc_controller->select_all_news();
    include "./views/content/all_content.php";
}
if (isset($_GET['loaitintuc'])){
    $loai_bai_viet = new ContentCategoriesController();
    $data = $loai_bai_viet->list_content_from_category();
    include "./views/content_category/list_content_from_category.php";
}
