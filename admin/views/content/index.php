<?php 
    include './views/layouts/header.php';
 ?>
<div class="panel-heading">
    Bài viết
</div>
<div class="panel-body">
    <p>
        <a href="?tao_tin_tuc" class="btn btn-default">Thêm mới</a>
    </p>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Loại tin tức</th>
                <th style="width: 250px;">Tiêu đề</th>
                <th>Ảnh</th>
                <th style="width: 250px;">Tóm tắt</th>
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
                    <td><?php echo $value['category_name'] ?></td>
                    <td><a href="?edit_tintuc=<?php echo $value['content_id'] ?>"><?php echo $value['title'] ?></a></td>
                    <td><img src="<?php echo $value['url_image'] ?>" alt="" width="100" height="100px;"></td>
                    <td><?php echo $value['summary'] ?></td>
                    <td><?php echo $value['created_date'] ?></td>
                    <td class = "text-center">
                        <a href="?delete_tintuc=<?php echo $value['content_id'] ?>"><i class="glyphicon glyphicon-trash"></i></a>
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