<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
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
    		<h1 class="header-sec__title"><?the_title();?></h1>
  		</div>
		</section>

<section class="product-sec">
  <div class="_container">

    <div class="product-sec__wrap d-flex">
      
      <div class="product-sec__img">
        <button class="product-sec__img-cursor"></button>
        <picture><source srcset="<?php echo get_template_directory_uri();?>/img/product-sl/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product-sl/01.jpg?_v=1641456649011" alt=""></picture>
      </div>

      <div class="product-sec__info">
        <div class="product-sec__info-header">
          <p class="product-sec__info-header-vendor">Артикул: 1225458</p>
          <p class="product-sec__info-header-manufacturer">Производитель: <span>Thomastik</span></p>
        </div>
        <div class="product-sec__info-center">
          <p class="product-sec__info-center-price rub">3650</p>
          <div class="product-sec__info-center-flex">
            <p class="product-sec__info-center-flex-availability">Есть в наличии</p>
            <p class="product-sec__info-center-flex-delivery">Доставка и оплата</p>
          </div>
        </div>
        <div class="product-sec__info-bottom d-flex">

          <form action="#" class="product-sec__info-form">
            <div class="form__line">
              <div class="product-sec__info-form-quantity quantity">
                <div class="product-sec__info-form-quantity-button quantity__button quantity__button_minus"></div>
                <div class="quantity__input">
                  <input autocomplete="off" type="number" name="form[]" value="1">
                </div>
                <div class="quantity__button quantity__button_plus"></div>
              </div>
            </div>
          </form>

          <button class="product-sec__info-btn-bascet button">В корзину</button>
          <button class="product-sec__info-btn-pay-click button">Купить в 1 клик</button>

        </div>
      </div>

    </div>

    <div class="product-sec__descp">
      <h5 class="product-sec__descp-title">Описание</h5>
      <div class="product-sec__descp-table">
        <h6 class="product-sec__descp-table-title">Характеристики:</h6>
        <div class="product-sec__descp-table-flex">
          <ul class="product-sec__descp-table-list">
            <li class="product-sec__descp-table-list-item">Струна Е/Ми: сталь, диаметр 0.28 мм, натяжение 7,3 кг.</li>
            <li class="product-sec__descp-table-list-item">Струна А/Ля: алюминиевый сплав, диаметр 0.59 мм, натяжение 6,3 кг.</li>
            <li class="product-sec__descp-table-list-item">Струна D/Ре: алюминиевый сплав, диаметр 0.71 мм, натяжение 5,3 кг.</li>
            <li class="product-sec__descp-table-list-item">Струна G/Соль: нейзильбер, диаметр 0.74 мм., натяжение 4,9 кг.</li>
          </ul>
          <ul class="product-sec__descp-table-list product-sec__descp-table-list_right">
            <li class="product-sec__descp-table-list-item product-sec__descp-table-list-item_bold">Размер <p>1/2</p></li>
            <li class="product-sec__descp-table-list-item product-sec__descp-table-list-item_bold">Страна (фирма) <p>Австрия</p></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="similar-prod" class="similar-prod">
  <div class="_container">
    <h2 class="similar-prod__title">Похожие товары</h2>
    <div class="similar-prod__card sale__card">
      
      <div class="card-column">
        <a href="#" class="card card-pr">
          <div class="card__img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg?_v=1641456649011" alt=""></picture>
          </div>
          <h6 class="card__title card-pr__title">
            Струны для скрипки 
            Thomastik Dominant 135 1/8
            (4 шт)
          </h6>
          <span class="card-pr__availability">В наличии, более 3 шт.</span>
          <p class="card__price rub">3650 </p>
          <!-- <span class="card__sticker">15%</span> -->
        </a>
      </div>

      <div class="card-column">
        <a href="#" class="card card-pr">
          <div class="card__img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg?_v=1641456649011" alt=""></picture>
          </div>
          <h6 class="card__title card-pr__title">
            Струны для скрипки 
            Thomastik Dominant 135 1/8
            (4 шт)
          </h6>
          <span class="card-pr__availability">В наличии, более 3 шт.</span>
          <p class="card__price rub">3650 </p>
          <!-- <span class="card__sticker">15%</span> -->
        </a>
      </div>

      <div class="card-column">
        <a href="#" class="card card-pr">
          <div class="card__img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/02.jpg?_v=1641456649011" alt=""></picture>
          </div>
          <h6 class="card__title card-pr__title">
            Струны для скрипки 
            Thomastik Dominant 135 1/8
            (4 шт)
          </h6>
          <span class="card-pr__availability">В наличии, более 3 шт.</span>
          <p class="card__price rub">3650 </p>
          <!-- <span class="card__sticker">15%</span> -->
        </a>
      </div>

      <div class="card-column">
        <a href="#" class="card card-pr">
          <div class="card__img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/03.jpg?_v=1641456649011" alt=""></picture>
          </div>
          <h6 class="card__title card-pr__title">
            Струны для скрипки 
            Thomastik Dominant 135 1/8
            (4 шт)
          </h6>
          <span class="card-pr__availability">В наличии, более 3 шт.</span>
          <p class="card__price rub">3650 </p>
          <!-- <span class="card__sticker">15%</span> -->
        </a>
      </div>

      <div class="card-column">
        <a href="#" class="card card-pr">
          <div class="card__img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/product/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/product/04.jpg?_v=1641456649011" alt=""></picture>
          </div>
          <h6 class="card__title card-pr__title">
            Струны для скрипки 
            Thomastik Dominant 135 1/8
            (4 шт)
          </h6>
          <span class="card-pr__availability">В наличии, более 3 шт.</span>
          <p class="card__price rub">3650 </p>
          <!-- <span class="card__sticker">15%</span> -->
        </a>
      </div>

    </div>
  </div>
</section>

</main>

<?php get_footer();