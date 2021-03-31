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
			<div>
				<div class="posts-nav">
					<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment()  ) : ?>
						<?php
							$nextPost = get_next_post();
							if( ! empty($nextPost) ){
									$nextthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $nextPost->ID ), 'thumbnail' );?>

							<div class="postNavigation nextPostBox"><?php next_post_link('%link','<div class="inner-prevnext"><div class="thumbnail"><img src="' . esc_url( $nextthumbnail[0] ) . '"  alt="%title"/></div><div class="headline"><span>'. __('', 'nanima') .'</span><h4>%title</h4></div></div>'); ?></div>
							<?php }
							?>
						<?php
							$prevPost = get_previous_post();
							if( ! empty($prevPost) ){
								$prevthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $prevPost->ID ), 'thumbnail' );?>

							<div class="postNavigation prevPostBox"><?php previous_post_link('%link','<div class="inner-prevnext"><div class="thumbnail"><img src="' . esc_url( $prevthumbnail[0] ) . '"/></div><div class="headline"><span>'. __('', 'nanima') .'</span><h4>%title</h4></div></div>'); ?></div>
							<?php }
							?>
					<?php endif; ?>
				</div><!-- navigation End -->
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<?php


get_footer();
