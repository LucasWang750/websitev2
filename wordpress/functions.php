<?php




function load_stylesheets()
{


	wp_register_style('first', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), false, 'all');
	wp_register_style('second', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css', array(), false, 'all');
	wp_register_style('third', get_template_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.css', array(), false, 'all');
	wp_register_style('fourth', get_template_directory_uri() . '/css/freelancer.min.css', array(), false, 'all');
	wp_register_style('fifth', get_template_directory_uri() . '/css/stylish-portfolio.css', array(), false, 'all');

	wp_enqueue_style('first');
	wp_enqueue_style('second');
	wp_enqueue_style('third');
	wp_enqueue_style('fourth');
	wp_enqueue_style('fifth');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');





function load_js()
{


	wp_register_script('js1', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', '', 1, true);
	wp_register_script('js2', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', '', 1, true);
	wp_register_script('js3', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', '', 1, true);
	wp_register_script('js4', get_template_directory_uri() . '/js/stylish-portfolio.min.js', '', 1, true);
	wp_register_script('js5', get_template_directory_uri() . '/js/jqBootstrapValidation.js', '', 1, true);
	wp_register_script('js6', get_template_directory_uri() . '/js/contact_me.js', '', 1, true);
	wp_register_script('js7', get_template_directory_uri() . '/js/freelancer.min.js', '', 1, true);

	wp_enqueue_script('js1');
	wp_enqueue_script('js2');
	wp_enqueue_script('js3');
	wp_enqueue_script('js4');
	wp_enqueue_script('js5');
	wp_enqueue_script('js6');
	wp_enqueue_script('js7');

}
add_action('wp_enqueue_scripts', 'loadjs');


