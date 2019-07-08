<?php 
    include_once './views/layouts/header.php';
 ?>
<div class="panel-heading">
    Cập nhật loại tin tức
</div>
<div class="panel-body">
    <form action="" method="post">
        <input type="hidden" name="id_loai_tin" value="<?php echo $result[0] ?>">
        <div class="form-group">
            <label for="">Loại bài viết</label>
            <input type="text" name="loai_tin_tuc" value="<?php echo $result[1] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mo_ta" class="form-control" rows="6"><?php echo $result[2] ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="capnhat_loaitintuc" class="btn btn-default">Lưu</button>
            <a href="?danhsach_loaitintuc" class="btn btn-primary">Danh sách loại tin tức</a>
        </div>
    </form>
</div>

