<!doctype html>  

<html <?php language_attributes() ?>>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?= get_bloginfo_rss('rss2_url') ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<link rel="shortcut icon" href="<?= get_bloginfo('template_url') ?>/favicon.png">
<link rel="apple-touch-icon" href="<?= get_bloginfo('template_url') ?>/images/apple-touch-icon.png">

<title><?php wp_title('') ?></title>
<?php if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) wp_enqueue_script( 'comment-reply' );  ?>


<?php // wordpressy stuff ?>

<?php wp_head() ?>

<?php // ie crap ?>
<!--[if lt IE 9]>
<script src="<?= get_bloginfo('template_url') ?>/js/ie/DOMAssistant-2.0.min.js"></script>
<script src="<?= get_bloginfo('template_url') ?>/js/ie/selectivizr.js"></script>
<![endif]-->

</head>

<body <?php body_class() ?>>
