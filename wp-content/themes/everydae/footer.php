<?php 
	$FooterBackgroundColor = get_field('footer_background_color', 'option');
	$footerFontColor = get_field('footer_font_color', 'option');
	$footerLogo = get_field('footer_logo', 'option');
	$footerAddress = get_field('address','option');
	$footerLinks = get_field('link','option');
	$footerSociaMedia = get_field('social_media_links','option');
?>

<style>
	.footer .footer-logo {
		height:25px;
		margin-bottom:20px;
	}
</style>
	<section class="footer">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-md-4">
					<img class="footer-logo" src="<?php echo $footerLogo; ?>" alt="">
					<!-- <p>Mailing Address</p>
					<p>XXXX</p>
					<p>XXXXXX</p>
					<p>XXXXXX</p> -->
					<?php echo $footerAddress; ?>
				</div>
				<div class="col-md-4">
				<ul>
					

							<?php

							// Check rows exists.
							if( have_rows('link','option') ):

								// Loop through rows.
								while( have_rows('link','option') ) : the_row();

									// Load sub field value.

									$linkText = get_sub_field('link_text');
									$linkUrl = get_sub_field('link_url');
								?>
								<li>
									<a href="<?php echo $linkUrl; ?>" target="_blank"><?php echo $linkText; ?></a>
								</li>
							
								<?php endwhile;

							// No value.
							else :
								// Do something...
							endif; 
							?>
				
					</ul>
				</div>
				<div class="col-md-4">
					<p>Follow us on social media</p>
					<ul class="social-media">
						<?php 
						if( have_rows('social_media_links','option') ):
						
							// Loop through rows.
							while( have_rows('social_media_links','option')  ) : the_row(); 
							$icon = get_sub_field('icon');
							$link = get_sub_field('link');
							?>
				
								<li><a href="<?php echo $link ?> " target="_blank"> <img src="<?php  echo $icon ?>"></a> </li>
							<?php endwhile;

						// No value.
						else :
							// Do something...
						endif;
						?>
				
					</ul>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>
