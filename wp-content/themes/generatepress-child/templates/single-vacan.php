<?php
/**
 * Template name: Вакансии
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
	<div id="w-100">
	<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
		<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
		<section class="container">
			<div class="container__item">
				<img src="<?php the_field('main_img'); ?>" alt="">
			</div>
			<div class="container__item">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p><strong>Требования</strong></strong></p>
				<?php the_field('demand'); ?>
				<p><strong>Условия</strong></strong></p>
				<?php the_field('terms'); ?>
				<div class="block__btn">
					<div class="wp-btn"><a href="mailto:rabota@mosmetro.ru?subject=Резюме на вакансию &quot;<?php the_title(); ?>&quot;" rel=""><strong>ОТПРАВИТЬ РЕЗЮМЕ</strong></a></div>
					<div class="wp-btn"><a href="tel:+74956220201" rel=""><strong>ПОЗВОНИТЬ</strong></a></div>
				</div>
			</div>
		</section>
		<div class="container__footer">
			<p><strong>Процесс трудоустройства</strong></strong></p>
			<div class="emp__block">
				<div class="emp__item"><img src="<?php the_field('employment_img'); ?>" alt=""></div>
				<div class="emp__item emp__item-mobile"><img src="<?php the_field('employment_img_mobile'); ?>" alt=""></div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

	<?php


get_footer();
