<?php
function mytheme_comment($comment, $args, $depth)
{
	//$comment_id = get_comment_ID(); 
?>
	<div class="testimonials__item">
		<div class="testmonial">
			<div class="testmonial__name"><? echo get_comment_author(); ?></div>
			<div class="testmonial__text">
				<?php comment_text(); ?>
			</div>
			<div class="testmonial__date">
				<?
				printf(
					__('%1$s'),
					get_comment_date()
				);
				?>
			</div>
			<div class="testmonial__link">
				<? $auth_url = get_comment_author_url(); ?>
				Website: <a href="<? echo $auth_url; ?>" target="_blank"><? echo parse_url($auth_url, PHP_URL_HOST) ?></a>
			</div>
		</div>
	</div>
<?
}

add_filter('comment_form_fields', 'issue_reorder_comment_fields' );
function issue_reorder_comment_fields( $fields ){
	// die(print_r( $fields )); // посмотрим какие поля есть

	$new_fields = array(); // сюда соберем поля в новом порядке

	$myorder = array('author','email','url','comment'); // нужный порядок

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	// если остались еще какие-то поля добавим их в конец
	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

add_action("admin_menu", "remove_menus");
function remove_menus() {
    remove_menu_page("edit.php?post_type=acf-field-group"); # ACF
}