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
    public function select_content(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //View data
    public function select_new_content(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC
                Limit 3";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    public function select_list_content(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC
                Limit 10";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }

    public function select_top_scrum_news(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = 9
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id ASC
                Limit 1";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Get scrum new
    public function select_scrum_news(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = 9
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC
                Limit 4";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Get asp.net new
    public function select_top_asp_news(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = 1
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id ASC
                Limit 1";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    public function select_asp_news(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = 1
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC
                Limit 4";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    public function select_work_news(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = 10
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC
                Limit 4";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }

    public function select_top_work_news(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = 10
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id ASC
                Limit 1";
        $result = $this->db_connect->selectQuery($sql);
        return $result;
    }
    //Select all content for page
    public function select_all_content(){
        $sql = "Select *
                From content, content_category
                where content.isdeleted = 0
                and content.content_category_id = content_category.content_category_id
                ORDER BY content.content_id DESC";
        $result = $this->db_connect->selectQuery($sql);
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
}