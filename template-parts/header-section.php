<header id="header" class="header">

<div class="header__top">
  <div class="header__top-container _container">
    <div class="header__top-column">
      <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'header__top-list',
      'container_class' => 'header__top-list','container' => false )); ?>
    </div>
    <div class="header__top-column">
      <? $mail = carbon_get_theme_option("as_email");
			  if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="header__top-email"><? echo $mail; ?></a><? } ?>
      <? $tel = carbon_get_theme_option("as_phones_1"); 
				if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__top-phone"><? echo $tel; ?></a><?}?> 
      <a href="#callback" class="header__top-popup _popup-link">Заказать звонок</a>  
    </div>
  </div>
</div>

<div class="header__center">
  <div class="header__center-container _container">
    <a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>
    <div class="header__center-address">
      <p class="header__center-address-text">Ваш город</p>
      <select name="form[]" id="" class="header__center-address-select catalog-header__select">
        <option value="1">г.Москва</option>
        <option value="2" option="">г.Санкт-Петербург</option>
        <option value="3" option="">г.Новосибирск</option>
        <option value="4" option="">г.Екатеринбург</option>

        <option value="5" option="">г.Казань</option>
        <option value="6" option="">г.Нижний Новгород</option>
        <option value="7" option="">г.Челябинск</option>

        <option value="8" option="">г.Омск</option>
        <option value="9" option="">г.Самара</option>
        <option value="10" option="">г.Ростов-на-Дону</option>

        <option value="11" option="">г.Уфа</option>
        <option value="12" option="">г.Красноярск</option>
        <option value="13" option="">г.Пермь</option>
        <option value="14" option="">г.Воронеж</option>
        <option value="15" option="">г.Волгоград</option>
        <option value="16" option="">г.Краснодар</option>
        <option value="17" option="">г.Саратов</option>
        <option value="18" option="">г.Тюмень</option>
        <option value="19" option="">г.Тольятти</option>
        <option value="20" option="">г.Ижевск</option>
      </select>
    </div>
    <div class="search header__search">
      <h5 class="header__search-title">Интернет магазин струнных инструментов и аксессуаров</h5>
      <form class="header__search-form" role="search" method="get" action="<?php echo home_url( '/' ) ?>" id="searchform"
        class="search__form">
        <input type="text" placeholder="Поиск" class="search__input input"
         name="s" id="s">
        <button type="submit" tabindex="2" value="" id="searchsubmit" class="header__search-btn search__btn"></button>
          <?php get_template_part('template-parts/menu-search');?>
      </form>
    </div>
    <button class="mob-search-btn header__mob-search-btn"></button>
    <a href="tel:84951700000" class="mob-phone-icon header__mob-phone-icon"></a>
    <div class="header__center-icons-block">
      <div class="header__center-icons">
        <a href="<?php echo get_permalink(2288);?>" class="header__center-icons-item icons-item-01">
          <span class="icons-item-number icons-item-number-favorites wish_counter">0</span>
          <p class="header__center-icons-name">Избранное</p>
        </a>
      </div>
      <div class="header__center-icons">
        <a href="<?php echo get_permalink(219);?>" class="header__center-icons-item icons-item-02">
          <p class="header__center-icons-name">Профиль</p>
        </a>
      </div>
      <div class="header__center-icons">
        <a href="<?php echo get_permalink(17);?>" class="header__center-icons-item bascket-icon icons-item-03">
          <span class="icons-item-number bascket-icon__number bascet_counter">0</span>
          <p class="header__center-icons-name">Корзина</p>
        </a>
      </div>
    </div>
    <div class="icon-menu" aria-label="Бургер меню">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>

<div class="header__menu">
  <div class="header__menu-container _container">
    <?php wp_nav_menu( array('theme_location' => 'menu_cat','menu_class' => 'header__menu-list menu-list d-flex',
      'container_class' => 'header__menu-list menu-list d-flex','container' => false )); ?>
    </div>
  </div>
  <nav class="menu-main">
	<div class="menu-main__df d-flex">
		<?php wp_nav_menu( array('theme_location' => 'menu_cat_hover', 'container' => false )); ?>	
	</div>
</nav>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
  <?php wp_nav_menu( array('theme_location' => 'menu_cat','menu_class' => 'mob-menu__list',
    'container_class' => 'mob-menu__list','container' => false )); ?>
  <a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>

<!-- Строка мобильного поиска -->
<div class="search header__search-mob">
  <form class="header__search-form" role="search" method="get" action="<?php echo home_url( '/' ) ?>" id="searchform"
    class="search__form">
    <input type="text" placeholder="Поиск" class="search__input input"
    value="<?php echo get_search_query() ?>" name="s" id="s">
    <button type="submit" tabindex="2" value="" id="searchsubmit" class="header__search-btn search__btn"></button>
  </form>
  <?php get_template_part('template-parts/menu-search');?>
</div>