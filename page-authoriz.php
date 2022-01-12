<?php get_header();

/**
 * Template Name: Шаблон страницы Авторизация
 * Template Post Type: page
 */

 ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="header-sec">
  		<div class="_container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
					}
				?> 
    		<h1 class="header-sec__title">Авторизация</h1>
  		</div>
		</section>

		<section class="content"> 
			<div class="_container">
				<form action="#" class="authoriz__form reviews__form">
					<input v-model="email" :class = "{dontz:emailNotEnter}" autocomplete="off" type="email" name="email" placeholder="Email" id="form-emailw" class="reviews__form-input input">
					<input v-model="password" :class = "{dontz:passwordNotEnter}" autocomplete="new-password" type="password" name="password" placeholder="Пароль" id="form-telw" class="reviews__form-input input">
					<div class = "btn_wrapper">
						<button @click.prevent  = "getAutorisation"  type="button" class="reviews__form-btn agriwind btn">Войти</button>
						<button @click.prevent  = "toRegister" type="button" class="reviews__form-btn agriwind btn btn-tr" id = "registerbtn">Регистрация</button>
					</div>

					<!-- <div class = "btn_wrapper" id = "passRecoveryWrapper">
						<a @click.prevent = "toPasRec" href = "#">Не можете войти в личный кабинет?</a>
					</div>

					<div v-show = "showMsgBlk" :class = "{messageFormBlkOk : msgOk}" class = "messageFormBlk">
						{{messageText}}
					</div> -->

				</form> 
			</div>
		</section>
	</main>

<?php get_footer();