<?php
/**
 * The template for displaying the project archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web_Cave
 */

get_header();
?>

<main id="main">

    <section id="hero" class="flex">
        <div class="container">
            <h1>Projects</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <?php get_template_part('inc/search-tags');?>

            <?php if ( have_posts() ) : ?>

            <div class="portfolio">
                <?php while (have_posts() ) : the_post(); ?>
                <div class="portfolio__card">
                    <a href="<?php the_permalink();?>" aria-label="Navigate to <?php the_title();?>">
                        <figure class="left-align">
                            <?php the_post_thumbnail();?>
                            <cite><?php the_title();?></cite>
                        </figure>
                    </a>
                </div>
                <?php endwhile;?>
            </div>
            <?php else : ?>
            <?php get_template_part('inc/no-results');?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();