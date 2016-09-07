<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id()?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'singleenc' ); ?>

<div class="heading-news" style="background-image: url(<?php echo $bg[0]?>);">
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

<aside class="area-sucursal">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-esp">
                <div class="breadcrumb">
                    <a href="<?php echo get_bloginfo('home_url');?>">Home » </a><a href="<?php echo get_bloginfo('home_url');?>/quienes-somos">Sucursales</a> » <strong><?php echo $post->post_title; ?></strong>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 datos">
                <p><strong>Acerca de la Sucursal:</strong></p>
                <p>Dirección: Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                <p>Responsable Sucursal: Agustín Claro Sobarzo</p>
                <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.297887686291!2d-70.61059018523592!3d-33.415477280783975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf42c2cbce2f%3A0x6b780bcbb5608698!2sSta+Mar%C3%ADa+2800%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1472854805191" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</aside>

<section id="sucursal">
<div class="container">
    <div class="row">
            <?php /*?>
            <article class="col-md-12 col-sm-12 col-xs-12 single-content">

                
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
            
            </article>
            <?php */?>
            
            <?php /*?>
            <?php get_template_part('sidebargaleria'); ?>
            <?php */?> 
            <div class="slide">

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="in">
                    
                    <?php echo $post->post_content; ?> 
                    <div class="carrusel responsive hidden-xs">
                        <div class="caroufredsel_wrapper">
                            <ul class="carro" >                    
                                        <li>
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="5" alt=""></li>
                                        <li>
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="6" alt="">
                                        </li>
                                        <li >
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="7" alt="">
                                        </li>
                                        <li >
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="8" alt="">
                                        </li>
                                        <li>
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="0" alt="">
                                        </li>
                                        <li >
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="1" alt="">
                                        </li>
                                        <li >
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="2" alt="">
                                        </li>
                                        <li>
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="3" alt="">
                                        </li>
                                        <li >
                                            <img src="https://placeholdit.imgix.net/~text?txtsize=13&txt=120%C3%9786&w=120&h=86" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="4" alt="">
                                        </li>
                                    </ul>            
                                </div>
                        <div class="clear">
                            
                        </div>

                    </div>
                </div>
            </div>
    
           
    </div>
    </div>
</div>
</section>

<!-- Initial Contact Search -->
<section class="search-personal clr-bg06">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>Busque a un contacto específico </h3>
                <p>Solo necesita su nombre y podrá acceder a datos precisos como Sucursal, Anexo, Celular y Correo.</p>
            </div>

            <div class="col-md-8 col-sm-6 col-xs-12 search-personal">

                <form method="get" id="searchform" action="<?php bloginfo('url')?>">
                    <label class="hidden" for="s"></label>
                    <a onclick="document.getElementById('searchform').submit();"><span class="fa fa-search"></span></a>
                    <input type="text" placeholder="Ingresa búsqueda" value="" name="s" id="s">
                </form>

            </div>

        </div>
    </div>
</section>

<?php get_footer('inside');?>