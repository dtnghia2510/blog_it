<?php
include_once 'connection.php';
class UserAccount extends connection{
    private $db_connect;
    function __construct(){
        $this->db_connect = new connection();
        if ($this->db_connect->checkDBConnection()){
            return true;
        }else{
            return false;
        }
    }
    public function check_login($username, $password){
        $sql = "Select *
                From user_account
                where user_name = '$username'
                and password = '$password'";
        $result = $this->db_connect->selectOneRecord($sql);
//        $rows = mysqli_num_rows($result);
//        return $rows;
        return $result;
    }
}