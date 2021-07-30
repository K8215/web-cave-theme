<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Web_Cave
 */

get_header();
?>

<main id="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section id="hero" class="flex">
            <div class="container">
                <h1 class="glitch"><?php the_title();?></h1>
                <div class="meta">Category:<?php the_category();?> | Posted on:<?php the_date();?></div>
            </div>
        </section>

        <section>
            <div class="container">
                <?php get_template_part('inc/single/single-content');?>

                <?php get_template_part('inc/single/single-footer');?>
            </div>
        </section>
    </article>

    <?php get_template_part('inc/comments');?>

    <?php get_template_part('inc/loop/post-loop');?>

    <?php endwhile; ?>
</main>

<?php
get_footer();