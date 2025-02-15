<?php
get_header();
global $alert, $status;
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm sản slide mới</h3>
                </div>
            </div>
            <?php if (!empty($alert)) echo $alert;
            ?>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="name">Tên slide</label>
                        <?php echo form_error('name_slide', 'add-user');
                        ?>
                        <input type="text" name="name_slide" id="name" value="<?php echo set_value('name_slide'); ?>">
                        <label for="link">Link</label>
                        <?php echo form_error('link', 'add-user');
                        ?>
                        <input type="text" name="link" id="link" value="<?php echo set_value('link'); ?>">
                        <label for="order_slide">Thứ tự</label>
                        <?php echo form_error('order_slide', 'add-user');
                        ?>
                        <input type="text" name="order_slide" id="order_slide" value="<?php echo set_value('order_slide'); ?>">
                        <label for="desc_slide">Mô tả</label>
                        <?php echo form_error('desc_slide', 'add-user');
                        ?>
                        <textarea class="ckeditor" name="desc_slide" id="desc_slide" cols="30" rows="10"><?php echo set_value('desc_slide'); ?></textarea>
                        <br>
                        <label for="path_img">Hình ảnh slide</label>
                        <?php echo form_error('file_size', 'add-user');
                        ?>
                        <?php echo form_error('file_type', 'add-user');
                        ?>
                        <input type="file" name="file" id="path_img"><br>
                        <img style="max-width: 200px; height: auto;" src="<?php if (file_exists($upload_file)) echo $upload_file; ?>" alt="">
                        <br>
                        <label for="status">Trạng thái</label>
                        <?php echo form_error('status', 'add-user');
                        ?>
                        <select name="status" id="status">
                            <option value="">Chọn</option>
                            <option <?php if ($status == 'waiting') echo "selected = 'selected'"; ?> value="waiting">Chờ duyệt</option>
                            <option <?php if ($status == 'posted') echo "selected = 'selected'"; ?> value="posted">Đã đăng</option>
                        </select>
                        <input type="submit" value="Thêm slide" id="btn-add-slide" name="btn-add-slide">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>