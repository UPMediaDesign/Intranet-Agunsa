<?php
/*
Template Name: Servicio Personas
*/
?>

<?php get_header('insider'); ?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
            	<div class="jumbotron col-md-6 col-sm-6 col-xs-12 col-esp">
	                <h2><?php echo $post->post_title; ?></h2>
	                <h3><?php echo $post->post_excerpt; ?></h3>
	            </div>
            </div>

        </div>
    </div>
</div>

<!-- Induccion -->
<section class="induction">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<p>Fusce tristique tempor nibh ut finibus. Suspendisse vestibulum dictum quam, et ultrices lectus scelerisque a. Vestibulum luctus tempus libero nec placerat. Aenean id convallis nibh. Aliquam tristique purus ut mattis sollicitudin. Donec quis bibendum velit.</p>
			</div>

		</div>
	</div>
</section>

<!-- Beneficios -->
<section class="benefits">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3>Beneficios</h3>
			</div>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/10.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Seguro Complementario de Salud</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Seguro Complementario de Salud</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal1">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/11.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Sala Cuna</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Sala Cuna</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal2">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/12.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Gratificación Legal</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Gratificación Legal</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal3">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/13.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Gratificación Complementaria</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Gratificación Complementaria</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal4">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/14.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Convenios de Salud</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Convenios de Salud</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal5">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/15.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Prestamos Habitacionales</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Prestamos Habitacionales</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal6">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/16.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Gimnasio SportLife</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Gimnasio SportLife</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal7">Ver Beneficio</a>
                </figcaption>
            </figure>

            <figure class="col-md-3 col-sm-4 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory');?>/images/17.jpg" class="img-responsive" alt="">
                <figcaption class="view-normal">
                    <h2>Centro de Vacaciones</h2>
                </figcaption>
                <figcaption class="view-data">
                    <h2>Centro de Vacaciones</h2>
                    <p>Ut interdum risus vitae quam vestibulum sodales. Donec ac elit tempus, porttitor nisl a, accumsan leo.</p>
                    <div class="halfseparator"></div>
                    <a href="" class="cta" data-toggle="modal" data-target="#myModal8">Ver Beneficio</a>
                </figcaption>
            </figure>

		</div>
	</div>
</section>

<!-- Modal Inicio -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Seguro Complementario de Salud</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Sala Cuna</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Gratificación Legal</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Gratificación Complementaria</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Convenios de Salud</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Prestamos Habitacionales</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Gimnasio Sportlife</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">Centro de Vacaciones</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_bloginfo('template_directory');?>/images/long-benefit.jpg" alt="" class="img-responsive">
        <p>Ut eget pulvinar erat, eu posuere diam. Proin in ligula nec purus semper convallis. Aenean neque odio, ultrices sit amet dignissim id, vehicula sed ex. Sed id libero non justo aliquam tempus sed eget ex. Phasellus at tristique ipsum. Maecenas a finibus lacus. Quisque laoreet lorem vel nisi luctus varius. Sed quam sem, tincidunt nec enim sed, sollicitudin tincidunt lacus.</p>

        <strong>Disfrute de un beneficio de calidad</strong>

        <p>Proin gravida viverra nunc eget rutrum. Mauris eleifend elit in dignissim hendrerit. In nunc felis, aliquam vitae varius ut, ultricies a erat. Fusce nec tristique sapien, ut accumsan nibh. Aenean vitae arcu ornare, convallis lacus eget, lacinia libero. Nullam dictum pharetra viverra. Morbi vel bibendum ante. Curabitur in lorem hendrerit, gravida ligula nec, consectetur quam. Nunc elementum congue dolor sit amet pellentesque. Pellentesque sollicitudin neque semper sapien viverra porttitor.</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-default cta">Completar Formulario</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal Fin -->

<!-- Actualizaciones y Solicitudes -->
<section class="lab-updates clr-bg06">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Actualizaciones y Solicitudes</h3>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h2>Datos Personales</h2>
				<p>Curabitur quis viverra nisi. Pellentesque mauris quam, varius quis iaculis at, feugiat ut lacus. Fusce vel nibh elementum, porta neque vel, efficitur nunc. Mauris et nulla at quam tempor condimentum. </p>
				<a href="" class="cta">Ver Formulario <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h2>Emisión de Certificado</h2>
				<p>Curabitur quis viverra nisi. Pellentesque mauris quam, varius quis iaculis at, feugiat ut lacus. Fusce vel nibh elementum, porta neque vel, efficitur nunc. Mauris et nulla at quam tempor condimentum. </p>
				<a href="" class="cta">Ver Formulario <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
			</div>
		</div>
	</div>
