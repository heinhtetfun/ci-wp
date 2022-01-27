<h2>This is <?= $title ?></h2>
<div>
<?php
get_header();
// define('WP_USE_THEMES', false);
// require BASEPATH . "..\/wp_blog\/wp-load.php";
$blog_post = new WP_Query('');
// var_dump($blog_post);
if($blog_post->have_posts()): ?>
<p>Here have posts.</p>
<?php exit(0); else: ?>
<p>Here no posts.</p>
<?php
    while($blog_post->have_posts()):
    $blog_post->the_post();
    the_title();
    the_content();
endwhile;endif;
?>
</div>