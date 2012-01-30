	<div class="sidebar">
				<ul class="xoxo">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

			<li id="pages" class="widget">
				<h3><?php _e('Pages', 'sandbox') ?></h3>
				<ul>
<?php wp_list_pages('title_li=&sort_column=post_title&depth=1' ) ?>
				</ul>
			</li>
			
			<li id="search">
				<h3><label for="s"><?php _e('Search', 'sandbox') ?></label></h3>
				<form id="searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" value="<?php echo wp_specialchars(stripslashes($_GET['s']), true) ?>" size="10" tabindex="1" />
						<input id="searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'sandbox') ?>" tabindex="2" />
					</div>
				</form>
			</li>


			<li id="categories" class="widget">
				<h3><?php _e('Categories', 'sandbox'); ?></h3>
				<ul>
<?php wp_list_categories('title_li=&hierarchical=1&use_desc_for_title=1') ?>

				</ul>
			</li>

			<li id="archives" class="widget">
				<h3><?php _e('Archives', 'sandbox') ?></h3>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
			</li>		
<?php endif; // end primary sidebar widgets  ?>
		</ul>
	</div><!-- #primary .sidebar -->

