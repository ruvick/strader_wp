<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

    <section class="header-sec">
  		<div class="_container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
					}
				?> 
    		<h1 class="header-sec__title">Продукты</h1>
  		</div>
		</section>

<section class="catalog-sec">
  <div class="_container">

    <div class="catalog-sec__inner">
      
      <div class="catalog-sec__sidebar">
        <h6 class="catalog-sec__sidebar-title">Фильтр по параметрам</h6>
        <form action="#" class="catalog-sec__sidebar-form">

          <div class="catalog-sec__sidebar-form-column">
            <div class="spollers-block" data-spollers data-one-spoller>
              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Цена</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
                  <div class="catalog-sec__sidebar-price">
                    <div class="catalog-sec__sidebar-price-input">
                      <label for="min-price" class="form__label">От</label>
                      <input id="min-price" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="25"
                      class="input _digital">
                    </div>
                    <div class="catalog-sec__sidebar-price-input">
                      <label for="max-price" class="form__label">До</label>
                      <input id="max-price" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="15000"
                      class="input _digital">
                    </div>
                  </div>
                </div>
              </div>

              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Размер</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
                  <div class="options catalog-sec__sidebar-spollers-options">
                    <label class="options__item">
                      <input class="options__input" checked type="radio" value="1" name="form[option]">
                      <span class="options__text"><span>4/4</span></span>
                    </label>
                    <label class="options__item">
                      <input class="options__input" type="radio" value="2" name="form[option]">
                      <span class="options__text"><span>3/4</span></span>
                    </label>
                    <label class="options__item">
                      <input class="options__input" type="radio" value="3" name="form[option]">
                      <span class="options__text"><span>1/2</span></span>
                    </label>
                    <label class="options__item">
                      <input class="options__input" type="radio" value="4" name="form[option]">
                      <span class="options__text"><span>1/4</span></span>
                    </label>
                    <label class="options__item">
                      <input class="options__input" type="radio" value="5" name="form[option]">
                      <span class="options__text"><span>1/8</span></span>
                    </label>
                    <label class="options__item">
                      <input class="options__input" type="radio" value="6" name="form[option]">
                      <span class="options__text"><span>1/16</span></span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Бренд</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
                  <label for="check" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" name="form[]">
                    <span class="checkbox__text"><span>Alice</span></span>
                  </label>
                  <label for="check1" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check1" data-error="Ошибка" class="checkbox__input" type="checkbox" value="2" name="form[]">
                    <span class="checkbox__text"><span>Anton Breton</span></span>
                  </label>
                  <label for="check2" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check2" data-error="Ошибка" class="checkbox__input" type="checkbox" value="3" name="form[]">
                    <span class="checkbox__text"><span>D'Addario</span></span>
                  </label>
                  <label for="check3" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check3" data-error="Ошибка" class="checkbox__input" type="checkbox" value="4" name="form[]">
                    <span class="checkbox__text"><span>D'Orazio</span></span>
                  </label>
                  <label for="check4" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check4" data-error="Ошибка" class="checkbox__input" type="checkbox" value="5" name="form[]">
                    <span class="checkbox__text"><span>Dogal</span></span>
                  </label>
                  <label for="check5" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check5" data-error="Ошибка" class="checkbox__input" type="checkbox" value="6" name="form[]">
                    <span class="checkbox__text"><span>Flight</span></span>
                  </label>
                  <label for="check6" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check6" data-error="Ошибка" class="checkbox__input" type="checkbox" value="7" name="form[]">
                    <span class="checkbox__text"><span>HiHOPE</span></span>
                  </label>
                  <label for="check7" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check7" data-error="Ошибка" class="checkbox__input" type="checkbox" value="8" name="form[]">
                    <span class="checkbox__text"><span>Jargar</span></span>
                  </label>
                </div>
              </div>

              <div class="catalog-sec__sidebar-availab">
                <label for="check8" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                  <input id="check8" data-error="Ошибка" class="checkbox__input" type="checkbox" value="9" name="form[]">
                  <span class="checkbox__text"><span>В наличии</span></span>
                </label>
              </div>

              <div class="spollers-block__item catalog-sec__sidebar-spollers-item">
                <div class="spollers-block__title catalog-sec__sidebar-spollers-title" data-spoller>Страна (фирма)</div>
                <div class="spollers-block__body catalog-sec__sidebar-spollers-block-body">
                  <label for="check9" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check9" data-error="Ошибка" class="checkbox__input" type="checkbox" value="10" name="form[]">
                    <span class="checkbox__text"><span>Франция</span></span>
                  </label>
                  <label for="check10" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check10" data-error="Ошибка" class="checkbox__input" type="checkbox" value="11" name="form[]">
                    <span class="checkbox__text"><span>Китай</span></span>
                  </label>
                  <label for="check11" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check11" data-error="Ошибка" class="checkbox__input" type="checkbox" value="12" name="form[]">
                    <span class="checkbox__text"><span>Чехия</span></span>
                  </label>
                  <label for="check12" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check12" data-error="Ошибка" class="checkbox__input" type="checkbox" value="13" name="form[]">
                    <span class="checkbox__text"><span>Германия</span></span>
                  </label>
                  <label for="check13" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check13" data-error="Ошибка" class="checkbox__input" type="checkbox" value="14" name="form[]">
                    <span class="checkbox__text"><span>Италия</span></span>
                  </label>
                  <label for="check14" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check14" data-error="Ошибка" class="checkbox__input" type="checkbox" value="15" name="form[]">
                    <span class="checkbox__text"><span>Австрия</span></span>
                  </label>
                  <label for="check15" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check15" data-error="Ошибка" class="checkbox__input" type="checkbox" value="16" name="form[]">
                    <span class="checkbox__text"><span>Словакия</span></span>
                  </label>
                  <label for="check16" class="checkbox catalog-sec__sidebar-spollers-checkbox">
                    <input id="check16" data-error="Ошибка" class="checkbox__input" type="checkbox" value="17" name="form[]">
                    <span class="checkbox__text"><span>Россия</span></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="catalog-sec__sidebar-form-btn">
            <button type="reset" class="catalog-sec__sidebar-form-btn-limk button button_grey">Сбросить</button>
            <button type="submit" class="catalog-sec__sidebar-form-btn-limk button button_red">Показать</button>
          </div>
        </form>
      </div>

      <div class="catalog-sec__main">
        <div class="catalog-sec__sorting">
          <div class="catalog-sec__sorting-name">Сортировать по:</div>
          <form action="#" class="catalog-sec__sorting-select-form form">
            <div class="catalog-sec__sorting-select-form-line form__line">
              <select name="form[]" class="catalog-sec__sorting-select-form-sel">
                <option value="1" selected="selected">популярности</option>
                <option value="2">популярности</option>
                <option value="3">популярности</option>
                <option value="4">популярности</option>
                <option value="2">популярности</option>
                <option value="3">популярности</option>
              </select>
            </div>
            <div class="catalog-sec__sorting-select-form-line form__line">
              <select name="form[]" class="catalog-sec__sorting-select-form-sel">
                <option value="1" selected="selected">алфавиту</option>
                <option value="2">алфавиту</option>
                <option value="3">алфавиту</option>
                <option value="4">алфавиту</option>
                <option value="2">алфавиту</option>
                <option value="3">алфавиту</option>
              </select>
            </div>
            <div class="catalog-sec__sorting-select-form-line form__line">
              <select name="form[]" class="catalog-sec__sorting-select-form-sel">
                <option value="1" selected="selected">цене</option>
                <option value="2">цене</option>
                <option value="3">цене</option>
                <option value="4">цене</option>
                <option value="2">цене</option>
                <option value="3">цене</option>
              </select>
            </div>
          </form>
        </div>

        <div class="catalog-sec__main-wrap">
					<?php
						while(have_posts()):
							the_post();
							get_template_part('template-parts/product-elem');  
						endwhile;
					?>
        </div>

      </div>

    </div>

    <!-- <nav class="pagination catalog-sec__pagination d-flex">
      <div class="pagination__nav-links d-flex">
        <a class="pagination__back" href="#"></a>
        <span class="pagination__numbers">1</span>
        <a class="pagination__numbers current" href="#">2</a>
        <a class="pagination__numbers" href="#">3</a>
        <a class="pagination__numbers" href="#">4</a> -->
<!-- 							<div class="pagination__block-dot d-flex">
          <span class="pagination__dot">.</span>
          <span class="pagination__dot">.</span>
          <span class="pagination__dot">.</span>
        </div> -->
        <!-- <a class="pagination__numbers" href="#">5</a>
        <a class="pagination__next" href="#"></a>
      </div>
    </nav> -->

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

  </div>
</section>

</main>

<?php get_footer(); ?>  