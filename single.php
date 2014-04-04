<?php get_header() ?>

<div id="content">
    <div id="single_entry">
        <?php IF(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><?php the_title()?></h2>
        <p><h4>by <?php the_author()?></h4>.</p>
        <div id="post_content"><p><?php the_content()?>.</p></div>
        <p id="post_date"><?php the_time('l F jS, Y h:i:s A') ?></p>
        <p><a class="post_tags"><?php the_tags()?></a></p>
        <?php previous_post_link(); next_post_link(); ?>
           <?php endwhile;?>
        <?php endif;?>
    </div>
</div>

<?php get_footer() ?>