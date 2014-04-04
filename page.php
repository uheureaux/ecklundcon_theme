<?php get_header() ?>

<div id="content">
    <div id="posts">
        <?php while(have_posts()): the_post() ?>
        <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        <p><?php the_content()?></p>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer() ?>