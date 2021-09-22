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
				<img src="<?php the_field('main_img'); ?>" alt="" class="container__img">
			</div>
			<div class="container__item">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p class="entry-work"><?php the_field('schedule_title'); ?></p>
				<p><strong>Требования</strong></strong></p>
				<?php the_field('demand'); ?>
				<p><strong>Условия</strong></strong></p>
				<?php the_field('terms'); ?>
				<div class="block__btn">
					<div class="wp-btn"><a href="mailto:rabota@mosmetro.ru?subject=Резюме на вакансию &quot;<?php the_title(); ?>&quot;" rel=""><strong>ОТПРАВИТЬ РЕЗЮМЕ</strong></a></div>
					<div class="wp-btn"><a href="tel:+74956222222" rel=""><strong>ПОЗВОНИТЬ</strong></a></div>
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
		<?php
		if (get_field('advantage_title')) {
            echo '<h3 class="advantage__title">' . get_field('advantage_title') . '</h3>';
        }
        ?>
		<section class="advantage">
		<?php

            if (get_field('advantage_img-1')) {
                echo '<img src="' . get_field('advantage_img-1') . '">';
        	}
            if (get_field('advantage_img-2')) {
                echo '<img src="' . get_field('advantage_img-2') . '">';
        	}
        	if (get_field('advantage_img-3')) {
                echo '<img src="' . get_field('advantage_img-3') . '">';
            }
            if (get_field('advantage_img-4')) {
                echo '<img src="' . get_field('advantage_img-4') . '">';
            }
            if (get_field('advantage_img-5')) {
                echo '<img src="' . get_field('advantage_img-5') . '">';
            }
            if (get_field('advantage_img-6')) {
                echo '<img src="' . get_field('advantage_img-6') . '">';
            }
            if (get_field('advantage_img-7')) {
                echo '<img src="' . get_field('advantage_img-7') . '">';
            }
            if (get_field('advantage_img-8')) {
                echo '<img src="' . get_field('advantage_img-8') . '">';
            }

        ?>
		</section>
		<section class="text__block">
		    <?php the_field('text_block'); ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

	<?php


get_footer();
