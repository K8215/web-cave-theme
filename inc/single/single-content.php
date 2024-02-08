<?php if (has_post_thumbnail( $post->ID ) ): ?>
<figure class="single-thumbnail">
    <?php the_post_thumbnail();?>
</figure>
<?php else : endif;?>

<?php the_content();?>