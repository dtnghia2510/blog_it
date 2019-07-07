<?php
include './models/Content.php';
class ContentsController{
    private $content_model;
    function __construct(){
        $this->content_model = new Content();
    }
    public function new_content(){
        return $this->content_model->select_new_content();
    }
    public function list_content(){
        return $this->content_model->select_list_content();
    }
    public function scrum_news(){
        return $this->content_model->select_scrum_news();
    }
    public function top_scrum_news(){
        return $this->content_model->select_top_scrum_news();
    }
    public function asp_news(){
        return $this->content_model->select_asp_news();
    }
    public function top_asp_news(){
        return $this->content_model->select_top_asp_news();
    }
    public function work_news(){
        return $this->content_model->select_work_news();
    }
    public function top_work_news(){
        return $this->content_model->select_top_work_news();
    }
    public function select_all_news(){
        $result = $this->content_model->select_all_content();
        return $result;
    }
    //Chi tiet tin tuc
    public function detail(){
        $id = $_GET['chitiet_tintuc'];
        $result = $this->content_model->select_One_Record($id);
        return $result;
    }
}