<?php
// footer
// add_filter( 'generate_copyright','tu_custom_copyright' );
/*function tu_custom_copyright() {
    ?>
      &copy; <?php echo date('o'); ?>
    <?php
} */
//connection
// Load Scripts
function load_scripts() {
  wp_enqueue_script('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js', array(), '1.0.0', true);

  wp_enqueue_script('common-js', get_stylesheet_directory_uri() . '/js/common.js', NULL, true);
}
add_action('wp_enqueue_scripts', 'load_scripts', 10);

// New type record
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'vacan', [
		'label'  => null,
		'labels' => [
			'name'               => 'Основные вакансии', // основное название для типа записи
			'singular_name'      => 'Вакансия', // название для одной записи этого типа
			'add_new'            => 'Добавить вакансию', // для добавления новой записи
			'add_new_item'       => 'Добавление вакансии', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование вакансии', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть вакансию', // для просмотра записи этого типа.
			'search_items'       => 'Искать вакансию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Основные вакансии', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true
	] );
};
// New type record
add_action( 'init', 'register_post_types_drugie' );
function register_post_types_drugie(){
	register_post_type( 'drugie', [
		'label'  => null,
		'labels' => [
            'name'               => 'Другие вакансии', // основное название для типа записи
            'singular_name'      => 'Вакансия', // название для одной записи этого типа
            'add_new'            => 'Добавить вакансию', // для добавления новой записи
            'add_new_item'       => 'Добавление вакансии', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование вакансии', // для редактирования типа записи
            'new_item'           => 'Новое ____', // текст новой записи
            'view_item'          => 'Смотреть вакансию', // для просмотра записи этого типа.
            'search_items'       => 'Искать вакансию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Другие вакансии', // название меню
        ],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ],
		'taxonomies'          => [ 'post_tag', 'category ' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}


// задаем шаблон по умолчанию для нового типа записи
add_filter('template_include', 'my_template');
function my_template( $template ) {

    if( is_page('drugie-vakansii') ){
        if ( $new_template = locate_template( array( '/templates/single-drugie-vakansii.php' ) ) )
            return $new_template ;
    }

	global $post;
	if( $post->post_type == 'vacan' ){
		return get_stylesheet_directory() . '/templates/single-vacan.php';
	}

	return $template;

}
// google font
// function wpb_add_google_fonts() {
// 	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;500;600;800;900&display=swap', false );
// 	}

// 	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

?>
