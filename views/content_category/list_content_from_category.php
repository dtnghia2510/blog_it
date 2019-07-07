<div class="box1 row">
    <div class="col-md-8">
        <div class="row mb-2">
            <div class="col-md-12 row">
                <?php
                foreach($data as $item){
                    ?>
                    <div class="col-md-4">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="height: 300px;">
                            <div class="d-none d-lg-block" style="height: 150px;">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img height="150px;" src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block text-success"><a href=""><?php echo $item['category_name'] ?></a></strong>
                                <h6 class="mb-0"><a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title'] ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date'] ?></i></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <?php
        include './views/content_category/list_category.php';
        ?>
    </div>
</div>
