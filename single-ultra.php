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
        <div class="slider__wrap">
          <div class="slider__container _container">
            <div class="product-sl _swiper d-flex">
              <?
						    $pict = carbon_get_the_post_meta('offer_picture');
						      if($pict) {
							  $pictIndex = 0;
							    foreach($pict as $item) {
							?>
                <a class="card-bg-item slider__slide fancybox" data-fancybox="gallery" href="<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>">
                  <button class="product-sec__img-cursor"></button>
                  <img
										id = "pict-<? echo empty($item['gal_img_sku'])?$pictIndex:$item['gal_img_sku']; ?>" 
										alt = "<? echo $item['gal_img_alt']; ?>"
										title = "<? echo $item['gal_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>" />                
                </a>
							<?
								  $pictIndex++;
							    }
						    }
						  ?>
          </div>
        </div>
        <!-- Кнопки-точки -->
        <div class="product-sl-paggination swiper-paggination"></div>
        </div>
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
            <a href="<?php echo get_permalink(2301);?>" class="product-sec__info-center-flex-delivery">Доставка и оплата</a>
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
          <!-- <button class="product-sec__info-btn-pay-click button">Купить в 1 клик</button> -->
          <button class="product-sec__info-btn-favorites towish" data-productid = "<?echo get_the_ID();?>"></button>

        </div>
      </div>

    </div>

    <div class="product-sec__descp">
      <h5 class="product-sec__descp-title">Описание</h5>
      <div class="product-sec__descp-table">
        <!-- <h6 class="product-sec__descp-table-title">Характеристики:</h6> -->
        <div class="product-sec__descp-table-flex">
          <div class="product-sec__descp-table-info">
            <?echo carbon_get_post_meta(get_the_ID(),"offer_smile_charect"); ?>
          </div>
          <ul class="product-sec__descp-table-list product-sec__descp-table-list_right">
            <li class="product-sec__descp-table-list-item product-sec__descp-table-list-item_bold">Бренд <p><?echo carbon_get_post_meta(get_the_ID(),"offer_brand"); ?></p></li>
            <li class="product-sec__descp-table-list-item product-sec__descp-table-list-item_bold">Страна <p><?echo carbon_get_post_meta(get_the_ID(),"offer_country"); ?></p></li>
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

</main>

<?php get_footer();