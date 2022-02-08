<?php 

/*
Template Name: Страница Отзывы наших клиентов
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

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

    <section id="reviews" class="reviews-page reviews">
	    <div class="_container">

		<div class="reviews__row d-flex">
		<? $reviews = carbon_get_theme_option('complex_reviews');
				if ($reviews) {
					$reviewsIndex = 0;
					foreach ($reviews as $item) {
						?>
							<div class="reviews__card d-flex">
								<div class="reviews__image-wrap">
									<div class="reviews__image">
										<img src="<?php echo wp_get_attachment_image_src($item['img_reviews'], 'large')[0]; ?>" alt="">
									</div>
								</div>
								<h4><? echo $item['name_reviews']; ?></h4>
								<p class="reviews__date"><? echo $item['data_reviews']; ?></p>
								<span class="reviews__like"></span>
								<p class="reviews__descp"><? echo $item['descp_reviews']; ?></p>
								<a href="<? echo $item['link_reviews']; ?>" class="reviews__btn">Читать в источнике</a>
							</div>
						<?
						$reviewsIndex++; 
					}
				}
				?>
		</div>

	</div>
</section>

</main>

<?php get_footer(); 
