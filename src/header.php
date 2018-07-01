<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="brand">
        <h1>Daily Briefing</h1>
        <p>Biblical insight on today's news</p>
      </div>
      <form class="subscribe">
        <p>Subscribe to receive the Daily Briefing in your email inbox</p>
        <input type="email" name="subscribe-email" placeholder="you@example.com" />
        <button type="submit">Subscribe</button>
      </form>
    </header>
