<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Simplesite
 * @since Simplesite 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
<meta charset='<?php bloginfo( 'charset' ); ?>'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link href = "<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" 
rel="stylesheet" media="screen">
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