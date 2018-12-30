<?php
/* Template Name: Template Archive Project Content */
get_header();
?>    
    <div class="section" id="content">

            <?php
                $args = array( 'post_type' => 'project', 'posts_per_page' => 20 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $id = get_the_ID();
                ?>

                <div class="about-project">
                    <a href="<?php echo get_post_permalink($id)?>"><div class="about-project">
                           
                            <h2 class="project-title"><?php the_title(); ?></h2></a>
                            <?php the_content(); ?>
                    </div>                           
                    </div>

            <?php
                endwhile;
            ?>
   </div>
<?php get_footer(); ?>