</section>

<!-- Descansos y Permisos -->
<section class="lab-rest">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-12">
        <h2>Descansos y Permisos</h2>
        <p>Curabitur quis viverra nisi. Pellentesque mauris quam, varius quis iaculis at, feugiat ut lacus. Fusce vel nibh elementum, porta neque vel, efficitur nunc. </p>
        <p>Fusce vel nibh elementum, porta neque vel, efficitur nunc. Mauris et nulla at quam tempor condimentum. </p>
        <a href="/" class="cta">Ver Formulario <span class="fa fa-file-text-o" aria-hidden="true"></span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Sueldos y Anticipos -->
<section class="lab-salaries">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3>Sueldos y Anticipos</h3>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				<h2>Liquidaciones de Sueldo</h2>
				<p>Curabitur quis viverra nisi. Pellentesque mauris quam, varius quis iaculis at, feugiat ut lacus. Fusce vel nibh elementum, porta neque vel, efficitur nunc. Mauris et nulla at quam tempor condimentum. </p>
				<a href="" class="cta">Ver Formulario <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				<h2>Anticipos</h2>
				<p>Curabitur quis viverra nisi. Pellentesque mauris quam, varius quis iaculis at, feugiat ut lacus. Fusce vel nibh elementum, porta neque vel, efficitur nunc. Mauris et nulla at quam tempor condimentum. </p>
				<a href="#" data-toggle="modal" data-target="#modal-anticipos" class="cta">Ver Formulario <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
			</div>

        </div>
	</div>
</section>


<div class="modal" id="modal-anticipos" tabindex="-1" role="dialog" aria-labelledby="modalAnticipos">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalAnticipos">Solicitud de Anticipo</h4>
      </div>
      <div class="modal-body">
        <h3>Ingresa los datos a continuación para realizar tu solicitud de anticipo</h3>
        
        
        <div class="alert alert-success hidden" role="alert"><span class="fa fa-check-circle fa-fw"></span> Su solicitud fue recibida exitosamente, le confirmaremos vía correo la aplicación del anticipo</div>
           	
       <div class="alert alert-danger hidden" role="alert"><span class="fa fa-explanation-circle fa-fw"></span> Su pregunta no fue recibida. Intenta nuevamente</div>
       <div class="alert alert-danger problema hidden" role="alert"><span class="fa fa-explanation-circle fa-fw"></span> Debes completar todos los datos obligatorios</div>
       <div class="alert alert-danger.validacion hidden" role="alert"><span class="fa fa-explanation-circle fa-fw"></span> Hubo un error de validación en los datos, verifica que no existan simbolos extraños en los campos</div>
        
        <form id="enviaSolicitud">
        	
        	<div class="form-group">
        		<label for="rut">Ingrese su Nombre</label>
        		<input type="text" name="nombre" class="form-control" id="nombre">
        	</div>
        	
        	<div class="form-group">
        		<label for="rut">Ingrese su rut</label>
        		<input type="text" name="rut" class="form-control" id="rut">
        	</div>
        	
        	<div class="form-group">
        		<label for="rut">Ingrese monto a solicitar</label>
        		<input type="text" name="monto" class="form-control" id="monto">
        	</div>
        	
        	<div class="form-group">
        		<label for="rut">Ingrese Email</label>
        		<input type="email" name="email" class="form-control" id="email">
        	</div>
        	
        	<div class="form-group">
        		<input type="submit" value="Enviar" class="btn btn-success">
        	</div>
        	
        </form>
        
        
      </div>
      
    </div>
  </div>
</div>


<script>

$("#enviaSolicitud").submit(function(event) {
	event.preventDefault();
	enviaSolicitud();
});


