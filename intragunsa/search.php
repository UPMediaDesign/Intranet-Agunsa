<?php get_header('insider'); ?>

<div class="heading-page" style="background-image:url(<?php echo get_bloginfo('template_directory')?>/images/search_result_.jpg)">
    <div class="container gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-6 col-sm-6 col-xs-12">
                    <h2>Usted buscó: <?php echo $_GET['s'] ?></h2>
                    <p>Resultados de búsqueda</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="clear separator"></div>

<section id="documentos">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
            <div class="row">
            	
                <div class="col-md-12">
                	<div class="form-group">
                    
                    </div>
                    <form method="get" id="searchform" class="inside-form" action="<?php bloginfo('url')?>">
                        <div class="form-group">
                        	<div class="input-group">
                          		<div class="input-group-addon"><span class="fa fa-search"></span></div>
                          		<input type="text" class="form-control input-lg" placeholder="Buscar..." value="" name="s" id="s">
                        	</div>
                        	
                       </div>
                    </form>
                    <div class="clear miniseparator"></div>
                </div>
                                
            </div>
            <div class="clear separator border"></div>
            	
                <?php if($posts){?>

                    <?php foreach($posts as $doc):?>

                        <?php if($doc->post_type == 'publicaciones'){?>

                        <?php $pub = get_field('embed_publicacion', $doc->ID);?>
                        <article class="search-result">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><a href="<?php echo $pub?>"><?php echo $doc->post_title?></a></h4>
                                    <p><?php echo substr($doc->post_excerpt , 0 , 200 )?></p>
                                </div>
                                <div class="col-md-3"><a href="<?php echo $pub?>" class="morelink"><span class="fa fa-circle"></span> Ver Publicación</a></div>
                            </div>
                            <div class="clear border separator"></div>
                        </article>
                        
                        <?php }else{?>
                         <article class="search-result">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><a href="<?php echo get_permalink($doc->ID)?>"><?php echo $doc->post_title?></a></h4>
                                    <p><?php echo substr($doc->post_excerpt , 0 , 200 )?></p>
                                </div>
                                <div class="col-md-3"><a href="<?php echo get_permalink($doc->ID)?>" class="morelink"><span class="fa fa-circle"></span> Leer más</a></div>
                            </div>
                            <div class="clear border separator"></div>
                        </article> 

                        <?php }?>

                    <?php endforeach;?>

                <?php } else{
                    echo '<h4 class="not-find">Lo sentimos, no se han encontrado resultados</h4>';
                }?>
                	              	     
            
            </div>
		</div>
	</div>
</section>

<div class="clear separator"></div>

<?php get_footer('inside');?>