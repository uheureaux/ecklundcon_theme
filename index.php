<?php get_header() ?>

<div id="content">   
    <div class="left">
        <div class="posts">
            <!-- START POST LOOP -->
            <?php while(have_posts()): the_post() ?>     
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2> by <?php the_author() ?> at <?php the_time() ?>
                <?php the_content('Click here for more!') ?>
            <?php endwhile; ?>
            <!-- END LOOP -->
        </div>       
    </div>  
    <div class="right">
        <?php dynamic_sidebar('recent_posts') ?>
    </div>
</div>

<?php get_footer() ?>