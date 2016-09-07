<?php
/*
Template Name: Quienes Somos
*/
?>

<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
            	<div class="jumbotron col-md-6 col-sm-6 col-xs-12">
	                <h2><?php echo $post->post_title; ?></h2>
	                <h3><?php echo $post->post_excerpt; ?></h3>
	            </div>
            </div>

        </div>
    </div>
</div>

<?php /* ?>
<!-- Search Sucursal -->
<section class="search-area clr-bg06">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12">
                <h3>Revise nuestro directorio de sucursales</h3>
                <p>Seleccione su país y sucursal Agunsa</p>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">

                <select class="form-control col-md-6 col-xs-12">
                  <option>Chile</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>

                <select class="form-control col-md-6 col-xs-12">
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
<?php */ ?>

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

<!-- Sucursales  -->
<section class="sucursal-area">
    <div class="container">
        <div class="row">

<?php /* ?>
            <?php $sucursales = get_posts(array('post_type'=>'sucursal', 'numberposts' => -1))?>
            <?php foreach($sucursales as $sucursal){?>
            <figure class="col-md-4 col-sm-6 col-xs-12 clr-bg01">
                <?php echo get_the_post_thumbnail($sucursal->ID , 'pagesucursal' , array('class' => 'img-responsive'))?>
                <figcaption class="viewed-normal">
                    <h2><?php echo $sucursal->post_title ?></h2>
                </figcaption>
                <figcaption class="hide-hover">
                    <h2><?php echo $sucursal->post_title ?></h2>
                    <p><?php echo get_field('direccion_sucursal' , $sucursal->ID)?></p>
                    <p>Email: <a href="mailto:<?php echo get_field('mail_sucursal' , $sucursal->ID)?>"><?php echo get_field('mail_sucursal' , $sucursal->ID)?></a></p>
                    <a href="<?php echo get_permalink($sucursal->ID)?>">Ir a Sucursal</a>
                </figcaption>
            </figure>
            <?php }?>
<?php */ ?>          

            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/01.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Matriz</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Matriz</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/02.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Arica</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Arica</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/03.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Antofagasta</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Antofagasta</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/04.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Coquimbo</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Coquimbo</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="http://intranetagunsa.upmedia.cl/sucursal/agunsa-coquimbo/" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12 ">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/05.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Chañaral</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Chañaral</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12 ">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/06.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Iquique</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Iquique</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12 ">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/07.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Puerto Williams</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Puerto Williams</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12 ">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/08.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Mejillones</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Mejillones</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

            <figure class="col-md-4 col-sm-6 col-xs-12 ">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/09.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>AGUNSA Centro Distribución</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>AGUNSA Centro Distribución</h2>
                    <p>Av. Andrés Bello 2687, Piso 15 Edificio del Pacífico</p>
                    <p>Email: <a href="mailto:agunsascl@agunsa.cl">agunsascl@agunsa.cl</a></p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta">Ir a Sucursal</a>
                </figcaption>
            </figure>

<?php /* ?>
            <!-- Paginador  -->
            <div class="col-md-12">
                <?php wp_pagenavi(); ?>
            </div> 

<?php */ ?>

        </div>
    </div>
</section>

<?php get_footer('inside'); ?>