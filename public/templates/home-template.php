<?php
/*
 * Template Name: Home Page for BCD Lab
 * Template Post Type: page
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

			$link = get_field('left-link');?>

				<div class="home-container">
					<div class="left-column">
					  <div class="name">
							<?php
								$image = get_field('left-image');
								if( !empty( $image ) ){ ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> <?php
								} ?>

								<div class="text-container">
									<?php
									if(!empty(get_field('left-heading'))){
										echo "<h2>" . get_field('left-heading') . "</h2>";
									}

									if(!empty(get_field('left-button'))){
										echo "<p><a href='". get_field('left-link') . "'> " . get_field('left-button') . "</a></p>";
									}
									?>
								</div>
						</div>
					</div>

					<div class="right-column">
					  <div class="news">
							<?php
								$image = get_field('middle-top-image');
								if( !empty( $image ) ){ ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> <?php
								} ?>

								<div class="text-container">
									<?php
										if(!empty(get_field('middle-top-heading'))){
											echo "<h2>" . get_field('middle-top-heading') . "</h2>";
										}

										if(!empty(get_field('middle-top-text'))){
											echo "<p>" . get_field('middle-top-text') . "</p>";
										}

										if(!empty(get_field('middle-top-button'))){
											echo "<p><a href='". get_field('middle-top-link') . "'> " . get_field('middle-top-button') . "</a></p>";
										}
									?>
								</div>
						</div>


					  <div class="lab">
							<?php
								$image = get_field('middle-bottom-image');
								if( !empty( $image ) ){ ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> <?php
								}?>

								<div class="text-container">
									<?php
										if(!empty(get_field('middle-bottom-heading'))){
											echo "<h2>" . get_field('middle-bottom-heading') . "</h2>";
										}

										if(!empty(get_field('middle-bottom-text'))){
											echo "<p>" . get_field('middle-bottom-text') . "</p>";
										}

										if(!empty(get_field('middle-bottom-button'))){
											echo "<p><a href='". get_field('middle-bottom-link') . "'> " . get_field('middle-bottom-button') . "</a></p>";
										}
									?>
								</div>
						</div>
					</div>

					<div class="right-column">
					  <div class="purpose">

								<div class="text-container">
									<?php
										$image = get_field('right-top-image');
										if( !empty( $image ) ){ ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> <?php
										}
									?>

									<?php
										if(!empty(get_field('right-top-heading'))){
											echo "<h2>" . get_field('right-top-heading') . "</h2>";
										}

										if(!empty(get_field('right-top-text'))){
											echo "<p>" . get_field('right-top-text') . "";
										}

										if(!empty(get_field('right-top-button'))){
											echo "<a href='". get_field('right-top-link') . "'> " . get_field('right-top-button') . "</a></p>";
										}
									?>
								</div>
						</div>


					  <div class="participate">
							<?php
								$image = get_field('right-bottom-image');
								if( !empty( $image ) ){ ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> <?php
								} ?>

								<div class="text-container">
									<?php
									if(!empty(get_field('right-bottom-heading'))){
										echo "<h2>" . get_field('right-bottom-heading') . "</h2>";
									}

									if(!empty(get_field('right-bottom-text'))){
										echo "<p>" . get_field('right-bottom-text') . "</p>";
									}

									if(!empty(get_field('right-bottom-button'))){
										echo "<p><a href='". get_field('right-bottom') . "'> " . get_field('right-bottom-button') . "</a></p>";
									}
								?>
								</div>
						</div>
					</div>
				</div>


				<?php




			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();
