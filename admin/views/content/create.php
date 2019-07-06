<div class="panel-heading">
    Thêm mới tin tức
</div>
<div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Thể loại bài viết:</label>
            <select name="id_loai_bai" class="form-control" required  oninvalid="this.setCustomValidity('Bạn phải chọn loại bài viết')" oninput="this.setCustomValidity('')">
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
            <input type="text" placeholder="Tối đa 100 ký tự" name="tieu_de" class="form-control" required  oninvalid="this.setCustomValidity('Bạn phải nhập tiêu đề')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group">
            <label for="">Tóm tắt nội dung<span class="text-danger"> (*)</span></label>
            <textarea name="tom_tat" placeholder="Tối đa 200 ký tự" class="form-control" rows="6"></textarea>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" name="url_anh">
        </div>
        <div class="form-group">
            <label for="">Nội dung<span class="text-danger"> (*)</span></label>
            <textarea name="noi_dung" id="content" placeholder="Tối đa 200 ký tự" class="form-control" rows="6"></textarea>
            <script type="text/javascript">
                var editor = CKEDITOR.replace('content');
                CKFinder.setupCKEditor( editor, '../' );
            </script>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Lưu</button>
            <a href="?danhsach_tintuc" class="btn btn-primary">Danh sách bài viết</a>
        </div>
    </form>
</div>