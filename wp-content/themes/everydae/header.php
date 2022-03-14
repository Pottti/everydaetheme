<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'> </script>
	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
	$backgroundColor = get_field('header_background_color', 'option');
	$fontColor = get_field('header_font_color', 'option');
	$headerLogo = get_field('header_logo', 'option');

?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'everydae' ); ?></a>

<div id="wrapper" class="container-fluid p-0">
	<!-- <header>
		<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); 

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'everydae' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
					
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav me-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ( '1' === $search_enabled ) :
					?>
							<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'everydae' ); ?>" title="<?php esc_attr_e( 'Search', 'everydae' ); ?>" />
									<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'everydae' ); ?></button>
								</div>
							</form>
					<?php
						endif;
					?>
				</div>
			</div>
		</nav>
	</header> -->
	<style>
		.menu{
			position:fixed;
			top:0;
			width:100%;
			z-index:999999;
			color:<?php echo $fontColor; ?>;
			padding:0 15px;
			background-color:<?php echo $backgroundColor; ?>;
			height:60px;
			padding:15px;
		}
		.menu--item{
			display:inline-block;
			padding-right:10px;
		}
		.menu--item a{
			color:<?php echo $fontColor; ?>;
			text-decoration: none;
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			font-weight: 500;
			font-stretch: normal;
			font-style: normal;
			line-height: 1.25;
			letter-spacing: normal;
		}
	</style>
	<div class="menu">
		<div class="row">
			<div class="col-md-4 col-2">
				<!-- <h2>YOUR LOGO</h2> -->
				<img class="main--logo" src="<?php echo $headerLogo; ?>" alt="">
			</div>
			<div class="col-md-8 col-10 text-end">
				<?php 
				$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
				// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

				$menuID = $menuLocations['main-menu']; // Get the *primary* menu ID

				$primaryNav = wp_get_nav_menu_items($menuID);
				?>
			<!-- <?php
					
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'container'      => '',
							'menu_class'     => 'navbar-nav me-auto',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
							'walker'         => new WP_Bootstrap_Navwalker(),
						)
					);
				?> -->

				<?php 
				foreach ( $primaryNav as $navItem ) {

					echo '<li class="menu--item"><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
				
				}
				?>

			</div>
		</div>
	</div>

