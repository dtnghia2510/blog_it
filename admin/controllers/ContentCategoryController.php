<?php
include './models/ContentCategory.php';
class ContentCategoryController{
    private $content_category_model;
    function __construct(){
        $this->content_category_model = new ContentCategory();
    }

    //Display data from database
    public function index(){
        return $this->content_category_model->select_content_category();
    }
    //Create data
    public function create(){
        if (isset($_POST['loai_tin_tuc'])){
            $ten_loai_tin = $_POST['loai_tin_tuc'];
            $mo_ta = $_POST['mo_ta'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngay_tao = date("Y-m-d h:i:sa");
            $nguoi_tao = 'admin';
            $trang_thai = 0;
            $result = $this->content_category_model->insert_content_category($ten_loai_tin, $mo_ta, $ngay_tao, $nguoi_tao, $trang_thai);
            if ($result){
                header('Location: http://localhost/blog_it/admin/?danhsach_loaitintuc');
                exit;
            }else{
                echo "<script>alert('Thêm mới không thành công')</script>";
            }
        }
    }
    //Update data
    public function update(){
        if (isset($_POST['loai_tin_tuc'])){
            $id_loai_tin = $_POST['id_loai_tin'];
            $ten_loai_tin = $_POST['loai_tin_tuc'];
            $mo_ta = $_POST['mo_ta'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngay_cap_nhat = date("Y-m-d h:i:sa");
            $nguoi_cap_nhat = 'admin';
            $result = $this->content_category_model->update_content_category($id_loai_tin, $ten_loai_tin, $mo_ta, $ngay_cap_nhat, $nguoi_cap_nhat);
            if ($result){
                header("Location: http://localhost/blog_it/admin/?danhsach_loaitintuc");
                exit;
            }else{
                echo "<script>alert('Cập nhật không thành công')</script>";
            }
        }
    }
    //Detail
    public function detail(){
        $id_loai_tin = $_GET['edit_loaitintuc'];
        $result = $this->content_category_model->select_One_Record($id_loai_tin);
        return $result;
    }
    //Delete
    public function delete_detail(){
        $id_loai_tin = $_GET['delete_loaitintuc'];
        $result = $this->content_category_model->select_One_Record($id_loai_tin);
        return $result;
    }
    public function delete(){
        $id_loai_tin = $_POST['id_loai_tin'];
        $result = $this->content_category_model->delete_content_category($id_loai_tin);
        if ($result){
            header('Location: http://localhost/blog_it/admin/?danhsach_loaitintuc');
            exit;
        }else{
            echo "<script>alert('Xóa không thành công')</script>";
        }
    }
}