<?php
/* Front Page Template */
    get_header();
?>

<div class="section" id="content">
<?php
    get_template_part( 'page-front', get_post_format());
?>
</div>
<?php get_footer(); ?>