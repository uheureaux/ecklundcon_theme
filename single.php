<?php get_header() ?>

<div id="content">
    <div id="single_entry">
        <?php IF(have_posts()) : while(have_posts()) : the_post(); ?>
        <div id="post_title">
            <h2><?php the_title()?></h2>
            <h4>Posted on <?php the_time('l F jS, Y')?> by <?php the_author()?></h4>
        </div>
        <div id="post_content">
            <p><?php the_content()?>.</p>
        </div>
        <div id="post_footer">
            <p><?php the_time('l F jS, Y') ?></p>
            <p><?php the_tags()?></p>
            <?php previous_post_link(); next_post_link(); ?>
        </div>
           <?php endwhile;?>
        <?php endif;?>
    </div>
</div>

<?php get_footer() ?>