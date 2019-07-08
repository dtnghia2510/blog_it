<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="assets/ckeditor/ckeditor.js"></script>
    <script src="assets/ckfinder/ckfinder.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="./assets/style.css">
    <title>Admin - Blog IT</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Blog IT - Administrator
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="welcome" href="#" target="_blank">Xin chào: <?php echo $login_session; ?></a></li>
                <li><a href="" target="_blank">Đăng xuất</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li><a href="?danhsach_tintuc"><span class="glyphicon glyphicon-th"></span> Bài viết</a></li>
                            <li><a href="?danhsach_loaitintuc"><span class="glyphicon glyphicon-th-list"></span> Loại bài viết</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> User</a></li>
                        </ul>
                    </div>
                    <!-- /.nav-bar-collapse -->
                </nav>

            </div>
        </div>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default">