<?php
/*
Template Name: Directorio
*/
?>

<?php get_header('insidernews'); ?>

<div class="heading-contacts">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-6 col-sm-6 col-xs-12">
                    <?php $postt = get_post(46); ?>
                    <h2><?php echo $postt->post_title; ?></h2>
                    <h3><?php echo $postt->post_excerpt; ?></h3>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Search Sucursal -->
<section class="search-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-12">

               	<form method="get" id="searchform" class="inside-form" action="<?php bloginfo('url')?>">
                   	<div class="form-group">
                       	<div class="input-group col-xs-4">
                          	<input type="text" class="form-control" placeholder="Buscar">
                      	</div>
                      	<div class="input-group col-xs-4 col-xs-offset-1">
                      		<input type="text" class="form-control" placeholder="Buscar">
                      	</div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<section class="directory">
	<div class="container">
		<div class="row">

			<div class="col-md-9 col-sm-9 col-xs-9 list">
				<ul>
					<li><a href="/"><strong>A</strong></a></li>
					<li><a href="/">B</a></li>
					<li><a href="/">C</a></li>
					<li><a href="/">D</a></li>
					<li><a href="/">E</a></li>
					<li><a href="/">F</a></li>
					<li><a href="/">G</a></li>
					<li><a href="/">H</a></li>
					<li><a href="/">I</a></li>
					<li><a href="/">J</a></li>
					<li><a href="/">K</a></li>
					<li><a href="/">L</a></li>
					<li><a href="/">M</a></li>
					<li><a href="/">N</a></li>
					<li><a href="/">Ñ</a></li>
					<li><a href="/">O</a></li>
					<li><a href="/">P</a></li>
					<li><a href="/">Q</a></li>
					<li><a href="/">R</a></li>
					<li><a href="/">S</a></li>
					<li><a href="/">T</a></li>
					<li><a href="/">U</a></li>
					<li><a href="/">V</a></li>
					<li><a href="/">W</a></li>
					<li><a href="/">X</a></li>
					<li><a href="/">Y</a></li>
					<li><a href="/">Z</a></li>
					<li><a href="/">1</a></li>
					<li><a href="/">2</a></li>
					<li><a href="/">3</a></li>
					<li><a href="/">4</a></li>
					<li><a href="/">5</a></li>
					<li><a href="/">6</a></li>
					<li><a href="/">7</a></li>
					<li><a href="/">8</a></li>
					<li><a href="/">9</a></li>
					<li><a href="/">0</a></li>
				</ul>
			</div>

			<ul class="col-md-9 col-sm-12 col-xs-12 contacts">
				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

				<li>
					<div class="col-md-5 col-sm-5 col-xs-5">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/user_1.jpg" alt="">
						<div class="data">
							<h2><a href="">Arizmendi Henríquez Rafael Lucas</a></h2>
							<span>Logística y Recursos de Desembarco</span>
						</div>
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3 city">
						<a href="">Antofagasta</a>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4 address">
						<a class="mail" href="mailto:">rafael.arizmendi@agunsa.cl</a>
						<a class="phone" href="tel:(569) 9 5603 9967">(569) 9 5603 9967</a>
					</div>
				</li>

			</ul>

		</div>
	</div>
</section>


<?php get_footer('inside'); ?>