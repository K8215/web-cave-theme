<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Web_Cave
 */

get_header();
?>

<main id="main">
    <section id="hero" class="flex text-center">
        <div class="container">
            <h1 class="glitch">
                <?php esc_html_e( '404: Not Found', 'web-cave' ); ?>
            </h1>
        </div>
    </section>

    <section>
        <div class="container">
            <?php echo get_search_form();?>

            <?php the_widget( 'WP_Widget_Recent_Posts' );?>

            <div class="widget">
                <h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'web-cave' ); ?></h3>
                <ul>
                    <?php
				    wp_list_categories(
					    array(
						    'orderby'    => 'count',
						    'order'      => 'DESC',
						    'show_count' => 1,
						    'title_li'   => '',
						    'number'     => 10,
					    )
				    );
				    ?>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();