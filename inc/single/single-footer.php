<div class="tags">
    <?php the_tags();?>
</div>

<?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'web-cave' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'web-cave' ) . '</span> <span class="nav-title">%title</span>',
				)
			);?>