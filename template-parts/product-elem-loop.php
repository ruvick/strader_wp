<div class="catalog-card-column">
	<a href="<?echo get_the_permalink($args['element']->ID);?>" class="card card-pr">
		<div class="card__img">
			<img src="<?php  $imgTm = get_the_post_thumbnail_url( $args['element']->ID, "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
		</div>
		<h6 class="card__title card-pr__title"><? echo $args['element']->post_title;?></h6>
		<?php
			$jachejka = carbon_get_post_meta($args['element']->ID, 'offer_nal');
				if (strlen($jachejka) == 0) {
					echo '<span class="card-pr__availability">Уточняйте наличие</span> ';
				} else if ($jachejka === 0 || $jachejka === '0') {
					echo '<span class="card-pr__availability">Нет в наличии</span> ';
				} else {
					echo '<span class="card-pr__availability">В наличии</span> ';
				}
		?>
		<div class="card__price-block">
		<?
			$oldPrice = carbon_get_post_meta(get_the_ID(),"offer_old_price");	
					if (!empty($oldPrice)) {
		?>
			<p class="card__price old-price rub"><? echo $oldPrice; ?> </p> 
		<?
			}
		?>
			<p class="card__price rub"><?echo carbon_get_post_meta($args['element']->ID,"offer_price"); ?> </p> 
		</div>
		<div class="card__wrap-bascet">
			<button class="card__favorites towish" data-productid = "<?echo get_the_ID();?>"></button>
			<button class="card__bascet button" id = "btn__to-card" onclick = "add_tocart(this, document.getElementById('pageNumeric').value); return false;"
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
		</div>
		<? $sticker = carbon_get_post_meta($args['element']->ID,"offer_sticker");
    	if (!empty($sticker)) {?>
			<span class="card__sticker"><?echo $sticker;?></span>  
		<?}?>
	</a>
</div>
