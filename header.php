<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal Website Wordpress theme">   

    
	<?php 
		wp_head();
	?>

</head> 

<body>
    
    <header class="header">	    
	    <a class="site-title pt-lg-4 mb-0" href="index.html">
			<?php echo get_bloginfo( 'name' ); ?>
		</a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navigation" class="collapse navbar-collapse" >
				
				<?php 
					if(function_exists('the_custom_logo')){
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}		
				?>	
				<img class="d-inline-block align-top rounded-img" width="50" height="50" src="<?php echo $logo[0] ?>" alt="logo" >			
				<?php 
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="nav justify-content-end">%3$s</ul>'
						)
					);
				?>
				<hr>
			</div>
		</nav>
	</header>
	<div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>