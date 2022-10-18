<?php  
/**  
* Template Name: Home  
*  
* @package patterns
*  
*/  
?>  
<?php get_header(); ?>

// !!!! READ ME PLEASE !!!!
// This php function MUST be put in your homepage/frontpage php file for your patterns to laod properly


<div class="home-page">
    <?php

        while ( have_posts() ) :
            the_post();
            
            get_template_part( 'template-parts/content', 'page' );
            
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            
        endwhile; // End of the loop.
    ?>

</div>


<?php get_footer();?> 