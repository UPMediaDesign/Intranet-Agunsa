<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id(13)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-6 col-sm-6 col-xs-12">
                    <?php $postt = get_post(13); ?>
                    <h2><?php echo $postt->post_title; ?></h2>
                    <h3><?php echo $postt->post_excerpt; ?></h3>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer('inside'); ?>