<?php
include_once 'connection.php';
class Content extends connection{
    private $db_connect;
    function __construct(){
        $this->db_connect = new connection();
        if ($this->db_connect->checkDBConnection()){
            return true;
        }else{
            return false;
        }
    }
    //Create data
    public function insert_content($id_loai_bai, $mo_ta, $hinh_anh, $tieu_de, $tom_tat, $ngay_tao, $nguoi_tao, $trang_thai){
        $sql = "INSERT INTO content(content_category_id, content, url_image, title, summary, created_date, created_by, isdeleted) 
        values ($id_loai_bai,'$mo_ta', '$hinh_anh', '$tieu_de', '$tom_tat','$ngay_tao','$nguoi_tao', $trang_thai)";
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
    //View data
    public function select_content(){
        $sql = "Select * 
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Update data
    public function update_content($id_bai_viet, $id_loai_bai, $mo_ta, $hinh_anh, $tieu_de, $tom_tat, $ngay_cap_nhat, $nguoi_cap_nhat){
        $sql = "Update content 
                SET content_category_id = $id_loai_bai, content = '$mo_ta', url_image = '$hinh_anh', title = '$tieu_de', summary = '$tom_tat', modified_date = '$ngay_cap_nhat', modified_by = '$nguoi_cap_nhat'
                where content_id = $id_bai_viet";
        $result = $this->db_connect->updateQuery($sql);
        return $result;
    }
    //Get 1 record base sql_select
    public function select_One_Record($content_id){
        $sql = "SELECT *
                FROM content, content_category
                WHERE content.content_id = $content_id 
                AND content.content_category_id = content_category.content_category_id";
        $result  = $this->db_connect->selectOneRecord($sql);
        return $result;
    }
    //Delete data -- 1 record
    public function delete_content($content_id){
        $sql = "Update content
                Set isdeleted = 1
                where content_id = $content_id";
        $result = $this->db_connect->deleteQuery($sql);
        return $result;
    }
}
