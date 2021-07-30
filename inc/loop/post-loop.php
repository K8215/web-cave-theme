<?php
	global $post;
	$postid = $post->ID;
    if(is_front_page()) {
        $catname = null;
        $postsPer = 6;
        $title = 'Latest';
    } else {
        $catarray = get_the_category( $postid );
        $catname = esc_html( $catarray[0]->name );
        $postsPer = 3;
        $title = 'Related';
    }	

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $postsPer,
		'category_name' => $catname,
		'post__not_in' => array($postid)
	);

	$post_query = new WP_Query( $args );

    if ( $post_query -> have_posts() ) : ?>
<section>
    <div class="container">
        <h2 class="glitch">
            <?php echo $title;?> Blogs
        </h2>
        <hr>
        <ul class="blog-list">
            <?php while ( $post_query -> have_posts() ) :
				$post_query -> the_post(); ?>
            <li class="blog-list__preview">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="blog-list__link">Read More <i
                            class="fas fa-angle-double-right"></i></a>
                </article>
            </li>
            <?php endwhile;?>
        </ul>
    </div>
</section>
<?php endif;?>