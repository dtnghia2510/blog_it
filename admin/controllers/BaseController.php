<?php
//Book category
require './controllers/ContentCategoryController.php';
require './controllers/ContentController.php';
require './controllers/UserAccountController.php';
//content category
if (isset($_GET['danhsach_loaitintuc'])){
    $loaibaiviet = new ContentCategoryController();
    $data = $loaibaiviet->index();
    if (isset($_SESSION['username'])){
        include "./views/content_category/index.php";
    }else{
        include './views/user_account/login.php';
    }
}
if (isset($_GET['btn_search'])){
    $loai_bai_viet = new ContentCategoryController();
    $data = $loai_bai_viet->list_search();
    include "./views/content_category/index.php";
}
if (isset($_GET['tao_loai_tin_tuc'])){
    $loaibaiviet = new ContentCategoryController();
    $data = $loaibaiviet->create();
    if (isset($_SESSION['username'])){
        include('./views/content_category/create.php');
    }else{
        include './views/user_account/login.php';
    }
}
if (isset($_GET['edit_loaitintuc'])){
    $loaitintuc = new ContentCategoryController();
    $result = $loaitintuc->detail();
    if (isset($_SESSION['username'])){
        include "./views/content_category/update.php";
    }else{
        include './views/user_account/login.php';
    }
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
    if (isset($_SESSION['username'])){
        include "./views/content_category/delete.php";
    }else{
        include './views/user_account/login.php';
    }
}
if (isset($_POST['xoa_loaitintuc'])){
    $loaitintuc = new ContentCategoryController();
    $result = $loaitintuc->delete();
}

//Content
if (isset($_GET['danhsach_tintuc'])){
    $baiviet = new ContentController();
    $data = $baiviet->index();
    if (isset($_SESSION['username'])){
        include "./views/content/index.php";
    }else{
        include './views/user_account/login.php';
    }
}
if (isset($_GET['tao_tin_tuc'])){
    $loaibaiviet = new ContentCategoryController();
    $baiviet = new ContentController();
    $data = $loaibaiviet->index();
    $result = $baiviet->create();
    if (isset($_SESSION['username'])){
        include('./views/content/create.php');
    }else{
        include './views/user_account/login.php';
    }
}
if (isset($_GET['edit_tintuc'])){
    $loaibaiviet = new ContentCategoryController();
    $bai_viet = new ContentController();
    $data = $loaibaiviet->index();
    $result = $bai_viet->detail();
    if (isset($_SESSION['username'])){
        include "./views/content/update.php";
    }else{
        include './views/user_account/login.php';
    }
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
    if (isset($_SESSION['username'])){
        include "./views/content/delete.php";
    }else{
        include './views/user_account/login.php';
    }
}
//Delete du lieu
if (isset($_POST['xoa_tintuc'])){
    $tintuc = new ContentController();
    $result = $tintuc->delete();
}

//User Account login
if (isset($_GET['dang_nhap'])){
    include "./views/user_account/login.php";
}
if (isset($_POST['btn_dang_nhap'])){
    $user = new UserAccountController();
    $result = $user->login();
}
if (isset($_GET['dang_xuat'])) {
    $user = new UserAccountController();
    $kq = $user->logout();
}

