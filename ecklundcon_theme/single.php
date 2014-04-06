<?php get_header() ?>

<div id="content">
    <div id="single_entry">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div id="post_title">
            <h2><?php the_title()?></h2>
            <h4>Posted on <?php the_time('l F jS, Y')?> by <a href="<?php echo get_edit_user_link(); ?>"><?php the_author()?></a></h4>
        </div>
        <div id="post_content">
            <p><?php the_content()?></p>
        </div>
        <div id="post_footer">
            <p>Last edited on <?php the_modified_date('l F jS, Y g:i a') ?></p>
            <p id="post_tags"><?php the_tags()?></p>
            <span id="post_before"><?php previous_post_link(); ?></span>
            <?php next_post_link(); ?>
        </div>
           <?php endwhile;?>
        <?php endif;?>
    </div>
</div>

<?php get_footer() ?>