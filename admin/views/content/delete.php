<?php
include './views/layouts/header.php';
?>

<div class="panel-heading">
    Xác nhận xóa
</div>
<div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_bai_viet" value="<?php echo $result[0] ?>">
        <div class="form-group">
            <label>Thể loại bài viết:</label>
            <select name="id_loai_bai" readonly="" class="form-control" required>
                <option value="<?php echo $result[1] ?>"><?php echo $result[12] ?></option>
                <option value="">Chọn thể loại bài viết</option>
                <?php  foreach ($data as $content_category) { ?>
                    <option value="<?php echo $content_category['content_category_id'] ?>"><?php echo $content_category['category_name'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tiêu đề<span class="text-danger"> (*)</span></label>
            <input readonly type="text" value="<?php echo $result[4] ?>" placeholder="Tối đa 100 ký tự" name="tieu_de" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="xoa_tintuc" class="btn btn-d    efault">Xóa</button>
            <a href="?danhsach_tintuc" class="btn btn-primary">Danh sách tin tức</a>
        </div>
    </form>
</div>
