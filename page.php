<?php 
wp_enqueue_style('page-style', get_template_directory_uri() . '/styles/page.css', array(), '1.0', 'all');
get_header(); 
?>

<div class="parent">
<div class="content-container">
    <?php
        while(have_posts()){
            the_post(); 
            the_content();
        }
    ?>
</div>
</div>
<?php get_footer(); ?>