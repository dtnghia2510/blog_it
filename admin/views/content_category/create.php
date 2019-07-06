<div class="panel-heading">
    Thêm mới loại tin tức
</div>
<div class="panel-body">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Loại bài viết</label>
            <input type="text" name="loai_tin_tuc" class="form-control" required  oninvalid="this.setCustomValidity('Bạn phải nhập loại tin tức')" oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mo_ta" class="form-control" rows="6"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Lưu</button>
            <a href="?danhsach_loaitintuc" class="btn btn-primary">Danh sách loại tin tức</a>
        </div>
    </form>
</div>
