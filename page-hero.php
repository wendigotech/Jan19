<?php
/*
 Template Name: hero
 Template Post Type: post, page
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <link href="css/style.css" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php wp_head(); ?></head>

  <body class="<?php echo implode(' ', get_body_class()); ?>"><?php wp_footer(); ?></body>
</html>
