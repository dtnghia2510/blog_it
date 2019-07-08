<?php
include './models/Content.php';
class ContentController{
    private $content_model;
    function __construct(){
        $this->content_model = new Content();
    }

    public function index(){
        return $this->content_model->select_content();
    }
    //Create to save database
    public function create(){
        if (isset($_POST['tieu_de']) && isset($_POST['id_loai_bai'])) {
            $id_loai_bai = $_POST['id_loai_bai'];
            $tieu_de = $_POST['tieu_de'];
            //Xu ly upload anh
            if (isset($_FILES['url_anh'])) {
                if ($_FILES['url_anh']['error'] > 0){
                    $hinh_anh = '';
                }else {
                    move_uploaded_file($_FILES['url_anh']['tmp_name'], 'assets/images/' . $_FILES['url_anh']['name']);
                    $target_dir = "assets/images/";
                    $target_file = $target_dir . basename($_FILES["url_anh"]["name"]);
                    $hinh_anh = $target_file;
                }
            }
            $mo_ta = $_POST['noi_dung'];
            $tom_tat = $_POST['tom_tat'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngay_tao = date("Y-m-d h:i:sa");
            $nguoi_tao = 'admin';
            $trang_thai = 0;
            $result = $this->content_model->insert_content($id_loai_bai, $mo_ta, $hinh_anh, $tieu_de, $tom_tat, $ngay_tao, $nguoi_tao, $trang_thai);

            if ($result) {
                header("Location: http://localhost/blog_it/admin/?danhsach_tintuc");
                exit;
            } else {
                echo "<script>alert('Thêm mới không thành công')</script>";
            }
        }
    }
    //Update data
    public function update(){
        $id_bai_viet = $_POST['id_bai_viet'];
        $id_loai_bai = $_POST['id_loai_bai'];
        $tieu_de = $_POST['tieu_de'];
        //Xu ly upload anh
        if (isset($_FILES['url_anh'])) {
            if ($_FILES['url_anh']['error'] > 0){
                $hinh_anh = $_POST['old_image_url'];
            }else {
                move_uploaded_file($_FILES['url_anh']['tmp_name'], 'assets/images/' . $_FILES['url_anh']['name']);
                $target_dir = "assets/images/";
                $target_file = $target_dir . basename($_FILES["url_anh"]["name"]);
                $hinh_anh = $target_file;
            }
        }
        $mo_ta = $_POST['noi_dung'];
        $tom_tat = $_POST['tom_tat'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay_cap_nhat = date("Y-m-d h:i:sa");
        $nguoi_cap_nhat = 'admin';
        $result = $this->content_model->update_content($id_bai_viet, $id_loai_bai, $mo_ta, $hinh_anh, $tieu_de, $tom_tat, $ngay_cap_nhat, $nguoi_cap_nhat);
        if ($result){
            header("Location: http://localhost/blog_it/admin/?danhsach_tintuc");
            exit;
        }else{
            echo "<script>alert('Cập nhật thất bại')</script>";
        }
    }
    public function detail(){
        $id = $_GET['edit_tintuc'];
        $result = $this->content_model->select_One_Record($id);
        return $result;
    }
    public function delete_detail(){
        $id = $_GET['delete_tintuc'];
        $result = $this->content_model->select_One_Record($id);
        return $result;
    }
    public function delete(){
        $id = $_POST['id_bai_viet'];
        //goi model
        $result = $this->content_model->delete_content($id);
        if ($result){
            header("Location: http://localhost/blog_it/admin/?danhsach_tintuc");
            exit;
        }else{
            echo "<script>alert('Xóa không thành công. Vui lòng kiểm tra lại')</script>";
        }
    }
}