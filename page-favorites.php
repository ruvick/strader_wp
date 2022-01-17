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
					$args = array(
						'posts_per_page' => 5,
						'post_type' => 'ultra',
						'tax_query' => array(
							array(
								'taxonomy' => 'ultracat',
								'field' => 'id',
								'terms' => array(3)
							)
						)
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