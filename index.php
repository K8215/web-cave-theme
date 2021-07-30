<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
            <h1 class="glitch">Blog</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <?php get_template_part('inc/search-tags');?>

            <?php if ( have_posts() ) : ?>
            <ul class="blog-list">
                <?php while ( have_posts() ) : the_post(); ?>
                <li class="blog-list__preview">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="blog-list__link">Read More <i
                                class="fas fa-angle-double-right"></i></a>
                    </article>
                </li>
                <?php endwhile;
				the_posts_navigation();
				?>
            </ul>

            <?php else : ?>
            <?php get_template_part('inc/no-results');?>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();