<?php
get_header();
?>

<?php
$id = $_GET['id'];
$page = get_page($id);
// show_array($page);
?>

<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php
        get_sidebar();
        ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $page['page_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $page['created_at'] ?></p>
                    <div class="content-news">
                        <?php echo $page['page_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>