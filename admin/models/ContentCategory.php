<?php
include_once 'connection.php';
class ContentCategory extends connection{
    private $db_connect;
    function __construct(){
        $this->db_connect = new connection();
        if ($this->db_connect->checkDBConnection()){
            return true;
        }else{
            return false;
        }
    }
    //View data
    public function select_content_category(){
        $sql = "Select * 
                from content_category
                where isdeleted = 0
                ORDER BY created_date DESC";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    public function search_select_content_category($search){
        $sql = "Select * 
                from content_category
                where isdeleted = 0
                and category_name like '%$search%'
                ORDER BY created_date DESC";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //create content category
    public function insert_content_category($ten_loai_tin, $mo_ta, $ngay_tao, $nguoi_tao, $trang_thai){
        $sql = "INSERT INTO content_category(category_name, description, created_date, created_by, isdeleted) values ('$ten_loai_tin', '$mo_ta', '$ngay_tao', '$nguoi_tao', $trang_thai)";
        $result = $this->db_connect->insertQuery($sql);
        return $result;
    }
    //Update content category
    public function update_content_category($id_loai_tin, $ten_loai_tin, $mo_ta, $ngay_cap_nhat, $nguoi_cap_nhat){
        $sql = "Update content_category 
                SET category_name = '$ten_loai_tin', description = '$mo_ta', modified_date = '$ngay_cap_nhat', modified_by = '$nguoi_cap_nhat' 
                where content_category_id = $id_loai_tin";
        $result = $this->db_connect->updateQuery($sql);
        return $result;
    }
    //Get 1 record base sql_select
    public function select_One_Record($id_loai_tin){
        $sql = "Select *
                From content_category
                Where content_category_id = $id_loai_tin";
        $result  = $this->db_connect->selectOneRecord($sql);
        return $result;
    }
    //Delete 1 recored
    public function delete_content_category($id_loai_tin){
        $sql = "Update content_category
                Set isdeleted = 1
                where content_category_id = $id_loai_tin";
        $result = $this->db_connect->deleteQuery($sql);
        return $result;
    }
}
