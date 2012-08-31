<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			   <?php
			      if (function_exists('is_tag') && is_tag()) {
			         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			      elseif (is_archive()) {
			         wp_title(''); echo ' Archive - '; }
			      elseif (is_search()) {
			         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			      elseif (!(is_404()) && (is_single()) || (is_page())) {
			         wp_title(''); echo ' - '; }
			      elseif (is_404()) {
			         echo 'Not Found - '; }
			      if (is_home()) {
			         bloginfo('name'); echo ' - '; bloginfo('description'); }
			      else {
			          bloginfo('name'); }
			      if ($paged>1) {
			         echo ' - page '. $paged; }
			   ?>
		</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.6.1.min.js"></script>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="wrap">
        	<div class="content">
        		<a href="<?php bloginfo('url') ?>"><h1>Site name</h1></a>
        	</div>
        </div>
        <div class="wrap">

