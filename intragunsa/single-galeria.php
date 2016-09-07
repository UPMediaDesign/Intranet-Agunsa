<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id()?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'singleenc' ); ?>

<div class="heading-news" >
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-6 col-sm-6 col-xs-12">

                    <h2><?php echo $post->post_title; ?></h2>
                    <h3><?php echo substr($post->post_excerpt , 0, 133)?></h3>
                </div>
            </div>

        </div>
    </div>
</div>



<section id="galeria">
<div class="container">
    <div class="row">

            <article class="col-md-12 col-sm-12 col-xs-12 single-content">
                <div class="breadcrumb">
                    <a href="<?php echo get_bloginfo('home_url');?>">Home » </a><a href="<?php echo get_bloginfo('home_url');?>/quienes-somos">Sucursales</a> » <strong><?php echo $post->post_title; ?></strong>
                </div>



                <?php /*?>
                <ul class="nav nav-pills nav-stacked gallery">

                    <li class="col-md-3 col-xs-3 col-esp"><a data-target="#lightbox" data-toggle="modal" data-slide-to="<?php echo $imgcount?>"><img src="https://placeholdit.imgix.net/~text?txtsize=17&txt=180%C3%97180&w=180&h=180" class="img-responsive" alt="..."></a>
                        </li>

                    <li class="col-md-3 col-xs-3 col-esp"><a data-target="#lightbox" data-toggle="modal" data-slide-to="<?php echo $imgcount?>"><img src="https://placeholdit.imgix.net/~text?txtsize=17&txt=180%C3%97180&w=180&h=180" class="img-responsive" alt="..."></a>
                        </li>

                    <li class="col-md-3 col-xs-3 col-esp"><a data-target="#lightbox" data-toggle="modal" data-slide-to="<?php echo $imgcount?>"><img src="https://placeholdit.imgix.net/~text?txtsize=17&txt=180%C3%97180&w=180&h=180" class="img-responsive" alt="..."></a>
                        </li>

                    <li class="col-md-3 col-xs-3 col-esp"><a data-target="#lightbox" data-toggle="modal" data-slide-to="<?php echo $imgcount?>"><img src="https://placeholdit.imgix.net/~text?txtsize=17&txt=180%C3%97180&w=180&h=180" class="img-responsive" alt="..."></a>
                        </li>
                    
                    <div class="modal fade and carousel slide" id="lightbox">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                </div>
                                <div class="modal-body">

                                  <div class="carousel-inner">
                                    <div class="item active">

                                      <img src="https://placeholdit.imgix.net/~text?txtsize=51&txt=540%C3%97440&w=540&h=440" class="img-responsive" alt="<?php echo $modal['alt'];?>">
                                    </div>
                                    <div class="item">

                                      <img src="https://placeholdit.imgix.net/~text?txtsize=51&txt=540%C3%97440&w=540&h=440" class="img-responsive" alt="<?php echo $modal['alt'];?>">
                                    </div>
                                    <div class="item">

                                      <img src="https://placeholdit.imgix.net/~text?txtsize=51&txt=540%C3%97440&w=540&h=440" class="img-responsive" alt="<?php echo $modal['alt'];?>">
                                    </div>
                                    <div class="item">

                                      <img src="https://placeholdit.imgix.net/~text?txtsize=51&txt=540%C3%97440&w=540&h=440" class="img-responsive" alt="<?php echo $modal['alt'];?>">
                                    </div>
                                  </div><!-- /.carousel-inner -->

                                  <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>

                                  <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>

                                 </div><!-- /.modal-body -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal --> 

                </ul>
                <?php */?>


            </article>
            
            <?php /*?>
            <?php get_template_part('sidebargaleria'); ?>
            <?php */?> 
            <div class="slide">

            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="in">
                    
                    <?php echo $post->post_content; ?> 
                    <div class="carrusel responsive hidden-xs">
                        <div class="caroufredsel_wrapper">
                            <ul class="carro" >                    
                                        <li>
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g1.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="5" alt=""></li>
                                        <li>
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g2.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="6" alt="">
                                        </li>
                                        <li >
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g3.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="7" alt="">
                                        </li>
                                        <li >
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g4.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="8" alt="">
                                        </li>
                                        <li>
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g1.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="0" alt="">
                                        </li>
                                        <li >
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g2.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="1" alt="">
                                        </li>
                                        <li >
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g3.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="2" alt="">
                                        </li>
                                        <li>
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g4.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="3" alt="">
                                        </li>
                                        <li >
                                            <img src="<?php echo get_bloginfo('template_directory');?>/images/small_g1.jpg" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="4" alt="">
                                        </li>
                                    </ul>            
                                </div>
                        <div class="clear">
                            
                        </div>

                    </div>
                </div>
            </div>
        
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-esp">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g1.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g2.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g3.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g4.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g1.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g2.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g3.jpg" class="img-responsive">
                    </div>
                    <div class="item active">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g4.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/big_g1.jpg" class="img-responsive">
                    </div>
                                        
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <div class="clear"></div>
           
    </div>
    </div>
</div>
</section>

<?php get_footer('inside');?>