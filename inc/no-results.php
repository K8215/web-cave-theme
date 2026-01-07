<h2>No results found...</h2>

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