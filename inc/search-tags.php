<?php get_search_form();?>
<div class="tags alt-margin">
    Tags:
    <?php
        $tags = get_tags();
        foreach ( $tags as $tag ) :
        $tag_link = get_tag_link( $tag->term_id );
    ?>
    <a href='<?php echo $tag_link; ?>' title='<?php echo $tag->name; ?>'
        class='<?php echo $tag->slug ?>'><?php echo $tag->name ?></a>
    <?php
        endforeach;
    ?>
</div>