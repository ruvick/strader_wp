<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

    <div id = "tovarCategoryId" data-id = "<? echo get_queried_object()->term_id; ?>"></div>

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
						// while(have_posts()):
						// 	the_post();
						// 	get_template_part('template-parts/product-elem');  
						// endwhile;
					?>
					<?php
					
            // $countInPage = !empty($_REQUEST["countinpage"]) ? $_REQUEST["countinpage"] : "20";

					  $termID = get_queried_object()->term_id;

						$term = get_term_by('id', $child, $taxonomyName);
						$term_id = $term->term_taxonomy_id; 

						$arg = $wp_query->query;

            $startPrice = empty($_REQUEST["price_ot"])?"0":$_REQUEST["price_ot"];
            $endPrice = empty($_REQUEST["price_do"])?PHP_INT_MAX:$_REQUEST["price_do"];

            $metaquery = array(
              'relation' => 'AND',
              
              'priceStart' => array (
                'key'     => '_offer_price',
                'value' => $startPrice,
                'compare' => '>=',
                'type'    => 'NUMERIC',
              ),
              
              'priceEnd' => array (
                'key'     => '_offer_price',
                'value' => $endPrice,
                'compare' => '<=',
                'type'    => 'NUMERIC',
              )
            );

            if (!empty($_REQUEST["nal"])) {
              $metaquery['nal'] = array (
                'key'     => '_offer_nal',
                'value' => "В наличии",
                'compare' => '=',
              );
            }
						
            // Фильтрация по бренду
						if (!empty($_REQUEST["brand"])) {
									$metaquery["brandQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["brand"]); $i++) {
										$metaquery["brandQuery"]["brand".$i] = array(
											'key'     => '_offer_brand',
											'value' => $_REQUEST["brand"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}


						// Фильтрация по стране
								if (!empty($_REQUEST["strana"])) {
									$metaquery["stranaQuery"] = array(
										'relation' => 'OR',
									);
									
									for ($i = 0; $i<count($_REQUEST["strana"]); $i++) {
										$metaquery["stranaQuery"]["strana".$i] = array(
											'key'     => '_offer_country',
											'value' => $_REQUEST["strana"][$i],
											'compare' => '=',
											'type'    => 'CHAR',
										);
									} 
								}

								$mypostCount = array(
									'post_type' => 'ultra',
									'posts_per_page' => -1,
									'meta_query' => $metaquery,
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'ultracat',
											'field' => 'id',
											'terms' => strval($termID)
										),
									),
								);

								

								$Count = new WP_Query($mypostCount);
              	// echo "<pre>";	
								// 	var_dump($Count);
								// echo "</pre>";


								// $fullCount = $Count->post_count;
							  
				  
								// $startPos = ($pagenumber - 1) * $countInPage;
							  
								// if ($startPos > $fullCount) {
								//   $pagenumber = 1;
								//   $startPos = ($pagenumber - 1) * $countInPage;
								// }
								
								$mypost = array(
									'post_type' => 'ultra',
									// 'posts_per_page' => $countInPage,
									// 'offset' => $startPos,
									'meta_query' => $metaquery,
									'meta_key' => '_offer_price',
									'orderby' => 'meta_value_num',
									'order' => 'ASC',
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'ultracat',
											'field' => 'id',
											'terms' => strval($termID)
										),
									),
								);

						 
								



								$loop = new WP_Query($mypost);
								
                // echo "<pre>";	
								// 	var_dump($loop);
								// echo "</pre>";

								foreach ($loop->posts as $element) {
                  $param = ["element" => $element];
									get_template_part('template-parts/product', 'elem-loop', $param); 
								}

								
						?>
          
        </div>

      </div>

    </div>

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi($loop); ?>

  </div>
</section>

</main>

<?php get_footer(); ?>  