<?php
/* Template Name:  Template About Page */
    get_header();
?>

<div class="section" id="content">
    <div>
        <hr class="hr-half hr">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>