function enviaSolicitud() {
	
	nombre	= $('#nombre').val();
	rut		= $('#rut').val();
	monto	= $('#monto').val();
	email	= $('#email').val();
	
	console.log('comienza el envío'+nombre+rut+monto+email);
	
	$.ajax({
		type: 'GET',
		url:"<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType:"html",
		data:({ action : 'enviaSolicitud' , nombre : nombre , rut : rut , monto : monto , email : email }),
		success: function(data){
			
			
			console.log('ya se envió y mandó respuesta');

			if(data == 4){
				$('form').trigger('reset');
				console.log('pregunta recibida correctamente')	;
				$('.alert-success').removeClass('hidden')

			}else if(data == 3){
				console.log('snap! no se pudo enviar tu pregunta')	;
				$('.alert-danger.problema').removeClass('hidden')
			}else if(data == 5){
				$('.alert-danger.validacion').removeClass('hidden')
			}else{
				console.log(data)
			}
		}, 
		error : function(data){
			console.log('snap! no se pudo enviar tu pregunta')
			return false;
		}	
	});
	
	
}
	
	
</script>


<!-- Beneficios Sociales -->
<section class="social-benefit ">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
          <h3>Beneficios Sociales</h3>

			     <!-- Nav tabs -->
    			<ul class="nav nav-tabs" role="tablist">
    			    <li role="presentation" class="col-md-6 col-sm-6 col-xs-6 col-esp active"><a href="#mutual" aria-controls="mutual" role="tab" data-toggle="tab">Mutual</a></li>
    			    <li role="presentation" class="col-md-6 col-sm-6 col-xs-6 col-esp"><a href="#ccaf" aria-controls="ccaf" role="tab" data-toggle="tab">CCAF</a></li>
    			</ul>

    			  <!-- Tab panes -->
    			<div class="tab-content">

    			    <div role="tabpanel" class="tab-pane active row" id="mutual">
                        <div class="col-md-6 require">
                            <span class="hit-number">1</span>
                            <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
                        </div>
                        <div class="col-md-6 require">
                            <span class="hit-number">2</span>
                            <p>Nulla mattis nisi ac risus vestibulum, lobortis tincidunt magna semper. Morbi augue eros, viverra a finibus sagittis, viverra sit amet leo. Nunc ut lorem eu magna imperdiet sagittis.</p>
                        </div>
                        <div class="col-md-6 require">
                            <span class="hit-number">3</span>
                            <p>Ut porttitor, dui quis aliquam placerat, lacus diam viverra odio, et rutrum odio elit id lectus. Vivamus volutpat id dui a dictum. Ut maximus non enim ac luctus. </p>
                        </div>
                        <div class="col-md-6 require">
                            <span class="hit-number">4</span>
                            <p>Dignissim nibh a, dictum nulla. Nulla leo arcu, lacinia tempor odio ut, tempus rhoncus tortor. Aenean ut ligula imperdiet.</p>
                        </div> 
              </div>

    			    <div role="tabpanel" class="tab-pane row" id="ccaf">
                        <div class="col-md-6 require">
                            <span class="hit-number">1</span>
                            <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
                        </div>
                        <div class="col-md-6 require">
                            <span class="hit-number">2</span>
                            <p>Nulla mattis nisi ac risus vestibulum, lobortis tincidunt magna semper. Morbi augue eros, viverra a finibus sagittis, viverra sit amet leo. Nunc ut lorem eu magna imperdiet sagittis.</p>
                        </div>
                        <div class="col-md-6 require">
                            <span class="hit-number">3</span>
                            <p>Ut porttitor, dui quis aliquam placerat, lacus diam viverra odio, et rutrum odio elit id lectus. Vivamus volutpat id dui a dictum. Ut maximus non enim ac luctus. </p>
                        </div>
              </div>

    			</div>
			</div>

		</div>
	</div>
</section>

