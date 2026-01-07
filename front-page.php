<?php
/**
 * The front page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web_Cave
 */

get_header();
?>

<main id="main">
    <section id="home-hero" class="flex text-center">
        <div class="container">
            <h1 class="glitch">
                <?php the_title();?>
            </h1>
        </div>
    </section>

    <?php get_template_part('inc/loop/project-loop');?>

    <?php get_template_part('inc/loop/post-loop');?>
</main>

<?php
get_footer();