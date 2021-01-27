<?php
/**
 * Template name: Основные вакансии
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<a href="" class="btn__link-v">Другие вакансии</a>
<section class="vacancy">
<?php
// параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'post_type'   => 'vacan',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
  setup_postdata($post);
  ?>
      <div class="vacancy__item">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
      </div>
  <?php
}
wp_reset_postdata(); // сброс

?>
<?php


get_footer();
