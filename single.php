<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->

<style type="text/css" media="all"> @import url(<?php bloginfo('template_url'); ?>/css/reset.css); @import url(<?php bloginfo('template_url'); ?>/css/generic.css); </style>
<style type="text/css" media="print"> @import url(<?php bloginfo('template_url'); ?>/css/print.css); </style>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<?php wp_head() ?>

</head>

<body class="<?php sandbox_body_class() ?>">
<div class="corner"><a href="http://intelligentchannel.com"><img src="../../../int.jpg"></a></div>
<div id="wrapper" class="hfeed">
	<div id="container" style="width: 1200px;">
		<div id="content" style="width: 1200px;">

<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>" style="width: 1200px;">
				<div class="full-photo">
					<span class="photo-credit">&copy; <?php the_time('Y'); ?> <?php the_author(); ?></span>
<?php the_post_image('large'); ?>
				</div>

				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content" style="width: 860px;">
<?php the_content(); ?>
				</div>
				<!-- 
<div id="popcorn1"></div>
<div id="popcorn2"></div>
			</div><!-- .post -->

			<div id="nav-below" class="navigation">
				
			
			
<div class="browse"><h3>Browse</h3></div>

		<?php 
			$previouspost = get_previous_post($in_same_cat, $excluded_categories);
			
			if ($previouspost != null) {
			
			echo '<div class="nav-previous">';
			previous_post_link('Older: %link');
			echo '<div class="nav-excerpt"><p>';
			previous_post_excerpt();
			echo '</p></div></div>';
			 } ?>

				<?php 
			$nextpost = get_next_post($in_same_cat, $excluded_categories);
			
			if ($nextpost != null) {
			
			echo '<div class="nav-next">';
			next_post_link('Newer: %link');
			echo '<div class="nav-excerpt"><p>';
			next_post_excerpt();
			echo '</p></div></div>';
			 } ?>

			</div><!-- #nav-below -->
			
 <?php comments_template('', true); ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
