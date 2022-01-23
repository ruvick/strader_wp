<?php 

/*
Template Name: Страница Избранное
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="header-sec">
  		<div class="_container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
					}
				?> 
    		<h1 class="header-sec__title"><?php the_title();?></h1>
  		</div>
		</section>

		<section class="content"> 
			<div class="_container">
      <div class="populars__card">
			<?
			// var_dump(json_decode(str_replace("\\", "", $_COOKIE['wish'])));
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'ultra',
						'post__in' => json_decode(str_replace("\\", "", $_COOKIE['wish']))
					);
					$query = new WP_Query($args);

					foreach( $query->posts as $post ){
						$query->the_post();
						get_template_part('template-parts/product-page');
					}  
					wp_reset_postdata(); 
			?>
		</div>
			</div>
		</section>
	</main>

<?php get_footer();