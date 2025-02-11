<?php get_header(); ?>

<main>
<?php
    // Inside front-page.php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();  // Display content, including custom blocks
        endwhile;
    endif;
?>  
</main> 

<?php get_footer(); ?>