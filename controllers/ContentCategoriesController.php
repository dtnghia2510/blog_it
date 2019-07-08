<?php
include './models/ContentCategory.php';
class ContentCategoriesController{
    private $content_category_model;
    function __construct(){
        $this->content_category_model = new ContentCategory();
    }
    public function index(){
        return $this->content_category_model->select_content_category();
    }
    public function list_content_from_category(){
        $id = $_GET['loaitintuc'];
        $result = $this->content_category_model->select_content_from_category($id);
        return $result;
    }
}