<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>>">
    <link rel="pingback" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="icon" href="favicon.png" type="image/x-icon"/>

    <title>
        <?php
            wp_title('|', true, 'right');
            bloginfo('name');
        ?>
    </title>
    <?php wp_head(); ?>
	
</head>
<body>
	<div class="lh-wrapper">
		<div class="lh-header <?php if(!is_home()){echo 'module-header';}?>">
			<div class="header-position">
				<!-- end block-header -->
				<div class="block-menu">
					<div class="container">
						<div class="row">
							<div class="box-logo col-lg-2 col-4">
								<a href="" class="logo"><img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/phan-gia-huy.png" alt=""></a>
							</div>
							<div class="box-menu col-lg-10">
								<nav id="drop_down">
									<?php wp_nav_menu( 
										array( 
											'theme_location' => 'header-menu', 
											'container' => 'false', 
											'menu_id' => 'header-menu', 
											'menu_class' => 'lh2-ul'
										) 
									); ?>
								</nav>
							</div>
						</div>
						<button class="d-lg-none d-md-none" id="menu"><span></span></button>
					</div>
				</div>
				<!-- end block-menu -->	
			</div>
			<?php if(!is_home()){ ?>
				<div class="block-slider"></div>
			<?php } ?>
			
		
			