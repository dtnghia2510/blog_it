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
    //Get content from category
    public function select_content_from_category($category_id){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = $category_id
                and content.content_category_id = content_category.content_category_id
                order by content.content_id DESC";
        $result = $this->db_connect->selectQuery($sql);
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
}
