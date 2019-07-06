<?php
//Book category
require './controllers/ContentCategoryController.php';
require './controllers/ContentController.php';
//content category
if (isset($_GET['danhsach_loaitintuc'])){
    $loaibaiviet = new ContentCategoryController();
    $data = $loaibaiviet->index();
    include "./views/content_category/index.php";
}
if (isset($_GET['tao_loai_tin_tuc'])){
    $loaibaiviet = new ContentCategoryController();
    $data = $loaibaiviet->create();
    include('./views/content_category/create.php');
}
if (isset($_GET['edit_loaitintuc'])){
    $loaitintuc = new ContentCategoryController();
    $result = $loaitintuc->detail();
    include "./views/content_category/update.php";
}
//Update du lieu
if (isset($_POST['capnhat_loaitintuc'])){
    $loaitintuc = new ContentCategoryController();
    $result = $loaitintuc->update();
}
//Delete du lieu
if (isset($_GET['delete_loaitintuc'])){
    $loaitintuc = new ContentCategoryController();
    $result = $loaitintuc->delete_detail();
    include "./views/content_category/delete.php";
}
if (isset($_POST['xoa_loaitintuc'])){
    $loaitintuc = new ContentCategoryController();
    $result = $loaitintuc->delete();
}

//Content
if (isset($_GET['danhsach_tintuc'])){
    $baiviet = new ContentController();
    $data = $baiviet->index();
    include "./views/content/index.php";
}
if (isset($_GET['tao_tin_tuc'])){
    $loaibaiviet = new ContentCategoryController();
    $baiviet = new ContentController();
    $data = $loaibaiviet->index();
    $result = $baiviet->create();
    include('./views/content/create.php');
}
if (isset($_GET['edit_tintuc'])){
    $loai_bai_viet = new ContentCategoryController();
    $data = $loai_bai_viet->index();
    $bai_viet = new ContentController();
    $result = $bai_viet->detail();
    include "./views/content/update.php";
}
if (isset($_POST['capnhat_baiviet'])){
    $baiviet = new ContentController();
    $result = $baiviet->update();
}
//Check button to delete
if (isset($_GET['delete_tintuc'])){
    $loai_bai_viet = new ContentCategoryController();
    $data = $loai_bai_viet->index();
    $bai_viet = new ContentController();
    $result = $bai_viet->delete_detail();
    include "./views/content/delete.php";
}
//Delete du lieu
if (isset($_POST['xoa_tintuc'])){
    $tintuc = new ContentController();
    $result = $tintuc->delete();
}