<!-- Politica y Reglamento -->
<section class="politics">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Política y Reglamento</h3>
            </div>

            <div class="col-md-12">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs col-md-6 col-xs-12" role="tablist">
                <li role="presentation" class="col-md-6 col-xs-6 col-esp active">
                    
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/20.jpg" alt="" class="img-responsive">
                    
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Política y Seguridad Ocupacional</a>
                    
                    
                </li>
                <li role="presentation" class="col-md-6 col-xs-6 col-esp">
                    
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/21.jpg" alt="" class="img-responsive">
                      
                          <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Políticas de Capacitación</a>
                      
                    
                </li>
                <li role="presentation" class="col-md-6 col-xs-6 col-esp">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/22.jpg" alt="" class="img-responsive">
                    
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reglamento Interno</a>
                    
                </li>
                <li role="presentation" class="col-md-6 col-xs-6 col-esp">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/23.jpg" alt="" class="img-responsive">
                    
                        <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Manual y Normas Específicas</a>
                    
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content col-md-6 col-sm-6 col-xs-12">
                <div role="tabpanel" class="tab-pane active col-md-12 col-sm-6 col-xs-12" id="home">
                    <h3>Política y Seguridad Ocupacional</h3>
                    <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
                    <p>Ut porttitor, dui quis aliquam placerat, lacus diam viverra odio, et rutrum odio elit id lectus. Vivamus volutpat id dui a dictum. Ut maximus non enim ac luctus. </p>
                    <a href="">Descargar Manual de Política y Seguridad Ocupacional - <span class="fa fa-file-pdf-o" aria-hidden="true"></span> PDF</a>
                </div>
                <div role="tabpanel" class="tab-pane col-md-12 col-sm-6 col-xs-12" id="profile">
                    <h3>Políticas de Capacitación</h3>
                    <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
                    <p>Ut porttitor, dui quis aliquam placerat, lacus diam viverra odio, et rutrum odio elit id lectus. Vivamus volutpat id dui a dictum. Ut maximus non enim ac luctus. </p>
                    <a href="">Descargar Políticas de Capacitación - <span class="fa fa-file-pdf-o" aria-hidden="true"></span> PDF</a>
                </div>
                <div role="tabpanel" class="tab-pane col-md-12 col-sm-6 col-xs-12" id="messages">
                    <h3>Reglamento Interno</h3>
                    <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
                    <p>Ut porttitor, dui quis aliquam placerat, lacus diam viverra odio, et rutrum odio elit id lectus. Vivamus volutpat id dui a dictum. Ut maximus non enim ac luctus. </p>
                    <a href="">Descargar Reglamento Interno - <span class="fa fa-file-pdf-o" aria-hidden="true"></span> PDF</a>
                </div>
                <div role="tabpanel" class="tab-pane col-md-12 col-sm-6 col-xs-12" id="settings">
                    <h3>Manual y Normas Específicas</h3>
                    <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
                    <p>Ut porttitor, dui quis aliquam placerat, lacus diam viverra odio, et rutrum odio elit id lectus. Vivamus volutpat id dui a dictum. Ut maximus non enim ac luctus. </p>
                    <a href="">Descargar Manual y Normas Específicas - <span class="fa fa-file-pdf-o" aria-hidden="true"></span> PDF</a>
                </div>
              </div>

            </div>

        </div>
    </div>
</section>


<!-- Instituciones Internas -->

<section class="institution clr-bg06">
    <div class="container">
        <div class="row">

            <div class="col-md-12 intro">
                <h3>Instituciones Internas</h3>
                <p>Praesent non augue eget mauris posuere consectetur nec et lorem. Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, eu tempus ligula. Duis laoreet id diam non molestie. Aliquam quis congue nulla.</p>
            </div>
                
            <div class="col-md-12">
                <figure class="col-md-6 col-sm 6 col-xs-12 col-esp">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/18.jpg" alt="" class="img-responsive">
                    <figcaption>
                        <h2>Comite Paritario de Higiene y Seguridad</h2>
                        <p>Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, praesent non augue eget mauris posuere consectetur nec et lorem.</p>
                        <a href="/">Mas información <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                    </figcaption>
                </figure>
                <figure class="col-md-6 col-sm 6 col-xs-12 col-esp">
                    <img src="<?php echo get_bloginfo('template_directory');?>/images/19.jpg" alt="" class="img-responsive">
                    <figcaption>
                        <h2>Sindicato de Trabajadores</h2>
                        <p>Fusce non porttitor sapien, et lobortis diam. Ut vel vehicula enim, praesent non augue eget mauris posuere consectetur nec et lorem.</p>
                        <a href="/">Mas información <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>
</section>



<?php get_footer('inside'); ?>