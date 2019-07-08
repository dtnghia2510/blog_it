<?php
include './models/UserAccount.php';
class UserAccountController{
    private $user_model;
    function __construct(){
        $this->user_model = new UserAccount();
    }
    public function login()
    {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "<script>alert('Bạn chưa nhập tên đăng nhập hoặc mật khẩu')</script>";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $this->user_model->check_login($username, $password);
            if ($result) {
                $_SESSION['username'] = $username;
                header('Location: http://localhost/blog_it/admin/?danhsach_tintuc');
            }else{
                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
            }
        }
    }
    public function logout()
    {
        if (isset($_SESSION['username'])){
            unset($_SESSION['username']); // xóa session login
            header('Location: http://localhost/blog_it/admin/?dang_nhap');
        }
    }
}