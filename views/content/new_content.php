<div class="box1 row">
    <div class="col-md-8">
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">BÀI VIẾT MỚI CẬP NHẬT</a>
                <?php
                foreach($tin_tuc as $item){
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
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">SCRUM - MÔ HÌNH PHÁT TRIỂN PHẦN MỀM HIỆN ĐẠI</a>
                <div class="col-md-6">
                    <?php
                    foreach ($top_scrum_new as $item){
                        ?>
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block text-success"><a href=""><?php echo $item['category_name'] ?></a></strong>
                                <h6 class="mb-0"><a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title'] ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date'] ?></i></div>
                                <a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>" class="btn btn-outline-success d-lg-block">Xem chi tiết</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    foreach ($scrum_new as $item) {
                        ?>
                        <div class="box row ml-1 mb-2 border-bottom">
                            <div class="col-md-4 p-0">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="mb-0"><a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title'] ?></a></h6>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">ASP.NET</a>
                <div class="col-md-6">
                    <?php
                    foreach ($top_asp_new as $item) {
                        ?>
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img src="admin/<?php echo $item['url_image']; ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block text-success"><a href=""><?php echo $item['category_name']; ?></a></strong>
                                <h6 class="mb-0"><a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title']; ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date']; ?></i></div>
                                <a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>" class="btn btn-outline-success d-lg-block">Xem chi tiết</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    foreach ($new_asp as $item){
                        ?>
                        <div class="box row ml-1 mb-2 border-bottom">
                            <div class="col-md-4 p-0">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img src="admin/<?php echo $item['url_image']; ?>"></a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="mb-0"><a href=""><?php echo $item['title'] ?></a></h6>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12 row">
                <a class="line m-2" href="">KINH NGHIỆM THỰC TẾ</a>
                <div class="col-md-6">
                    <?php
                    foreach ($top_work as $item) {
                        ?>
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-auto d-none d-lg-block">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col p-2 d-flex flex-column position-static">
                                <strong class="d-inline-block  text-success"><?php echo $item['category_name'] ?><a href=""></a></strong>
                                <h6 class="mb-0"><a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title'] ?></a></h6>
                                <div class="mb-1 text-muted text-right"><i><?php echo $item['created_date'] ?></i></div>
                                <a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>" class="btn btn-outline-success d-lg-block">Xem chi tiết</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    foreach ($work_news as $item) {
                        ?>
                        <div class="box row ml-1 mb-2 border-bottom">
                            <div class="col-md-4 p-0">
                                <a class="img" href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><img src="admin/<?php echo $item['url_image'] ?>"></a>
                            </div>
                            <div class="col-md-8">
                                <h6 class="mb-0"><a href="?chitiet_tintuc=<?php echo $item['content_id'] ?>"><?php echo $item['title'] ?></a></h6>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <?php
        include './views/content/list_content_title.php';
        ?>
        <?php
        include_once './views/content_category/list_category.php';
        ?>
    </div>
</div>

