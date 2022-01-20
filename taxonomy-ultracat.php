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
    		<h1 class="header-sec__title"><?php single_cat_title( '', true );?></h1>
  		</div>
		</section>

<section class="catalog-sec">
  <div class="_container">

    <div class="catalog-sec__inner">
      
    <?php get_template_part('template-parts/category-sidebar');?>

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

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

  </div>
</section>

</main>

<?php get_footer(); ?>  