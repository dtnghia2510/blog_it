<?php
include './views/layouts/header.php';
?>
<div class="panel-heading">
    Loại tin tức
</div>
<div class="panel-body">
    <p>
        <a href="?tao_loai_tin_tuc" class="btn btn-default">Thêm mới</a>
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
