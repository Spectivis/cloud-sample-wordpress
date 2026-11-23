<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-head">
  <div class="wrap">
    <div>
      <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <p class="site-desc"><?php bloginfo('description'); ?></p>
    </div>
    <nav class="main"><?php wp_nav_menu(['theme_location' => 'main', 'container' => false, 'fallback_cb' => 'wp_page_menu', 'depth' => 1]); ?></nav>
  </div>
</header>
<main><div class="wrap">
