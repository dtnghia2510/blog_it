<?php
ob_start();
?>
<div class="panel-heading">
    Cập nhật tin tức
</div>
<div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_bai_viet" value="<?php echo $result[0] ?>">
        <div class="form-group">
            <label>Thể loại bài viết:</label>
            <select name="id_loai_bai" class="form-control" required  oninvalid="this.setCustomValidity('Bạn phải chọn thể loại bài viết')" oninput="this.setCustomValidity('')">
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
            <input required  oninvalid="this.setCustomValidity('Bạn phải nhập tiêu đề')" oninput="this.setCustomValidity('')" type="text" value="<?php echo $result[4] ?>" placeholder="Tối đa 100 ký tự" name="tieu_de" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tóm tắt nội dung<span class="text-danger"> (*)</span></label>
            <textarea required name="tom_tat" placeholder="Tối đa 200 ký tự" class="form-control" rows="6"><?php echo $result[5] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="text" name="old_image_url" class="form-control" value="<?php echo $result[3] ?>">
            <input type="file" name="url_anh" value="<?php echo $result[3] ?>">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="noi_dung" id="content" placeholder="Tối đa 200 ký tự" class="form-control" rows="6"><?php echo $result[2] ?></textarea>
            <script type="text/javascript">
                var editor = CKEDITOR.replace('content');
                CKFinder.setupCKEditor( editor, '../' );
            </script>
        </div>
        <div class="form-group">
            <button type="submit" name="capnhat_baiviet" class="btn btn-default">Lưu</button>
            <a href="?danhsach_tintuc" class="btn btn-primary">Danh sách tin tức</a>
        </div>
    </form>
</div>
