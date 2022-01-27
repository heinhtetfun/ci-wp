<h2>This is <?= $title ?></h2>
<?php
$blog_post = new WP_Query('');
$blog_post->query('post_type=post&showposts=1'.'&paged='.$paged);
if($blog_post->have_posts()) : 
?>
<p>Here have posts.</p>
<?php
    while($blog_post->have_posts()):
    $blog_post->the_post();
    the_title();
    the_content();
    endwhile;
?>
<?php else: ?>
<p>Here no posts.</p>
<?php endif; ?>