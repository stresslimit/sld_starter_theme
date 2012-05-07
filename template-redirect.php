<?php
/*
Template Name: Redirect

USAGE INSTRUCTIONS:

1. Create a new page in WordPress
2. Add a title to the page (e.g. Redirect Here)
3. Add an URL to the content of the page (e.g. http://www.stresslimitdesign.com OR stresslimitdesign.com OR www.stresslimitdesign.com)
4. Select "Redirect" as the page template
5. Publish!
*/
?>

<?php if (have_posts()) : the_post(); ?>
<?php $url = get_the_excerpt(); if (!preg_match('/^http:\/\//', $url)) $URL = 'http://' . $url; ?>
<?php wp_redirect($url); exit; ?>
<?php endif; ?>