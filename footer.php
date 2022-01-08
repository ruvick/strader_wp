<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo"></a>

			<div class="footer__column">
				<h6 class="footer__column-title">Каталог товаров</h6>
				<ul class="footer__menu"> 
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Струны</a></li> 
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Аксессуары</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Футляры и чехлы</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Инструменты</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Смычки</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Пульты</a></li>
					<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Акции %</a></li>
				</ul>
			</div>

			<div class="footer__column">
				<h6 class="footer__column-title">Информация</h6> 
				<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu',
      		'container_class' => 'footer__menu','container' => false )); ?>
			</div>

			<div class="footer__column footer__column_contact">
				<h6 class="footer__column-title">Наши контакты</h6>
				<? $tel = carbon_get_theme_option("as_phones_1"); 
					if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__column-phone"><? echo $tel; ?></a><?}?> 
				<? $mail = carbon_get_theme_option("as_email");
			  	if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="footer__column-email"><? echo $mail; ?></a><? } ?>
				<? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><p class="footer__column-address"><? echo $adr; ?></p><?}?>
				<h6 class="footer__column-time-work">Часы</h6>
				<p class="footer__column-time-work-weekdays">Понедельник—пятница: 9:00–17:00</p>
				<p class="footer__column-time-work-weekends">Суббота и воскресенье: 11:00–15:00</p>
			</div>

		</div>

		<div class="footer__bottom">
			<div class="footer__bottom-line"></div>
			<p class="footer__bottom-policy">© strader 2021</p>
		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>