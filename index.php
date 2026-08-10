<?php 
// get_header(); 
?>

<!-- <main>

    <h1>Welcome to My First Custom Theme</h1>

    <?php

    // if (have_posts()) :

    //     the_title('<h2>', '</h2>');

    // else :

    //     echo "<p>No Posts Found</p>";

    // endif;

    ?>

</main> -->

<?php 
// get_footer(); 
?>


<!-- custom sidebar with widget -->


<?php get_header(); ?>

<main class="site-main">

    <h1>My Blog</h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>


            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
 
        <?php endwhile; ?>

        <!-- paginations -->
        <?php
            the_posts_pagination(
                array(
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →'
                )
            );
        ?>

    <?php else : ?>

        <p>No Posts Found</p>

    <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>