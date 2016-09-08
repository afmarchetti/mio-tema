<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

  <div class="container clearfix">

    <header class="header clearfix">
      <a href="<?php echo home_url(); ?>" class="header__logo"><?php bloginfo('name'); ?> </a>
      <a href="#" class="header__icon-bar"><span></span><span></span><span></span></a>

      <?php /* Main Navigation */
        wp_nav_menu( array(
          'theme_location' => 'header',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'header__menu'
          )
        );
      ?>

    </header>

    <?php if(is_front_page()){ ?>

      <h1 class="main-title"><?php bloginfo('description'); ?></h1>

    <?php } else if ( is_category() || is_tag() ) { ?>

			<h1 class="main-title"><?php echo single_cat_title() ?></h1>

		<?php } else if ( is_search() ) { ?>

      <h1 class="main-title"> <?php esc_html_e('Results for:', 'miotema'); ?> <strong><i><?php echo $s; ?></i></strong></h1>

    <?php } ?>
