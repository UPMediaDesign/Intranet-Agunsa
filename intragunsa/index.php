<?php get_header();?>

<section class="bg-cover" style="background-image:url(<?php echo get_field('home_background' , 'options')?>);">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		
        <div class="carousel-inner" role="listbox">

            
            <div class="">
                <div class="container">
                    <div class="row">
                        <?php $sliders = get_posts(array('post_type' => 'post' , 'numberposts' => 4)) ?>
                        <?php $slc = 0?>
                        <?php foreach($posts as $slide):?>
                        <?php $slc++?>

                        <div class="jumbotron base col-md-6 item <?php if($slc== 1){?>active<?php }?>" id="slider">
                            <h2><?php echo $slide->post_title?></h2>
                        <p class="paragraph"><?php echo substr($slide->post_excerpt , 0, 133)?>...</p>
                
                        <a class="btn btn-danger clr-bg01" target="_blank" href="<?php echo get_permalink($slide->ID);?>">Ver Más</a>
                        </div>
                
                        <div class="col-md-1 skk desktop"></div>
                        <div class="clear"></div>

                        <?php endforeach;?> 
                        <!-- Navigation -->
                        <div class="col-md-2 control">
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left clr-bg00" aria-hidden="true"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right clr-bg00" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- Navigation End --> 

                    </div>
                </div>
  
            </div>


        </div> 

    </div>
</section>

<div class="slide-controller">
    <!-- Controls -->
    <div class="container">
        <div class="row">



        </div>
    </div>
</div>



<?php get_footer()?>