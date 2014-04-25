<?php get_header() ?>

<div class="container-wrapper clearfix" id="main-content-container">
<img class="portfolio-images" src="wp-content/themes/infinite-child/images/saturn1.jpg"></img>

<div class="container" id="name-and-contact">
	<div class="photographer-name"> <h1> Max Aperture </h1></div>
	<div class="photographer-contact"> 
		<ul id ="contact-information">
			<li>123 Divison Street</li>
			<li>Portland, Oregon 97203</li>
			<li>503.555.1234</li>
			<li>max@maxaperture.com</li>
		</ul>
	</div>
</div>

<img class="portfolio-images" src="wp-content/themes/infinite-child/images/jupiter1.jpg"></img>
<img class="portfolio-images" src="wp-content/themes/infinite-child/images/saturn2.jpg"></img>
	<div class="container">
		<div class="row">
			<div class="span9 clearfix" style="<?php if(of_get_option('sidebar_position') == 'left') echo 'float:right;'?>">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<article <?php post_class('post-normal'); ?> id="post-<?php the_ID(); ?>">

						<?php if(has_post_thumbnail()) : ?>

							<div class="post-image blog-normal">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-normal'); ?></a>					
							</div>
						
						<?php endif; ?>

						<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						
							<div class="post-meta">
								<span class="post-date">
									<i class="icon-calendar"></i>
									<?php the_time(get_option('date_format')) ?>
								</span>

										<span class="seperator">/</span>
										<i class="icon-comments"></i>
								<?php
									comments_popup_link(
										__('No Comments', 'infinite-framework'), 
										__('1 Comment', 'infinite-framework'), 
										__('% Comments', 'infinite-framework'));
								?>

								<?php if( get_the_title() == '' ) : ?>
				                	<span class="seperator">/</span> <a href="<?php the_permalink(); ?>" title="<?php _e( 'Permalink', 'infinite-framework' ); ?>"><?php _e( 'Permalink', 'infinite-framework' ); ?></a>
				                <?php endif; ?>

							</div>


							<div class="post-content">
								<?php the_excerpt() ?>
							</div>

					</article>
				

				<?php endwhile; else : ?>
					<h1><?php _e('No posts were found!', 'infinite-framework') ?></h1>
				<?php endif; ?>

				<?php infinite_pagination($wp_query->max_num_pages); ?>


			</div> <!--end left column -->

				<?php get_sidebar(); ?>

		</div>
	</div>

	<img class="portfolio-images" src="wp-content/themes/infinite-child/images/saturn3.jpg"></img>
	<img class="portfolio-images" src="wp-content/themes/infinite-child/images/jupiter2.jpg"></img>

	<section>
		<div class="container">
			<h3>About</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>


	<img class="portfolio-images" src="wp-content/themes/infinite-child/images/saturn4.jpg"></img>
</div> <!-- end container-wrapper -->


<?php get_footer() ?>