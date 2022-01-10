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
        <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
      </div>

      <div class="product-sec__info">
        <div class="product-sec__info-header">
          <?
						$sku = carbon_get_post_meta(get_the_ID(),"offer_sku");	
							if (!empty($sku)) {
					?>
              <p class="product-sec__info-header-vendor">Артикул: <? echo $sku; ?></p>
					<?
						}
					?>
          <?
						$manuf = carbon_get_post_meta(get_the_ID(),"offer_manufact");	
							if (!empty($manuf)) {
					?>
              <p class="product-sec__info-header-manufacturer">Производитель: <span><? echo $manuf; ?></span></p>
					<?
						}
					?>
        </div>
        <div class="product-sec__info-center">
          <p class="product-sec__info-center-price rub"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?> </p>
          <div class="product-sec__info-center-flex">
            <?php
							$jachejka = carbon_get_the_post_meta('offer_nal');
								if (strlen($jachejka) == 0) {
									echo '<p class="product-sec__info-center-flex-availability">Уточняйте наличие</p>';
								} else if ($jachejka === 0 || $jachejka === '0') {
									echo '<p class="product-sec__info-center-flex-availability">Нет в наличии</p>';
								} else {
									echo '<p class="product-sec__info-center-flex-availability">Есть в наличии</p>';
								}
						?>
            <p class="product-sec__info-center-flex-delivery">Доставка и оплата</p>
          </div>
        </div>
        <div class="product-sec__info-bottom d-flex">

          <form action="#" class="product-sec__info-form">
            <div class="form__line">
              <div class="product-sec__info-form-quantity quantity">
                <div class="product-sec__info-form-quantity-button quantity__button quantity__button_minus"></div>
                <div class="quantity__input">
                  <input id="pageNumeric" autocomplete="off" type="number" name="form[]" value="1">
                </div>
                <div class="quantity__button quantity__button_plus"></div>
              </div>
            </div>
          </form>

          <button class="product-sec__info-btn-bascet button" id = "btn__to-card" onclick = "add_tocart(this, document.getElementById('pageNumeric').value); return false;"
            data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
						data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
						data-size = ""
            data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
            data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
            data-name = "<? echo  get_the_title();?>"
            data-count = "1"
            data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" >
            В корзину
          </button>
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