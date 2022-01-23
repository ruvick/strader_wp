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
		<p class="card__price rub"><?echo carbon_get_post_meta($args['element']->ID,"offer_price"); ?> </p>
		<? $sticker = carbon_get_post_meta($args['element']->ID,"offer_sticker");
    	if (!empty($sticker)) {?>
			<span class="card__sticker"><?echo $sticker;?></span>
		<?}?>
	</a>
</div>
