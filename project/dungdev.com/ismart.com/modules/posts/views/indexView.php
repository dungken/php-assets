<?php
get_header();
// show_array($posts);
?>
<div id="main-content-wp" class="clearfix detail-blog-page">

    <div class="wp-inner">
        <?php
        if (!empty($posts)) {
        ?>
            <div class="secion" id="breadcrumb-wp">
                <div class="secion-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="" title="">Trang chủ</a>
                        </li>
                        <li>
                            <a href="?mod=posts" title="">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-content fl-right">
                <div class="section" id="list-blog-wp">
                    <div class="section-head clearfix">
                        <h3 class="section-title">Blog</h3>
                    </div>
                    <div class="section-detail">

                        <ul class="list-item">
                            <?php
                            foreach ($posts as $e) {
                                
                            ?>
                                <li class="clearfix">
                                    <a href="?mod=posts&action=detail&id=<?php echo $e['id'] ?>" title="" class="thumb fl-left">
                                        <img src="admin/<?php echo $e['path_thumb'] ?>" alt="">
                                    </a>
                                    <div class="info fl-right">
                                        <a href="?mod=posts&action=detail&id=<?php echo $e['id'] ?>" title="" class="title"><?php echo $e['title'] ?></a>
                                        <span class="create-date"><?php echo $e['created_at'] ?></span>
                                        <p class="desc"><?php echo $e['desc_post'] ?></p>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="section" id="paging-wp">
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <li>
                                <a href="" title="">1</a>
                            </li>
                            <li>
                                <a href="" title="">2</a>
                            </li>
                            <li>
                                <a href="" title="">3</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        } else echo "Không có dữ liệu!";
        ?>
        <div class="sidebar fl-left">
            <div class="section" id="selling-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-13.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Laptop Asus A540UP I5</a>
                                <div class="price">
                                    <span class="new">5.190.000đ</span>
                                    <span class="old">7.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-11.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-12.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-05.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-22.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-23.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-18.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a href="?page=detail_product" title="" class="thumb fl-left">
                                <img src="public/images/img-pro-15.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="?page=detail_product" title="" class="thumb">
                        <img src="public/images/banner.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>