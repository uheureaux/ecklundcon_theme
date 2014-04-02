<?php get_header()?>

<div id="content">
    <div id="left">
        <div class="posts">   
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            by <a href="<?php the_author_posts_link()?>"><?php the_author()?></a> at <?php the_time(wp_o)?>
                <?php the_content('Click here for more!')?>
        </div>
    </div>
    <div id="right">
        <?php get_sidebar()?>      
    </div>
</div>

<?php get_footer()?>