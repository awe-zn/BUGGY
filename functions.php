<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 220, true);

function my_pagination_rewrite() {
    add_rewrite_rule('blog/page/?([0-9]{1,})/?$', 'index.php?category_name=blog&paged=$matches[1]', 'top');
}
add_action('init', 'my_pagination_rewrite');
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  register_sidebar(
	  array(
		'name' => 'busca',
		'id' => 'busca',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '',
	  )
	);

	// custom post type
function custom_post_type_passeios() {
	register_post_type('passeios', array(
		'label' => 'Passeios',
		'description' => 'Passeios',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'passeios', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Passeio',
			'singular_name' => 'Passeio',
			'menu_name' => 'Passeio',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Passeio',
			'edit' => 'Editar',
			'edit_item' => 'Editar Passeio',
			'new_item' => 'Novo Passeio',
			'view' => 'Ver Passeios',
			'view_item' => 'Ver Passeio',
			'search_items' => 'Procurar Passeios',
			'not_found' => 'Nenhum Passeio Encontrado',
			'not_found_in_trash' => 'Nenhum Passeio Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_passeios');

function custom_post_type_galeria() {
	register_post_type('galeria', array(
		'label' => 'Galeria',
		'description' => 'Galeria',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'Galeria', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Galeria',
			'singular_name' => 'Galeria',
			'menu_name' => 'Galeria',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova foto',
			'edit' => 'Editar',
			'edit_item' => 'Editar Foto',
			'new_item' => 'Nova Foto',
			'view' => 'Ver Fotos',
			'view_item' => 'Ver Foto',
			'search_items' => 'Procurar Fotos',
			'not_found' => 'Nenhuma Foto Encontrada',
			'not_found_in_trash' => 'Nenhuma Foto Encontrada no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_galeria');
add_filter( 'excerpt_length', function($length) {
    return 35;
}, PHP_INT_MAX );