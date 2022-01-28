<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="sl-index-sec" class="sl-index-sec">
	<!-- <div class="slider__wrap"> -->
		<div class="sl-index__container _container">
			<!-- Слайдер с техническим классом _swiper -->
			<div class="sl-index _swiper d-flex"> 
			<?
			$pict = carbon_get_theme_option('slider_index');
			if ($pict) {
				$pictIndex = 0;
				foreach ($pict as $item) {
					?>
					<div class="sl-index-item sl-index-item_01 sl-index__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
						<? if (!empty($item['slider_title'])) { ?>
							<h1 class="sl-index-item__title"><? echo $item['slider_title']; ?></h1>
						<? } ?>
					</div>
					<?
					$pictIndex++;
				}
			}
			?> 
			</div>
			<!-- Кнопки-стрлеки -->
			<div class="swiper-button swiper-button-next sl-index-button-next"></div>
			<div class="swiper-button swiper-button-prev sl-index-button-prev"></div>
			<!-- Кнопки-точки -->
			<div class="slider-quality__pagging"></div>
		</div>
	<!-- </div> -->
</section>

<section id="ranges" class="ranges">
	<div class="_container">
		<div class="ranges__wrap">
			<?php $stock = carbon_get_theme_option('complex_sections');
			if (!empty($stock)) : ?>
				<?php foreach ($stock as $item) : ?>
					<?php 
					if (!empty($item['checkbox_stock'])) {
						echo'<a href="' . $item['link_sections'] . '" class="ranges__card ranges__card_04" style="background-image: url(' . wp_get_attachment_image_src($item["img_sections"], "full")[0] . ');">
									<div class="ranges__card-nuar_blk nuar_blk"></div>
									<h3 class="ranges__card-title">' . $item['text_sections'] . '</h3>
								</a>';
					} elseif  (!empty($item['checkbox_stock_title'])) {
						echo'<a href="' . $item['link_sections'] . '" class="ranges__card ranges__card_05" style="background-image: url(' . wp_get_attachment_image_src($item["img_sections"], "full")[0] . ');">
									<div class="ranges__card-nuar_blk nuar_blk"></div>
									<h3 class="ranges__card-title">' . $item['text_sections'] . '</h3>
								</a>';
					} else {
						echo '<a href="' . $item['link_sections'] . '" class="ranges__card" style="background-image: url(' . wp_get_attachment_image_src($item["img_sections"], "full")[0] . ');">
										<div class="ranges__card-nuar_blk nuar_blk"></div>
										<h3 class="ranges__card-title">' . $item['text_sections'] . '</h3>
									</a>';
					}
					?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<section id="populars" class="populars">
	<div class="_container">
		<h2 class="populars__title">Популярные товары</h2>
		<div class="populars__card">
			<?
					$args = array(
						'posts_per_page' => 5,
						'post_type' => 'ultra',
						'orderby' => 'rand',
						'tax_query' => array(
								array(
										'taxonomy' => 'ultracat',
										'field'    => 'slug',
										'terms'    => 'aksessuary'
								),
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

<section id="reviews" class="reviews">
	<div class="_container">
		<h2>Отзывы наших клиентов</h2> 

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

<?php get_template_part('template-parts/applic-form');?>

<section id="sale" class="sale">
	<div class="_container">
		<h2 class="sale__title">Акции</h2>
		<div class="sale__card">
			<?
					$args = array(
						'posts_per_page' => 5,
						'post_type' => 'ultra',
						'tax_query' => array(
							array(
								'taxonomy' => 'ultracat',
								'field' => 'id',
								'terms' => array(4)
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

<?php get_footer(); ?> 