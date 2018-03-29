<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset='<?php bloginfo( 'charset' ); ?>'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div 
	<?php
	if ( ! is_single() ) {
		echo 'class="wrapper"';
	} else {
		post_class( 'wrapper' );
	}
	?>
	>
		<header class="header">