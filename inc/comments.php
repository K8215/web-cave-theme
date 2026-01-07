<?php
		// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) : ?>
<section>
    <div class="container">
        <?php comments_template(); ?>
    </div>
</section>
<?php endif; ?>