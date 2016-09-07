<?php get_header('insidernews'); ?>

<div class="heading-news">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-6 col-sm-6 col-xs-12 col-esp">

                    <h2><?php echo $post->post_title; ?></h2>
                    <h3><?php echo substr($post->post_excerpt , 0, 133)?></h3>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="row">

            <article class="col-md-7 col-sm-7 col-xs-12 single-content">
                <div class="breadcrumb">
                    <a href="<?php echo get_bloginfo('home_url');?>">Home » </a><a href="<?php echo get_bloginfo('home_url');?>/category/noticias">Noticias</a> » <strong><?php echo $post->post_title; ?></strong>
                </div>
                <?php echo $post->post_content; ?>
            </article>
            
            <?php get_template_part('sidebarnews'); ?>
            
        </div>
    </div>
</section>

<?php get_footer('inside');?>