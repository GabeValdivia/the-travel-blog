<?php get_header(); ?>

    <h2 class="text-center">Latest Enteries</h2>
    <section class="container content">
        <div class="row">
            <?php $args= array(
                'posts_per_page' => 6
            ); ?>

            <?php $entries = new WP_Query($args); while($entries->have_posts() ): $entries->the_post(); ?>

                <h1><?php the_title(); ?></h1>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>

<?php get_footer(); ?>