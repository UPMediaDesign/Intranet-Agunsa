<?php get_header('insidernews')?>


<div class="heading-contacts">
    <div class="container">
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


<div class="container">
	<div class="row">
		
		
		
		<?php if(is_user_logged_in()){
		
		$solicitudes = get_posts(array('post_type' => 'anticipos' , 'numberposts' => -1 , 'date_query'    => array(
																								'column'  => 'post_date',
																								'after'   => '- 30 days'
																							)
		))
		
		?>
		<div class="clear separator"></div>
		<h1>Muestra las solicitudes de los últimos 30 días</h1>
		<div class="clear separator"></div>	
		<table class="table table-stripped">
			
			<tr>
				
				<th>Nº</th>
				<th>Fecha</th>
				<th>Nombre</th>
				<th>Rut</th>
				<th>Email</th>
				<th>Monto</th>
				
			</tr>
			<?php $solicount = 0?>
			<?php foreach($solicitudes as $solicitud):?>
			<?php $solicount++ ?>	
			
			<tr>
				<td><?php echo $solicount ?></td>
				<td><?php echo get_the_date( 'd-m-Y', $solicitud->ID )?></td>
				<td><?php echo get_post_meta( $solicitud->ID , 'nombre' , true) ?></td>
				<td><?php echo get_post_meta( $solicitud->ID , 'rut' , true) ?></td>
				<td><?php echo get_post_meta( $solicitud->ID , 'email' , true) ?></td>
				<td><?php echo get_post_meta( $solicitud->ID , 'monto' , true) ?></td>
			</tr>	
				
			<?php endforeach?>
			
		</table>
			
			
	
		<?php }else{ 
		
		$args = array(
			'echo'           => true,
			'remember'       => false,
			'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
			'form_id'        => 'loginform',
			'id_username'    => 'user_login',
			'id_password'    => 'user_pass',
			//'id_remember'    => 'rememberme',
			'id_submit'      => 'wp-submit',
			'label_username' => __( 'Usuario' ),
			'label_password' => __( 'Contraseña' ),
			//'label_remember' => __( 'Remember Me' ),
			'label_log_in'   => __( 'Ingresar' ),
			'value_username' => '',
			'value_remember' => false
		);
		
		echo '<div class="clear separator"></div><h1 style="text-align:center">Acceda para descargar el listado de solicitudes</h1>';
		echo '<div class="col-md-4 col-md-offset-4">';
		wp_login_form( $args );
		echo '</div><div class="clear separator"></div>';
		
		}?>
	</div>
</div>


<style>

	#loginform label{ display: block; clear: both}
	#loginform input[type="text"] , #loginform input[type="password"]{ width: 100%; padding: 10px; font-size: 20px}
	
	#wp-submit {
		font-size: 30px;
		float: right;
		border: 1px solid #f2f2f2;
		padding: 10px 30px;
	}
	
</style>

<?php get_footer('inside')?>