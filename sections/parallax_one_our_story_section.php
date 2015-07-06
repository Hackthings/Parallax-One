<!-- =========================
 SECTION: BRIEF LEFT
============================== -->
<?php
	$paralax_one_our_story_image = get_theme_mod('paralax_one_our_story_image', get_stylesheet_directory_uri().'/images/about-us.png');
	$parallax_one_our_story_title = get_theme_mod('parallax_one_our_story_title','Our Story');
	$parallax_one_our_story_content = get_theme_mod('parallax_one_our_story_content','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
	if(!empty($paralax_one_our_story_image) || !empty($parallax_one_our_story_title) || !empty($parallax_one_our_story_content)){
?>
		<section class="brief text-left brief-design-one brief-left" id="story">
			<div class="section-overlay-layer">
				<div class="container">
					<div class="row">
						<!-- BRIEF IMAGE -->
						<?php
							if( !empty($paralax_one_our_story_image) ){
								echo '<div class="col-md-6 brief-content-two"><div class="brief-image-right"><img src="'.esc_url($paralax_one_our_story_image).'" alt=""></div></div>';
							} elseif ( isset( $wp_customize )   ) {
								echo '<div class="col-md-6 brief-content-two paralax_one_only_customizer"><img src="" alt=""><div class="brief-image-right"></div></div>';
							}
						?>

						<!-- BRIEF HEADING -->
						<div class="col-md-6 content-section brief-content-one">
							<?php
								if( !empty($parallax_one_our_story_title) ){
									echo '<h2 class="text-left dark-text">'.esc_attr($parallax_one_our_story_title).'</h2><div class="colored-line-left"></div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="text-left dark-text paralax_one_only_customizer"></h2><div class="colored-line-left paralax_one_only_customizer"></div>';
								}
							?>

							<?php

								if( !empty($parallax_one_our_story_content) ){
									echo '<p class="text-left">'.esc_attr($parallax_one_our_story_content).'</p>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<p class=" text-left paralax_one_only_customizer"></p>';
								}
							?>
						</div><!-- .brief-content-one-->
					</div>
				</div>
			</div>
		</section><!-- .brief-design-one -->
<?php
	}
?>