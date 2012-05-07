<?php 	
/* sidebar switcher */
global $post;
// if (get_post_type() == 'case-studies') : $sid = 'sidebar2';
// elseif ((get_post_type() == 'post' && is_single()) || is_page('innovation') || is_author() || is_tax('vertical')) : $sid = 'sidebar5';
// elseif (get_post_type() == 'news' || is_page('news-releases')) : $sid = 'sidebar7';
// else : $sid = get_post_meta($post->ID, 'sidebar', true); 
// endif;
// if (get_post_type() == 'news' || is_page('news-releases') || is_page('about_us') || is_page('privacy-policy') || is_page('terms-of-use')) : $side = 'left'; else : $side = "right"; endif;
// if (!$sid && get_post_type() == 'post') $sid = 'sidebar5'; // extra check just in case
 ?>


<div id="sidebar-<?=$side?>" class="<?=$sid?>">

	<?php dynamic_sidebar($sid); ?>

</div>