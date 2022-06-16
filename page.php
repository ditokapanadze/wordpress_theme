<?php
/**
 * Template for dispalying all the pages.
 */
get_header();
?>
<div id="primary" class="content-area container">
    <main id="main" class="site-main">
        <?php
     while ( have_posts() ) :
             the_post();
            get_template_part( 'template-parts/page/content', 'page' );
    
             if ( comments_open() || get_comments_number() ) :
                 comments_template();
            endif;
         endwhile;
        ?>
    </main>
</div>
<?php
get_footer();