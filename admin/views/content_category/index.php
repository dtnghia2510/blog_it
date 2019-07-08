<?php
ob_start();
include_once './views/layouts/header.php';
?>
<div class="panel-heading" style="height: 70px;">
    <h3 class="pull-left">Loại tin tức</h3>
    <form action="index.php" method="get" class="pull-right form-group form-inline">
        <input type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa...">
        <button name="btn_search" class="btn btn-primary" style="margin-left: 1px;">Tìm kiếm</button>
    </form>
</div>
<div class="panel-body">
    <p>
        <a href="?tao_loai_tin_tuc" class="float-right btn btn-default">Thêm mới</a>
    </p>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Loại tin tức</th>
                    <th>Mô tả</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $value){
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><a href="?edit_loaitintuc=<?php echo $value['content_category_id'] ?>"><?php echo $value['category_name'] ?></a></td>
                        <td><?php echo $value['description'] ?></td>
                        <td><?php echo $value['created_date'] ?></td>
                        <td class = "text-center">
                            <a href="?delete_loaitintuc=<?php echo $value['content_category_id'] ?>"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once './views/layouts/footer.php';
?>
