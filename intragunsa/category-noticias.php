<?php get_header('insidernews'); ?>

<div class="heading-news">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-8 col-sm-8 col-xs-12">
                     <?php $postt = get_post(9); ?>
                    <h2><?php echo $postt->post_title; ?></h2>
                </div>
            </div>

        </div>
    </div>
</div>

<?php /* ?>
<!-- Actividades -->
<section class="news area">
    <div class="container">
        <div class="row">
                    <?php $noticias = get_posts(array('post_type' => 'post', 'numberposts' => 10 , 'post__not_in')) ?>
                    <?php $countnoticias = 0?>
                    <?php foreach($noticias as $noticia):?>
                    <?php $countnoticias++?>
                    
                    <?php if($countnoticias == 1 )
                        {
                            $notsize = 'actidestacado';
                            $notclass = 'principales col-md-6';
                            $notsocial = 'soc-visible';
                            $notcolimg = 'heading col-md-12 col-sm-12 col-xs-12';
                            $notcaption = 'col-md-11 col-sm-11 col-xs-11';
                        }

                        else{
                            $notsize = 'actilista';
                            $notclass = 'second col-md-6 col-sm-6 col-xs-12';
                            $notsocial = 'soc-secondary';
                            $notcolimg = 'non-display';
                            $notcolcaption = 'col-md-9 col-sm-8 col-xs-8'; 
                            $notspanfloat = 'col-xs-2';                 
                        }

                    ?>
                        <figure class="<?php echo $notclass?>">
                            <div class="act-date <?php echo $notspanfloat?>">
                                <span class="day"><?php echo the_time('d')?></span>
                                <span class="month"><?php echo the_time('M')?></span>
                            </div>
                            <a class="<?php echo $notcolimg ?>" href="<?php echo get_permalink($noticia->ID)?>"><?php echo get_the_post_thumbnail($noticia->ID , $actsize , array('class' => 'img-responsive'))?></a>
                            <figcaption class="<?php echo $actcolcaption ?>">
                                <h4><a href="<?php echo get_permalink($noticia->ID)?>" ><?php echo $noticia->post_title?></a></h4>
                                <p><?php echo substr($noticia->post_content , 0, 95)?>...</p>
                                
                                <a class="vermas" href="<?php echo get_permalink($noticia->ID)?>" title="Ver más" rel="blog">Ver más <i class="fa fa-arrow-right"></i></a>

                                <div class="separator"></div>
                            </figcaption>
                        </figure>

                    
                    <?php endforeach?>                
                    <div class="clear separator"></div>
                    <div class="col-md-6">
                        <?php wp_pagenavi(); ?>
                    </div>            
        </div>
    </div>
</section>
<?php */ ?>


<section class="principal-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-esp">
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/big-news.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <h2>AGUNSA expande su infraestructura para sus diversos servicios de almacenaje</h2>
                    <p>Curabitur dignissim lectus nibh, eget auctor magna faucibus nec. Nunc aliquam eu ex in scelerisque. Curabitur eleifend interdum lectus, eget tempor nunc vestibulum in. Aliquam libero elit, ornare sit amet dolor nec, porttitor cursus metus. </p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search Sucursal -->
<section class="search-area news clr-bg06">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>Revise entradas por año</h3>
                <p>Seleccione su año, país y sucursal Agunsa</p>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">

                <select class="form-control year col-md-2 col-md-2 col-xs-12">
                  <option>2016</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>

                <select class="form-control country col-md-5 col-sm-5 col-xs-12">
                  <option>Chile</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>

                <select class="form-control city col-md-5 col-sm-5 col-xs-12">
                  <option>Valparaíso</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>

            </div>
        </div>
    </div>
</section>

<section class="secondary-news">
    <div class="container">
        <div class="row">
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/24.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/25.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/26.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/24.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/25.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/26.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/24.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/25.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/26.jpg" alt="">
                <figcaption class="news-title">
                    <h2>AGUNSA busca expansión en negocio de aeropuertos en Chile y el extranjero</h2>
                </figcaption>
                <figcaption class="news-excerpt">
                    <p>El vicepresidente de la firma destacó que también han tenido acercamientos con Cuba, para desarrollar el área de logística.</p>
                    <a href="http://intranetagunsa.upmedia.cl/2016/08/10/nueva-intranet-corporativa-agunsa/" class="cta">Ver noticia</a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>


<?php get_footer('inside'); ?>