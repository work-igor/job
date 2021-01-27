<?php
/**
 * Template name: Все вакансии
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="main__block">
		<?php
		$stati_children = new WP_Query(array(
			'post_type' => 'page',
			'post_parent' => get_the_ID()
			)
		);

		if($stati_children->have_posts()) :
			while($stati_children->have_posts()): $stati_children->the_post();
					echo '<div class="main__item"><h3>'.get_the_title().'</h3>';
					echo '<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url( get_the_id(), 'full' ).'"></a></div>';
			endwhile;
		endif; wp_reset_query();
		?>

</section>
<?php


get_footer();
