<?php
/**
 * Template name: Основные вакансии
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<h1 class="entry-title"><?php the_title(); ?></h1>

<section class="vacancy">
<?php
$wp_query = new WP_Query( array(
  'post_type' => 'vacan',
  'posts_per_page' => -1,
  'orderby'=> 'date'
));
?>
<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <div class="vacancy__item">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
		<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
	</div>
  <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); // очищаем запрос ?>
</section>


<?php


get_footer();
