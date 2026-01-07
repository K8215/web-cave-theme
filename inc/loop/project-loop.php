<?php
	global $post;
	$postid = $post->ID;
    if(is_front_page()) {
        $postsPer = 6;
    } else {
        $postsPer = 3;
    }

	$args = array(
		'post_type' => 'project',
		'posts_per_page' =>  $postsPer,
		'post__not_in' => array($postid)
	);

	$project_query = new WP_Query( $args );

    if ( $project_query -> have_posts() ) : ?>
<section>
    <div class="container">
        <h2>
            Latest Projects
        </h2>
        <hr>
        <div class="portfolio">
            <?php while ( $project_query -> have_posts() ) :
				$project_query -> the_post(); ?>
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
    </div>
</section>
<?php endif;?>