<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="sl-index-sec" class="sl-index-sec">
	<!-- <div class="slider__wrap"> -->
		<div class="sl-index__container _container">
			<!-- Слайдер с техническим классом _swiper -->
			<div class="sl-index _swiper d-flex">  

				<div class="sl-index-item sl-index-item_01 sl-index__slide">
					<h1 class="sl-index-item__title">
						Струнные <br>
						инструменты и <br>
						аксессуары
					</h1>
				</div>

				<div class="sl-index-item sl-index-item_02 sl-index__slide">
					<h1 class="sl-index-item__title">
						Струнные <br>
						инструменты и <br>
						аксессуары
					</h1>
				</div>

				<div class="sl-index-item sl-index-item_03 sl-index__slide">
					<h1 class="sl-index-item__title">
						Струнные <br>
						инструменты и <br>
						аксессуары
					</h1>
				</div>

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
			
			<div class="ranges__card ranges__card_01">
				<div class="ranges__card-nuar_blk nuar_blk"></div>
				<h3 class="ranges__card-title">Инструменты</h3>
			</div>

			<div class="ranges__card ranges__card_02">
				<div class="ranges__card-nuar_blk nuar_blk"></div>
				<h3 class="ranges__card-title">
					Струны для <br>
					инструментов
				</h3>
			</div>

			<div class="ranges__card ranges__card_03">
				<div class="ranges__card-nuar_blk nuar_blk"></div>
				<h3 class="ranges__card-title">Новые акции</h3>
			</div>

			<div class="ranges__card ranges__card_04">
				<div class="ranges__card-nuar_blk nuar_blk"></div>
				<h3 class="ranges__card-title">Аксессуары</h3>
			</div>

			<div class="ranges__card ranges__card_05">
				<div class="ranges__card-nuar_blk nuar_blk"></div>
				<h3 class="ranges__card-title">Электроскрипки</h3>
			</div>

		</div>
	</div>
</section>

<section id="populars" class="populars">
	<div class="_container">
		<h2 class="populars__title">Популярные товары</h2>
		<div class="populars__card">
			
			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/popular-card/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/popular-card/01.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<!-- <span class="card__sticker">15%</span> -->
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/popular-card/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/popular-card/02.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<!-- <span class="card__sticker">15%</span> -->
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/popular-card/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/popular-card/03.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<!-- <span class="card__sticker">15%</span> -->
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/popular-card/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/popular-card/04.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<!-- <span class="card__sticker">15%</span> -->
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/popular-card/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/popular-card/05.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<!-- <span class="card__sticker">15%</span> -->
				</a>
			</div>

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

<section id="applic" class="applic">
	<div class="_container">
		<div class="applic__block">
			<h2 class="applic__block-title">Остались вопросы</h2>
			<p class="applic__block-subtitle">Оставьте заявку и мы обязательно на них ответим</p>
			<form action="#" class="applic__block-form">
				<div class="form__line">
					<input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="В корзину"
					class="applic__block-form-input input">
					<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="+7 (___) ___-__-___"
					class="applic__block-form-input input _phone _req">
					<button type="submit" class="applic__block-form-btn form__btn btn">Оставить заявку</button>
				</div>
				<p class="applic__block-footnote">* Отправляя заявку, вы соглашаетесь на обработку персональных данных</p>
			</form>
		</div>
	</div>
</section>

<section id="sale" class="sale">
	<div class="_container">
		<h2 class="sale__title">Акции</h2>
		<div class="sale__card">
			
			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/stock/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/stock/01.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<span class="card__sticker">15%</span>
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/stock/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/stock/02.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<span class="card__sticker">15%</span>
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/stock/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/stock/03.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<!-- <span class="card__sticker">15%</span> -->
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/stock/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/stock/04.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<span class="card__sticker">15%</span>
				</a>
			</div>

			<div class="card-column">
				<a href="#" class="card">
					<div class="card__img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/stock/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/stock/05.jpg?_v=1641456649011" alt=""></picture>
					</div>
					<h6 class="card__title">
						Струны для скрипки 
						Thomastik Dominant 135 1/8
						(4 шт)
					</h6>
					<p class="card__price rub">3650 </p>
					<span class="card__sticker">15%</span>
				</a>
			</div>

		</div>
	</div>
</section>

</main>

<?php get_footer(); ?> 