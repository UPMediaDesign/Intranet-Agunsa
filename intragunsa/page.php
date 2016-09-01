<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container-fluid gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
            	<div class="jumbotron col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
	                <h2><?php echo $post->post_title; ?></h2>
	                <h3><?php echo $post->post_excerpt; ?></h3>
	                <p><?php echo get_field('bajada_preheader')?></p>
	            </div>
            </div>

        </div>
    </div>
</div>

<section class="about-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</section>

<?php get_footer('inside'); ?>