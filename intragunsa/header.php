<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico?ver=3.8.1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Exo+2:100,300,300i,400,400i,500,600,700,800,900" rel="stylesheet">

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>

jQuery(window).load(function() {
  //jQuery("#loader-wrapper").fadeOut("slow"); 
});

jQuery(document).ready(function(){                        
       
  //Navigation Menu Slider
  $('#nav-expander').on('click',function(e){
    e.preventDefault();
    $('body').toggleClass('nav-expanded');
  });
  $('#nav-close').on('click',function(e){
    e.preventDefault();
    $('body').removeClass('nav-expanded');
  });
        
  $(".main-menu").navgoco({
      caret: '<span class="caret"></span>',
      accordion: false,
      openClass: 'open',
      save: true,
      cookie: {
          name: 'navgoco',
          expires: false,
          path: '/'
      },
      slide: {
          duration: 300,
          easing: 'swing'
      }
  });
  
          
});

jQuery(document).ready(function(){                        
       
  //Navigation Menu Slider
  $('#footer-expander').on('click',function(e){
    e.preventDefault();
    $('body').toggleClass('push-footer');
  });
  $('#footer-close').on('click',function(e){
    e.preventDefault();
    $('body').removeClass('push-footer');
  });
        
  $(".main-menu").navgoco({
      caret: '<span class="caret"></span>',
      accordion: false,
      openClass: 'open',
      save: true,
      cookie: {
          name: 'navgoco',
          expires: false,
          path: '/'
      },
      slide: {
          duration: 300,
          easing: 'swing'
      }
  });
  
          
});
</script>

</head>

<body <?php body_class('bmh--state-navigation')?>>

<div id="fb-root"></div>

<div class="bmh-navigation-mask"></div>

<?php /* <div id="loader-wrapper">
   <i class="fa fa-circle-o-notch fa-spin"></i>
</div> */?>


<nav class="navbar navbar-fixed-top insider-nav" role="navigation">
    <div class="container">
        <div class="row">

          <div class="navbar col-md-12 col-sm-12">

              <div class="navbar-header">
                <a class="navbar-brand" href="<?php bloginfo('url')?>" title="AGUNSA - Intranet" rel="nofollow">
                  <img src="<?php echo get_bloginfo('template_directory')?>/images/logo_red.png" alt="Logo AGUNSA Intranet" />
                </a>

                <div class="searchh mobile tablet">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-search"></span></button>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              </div>

              <div class="navbar-collapse collapse">
                  <!-- Búsqueda -->
                  <div class="searchh">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-search"></span></button>
                  </div>

                 <!-- Fin Búsqueda -->

                  <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav navbar-right' , 'theme_location' => 'primary' ) ); ?>
                  
            </div><!--/.nav-collapse -->


          </div>  
            
        </div>
    </div>
</nav>

<!-- Push navigation -->
<div class="pull-right">
  <a id="nav-expander" class="nav-expander fixed">
    <span class="fa fa-times" aria-hidden="true"></span>
    <span class="fa fa-bars" aria-hidden="true"></span>
  </a>
</div>
<!-- Fin Push Navigation -->

<nav class="push-nav">
  <?php /* ?>
    <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'list-unstyled main-menu' , 'theme_location' => 'primary' ) ); ?>
  <?php */?>

  <ul id="menu-menu-principal-1" class="list-unstyled main-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18 induccion"><a href="/">Inducción</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17 liquidaciones"><a href="/">Liquidaciones de Sueldo</a></li>
    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-35 directorio"><a href="/">Directorio</a></li>
  </ul>

</nav>

<div class="modal fade bs-example-modal-lg" tabindex="-1" id="bigSearch" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content"> 

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          x
        </button>
      </div>
      
      <div class="modal-body">
        <form method="get" id="searchform" action="<?php bloginfo('url')?>">
          <label class="hidden" for="s"></label>
          <a class="icon-search" onclick="document.getElementById('searchform').submit();"><span class="fa fa-search"></span></a>
          <input type="text" placeholder="¿Qué Buscas?" value="" name="s" id="s">
          <button><a href="">Personas</a></button>
          <button><a href="">Contenidos</a></button>
        </form>
      </div>

    </div>
  </div>
</div>