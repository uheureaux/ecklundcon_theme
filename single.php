<?php get_header()?>

<div class="posts">
    <?php while(have_posts()): the_post()?>     
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2> by <?php the_author()?> at <?php the_time()?>
        <?php the_content('Click here for more!')?>
    <?php endwhile;?>
</div>

<?php get_sidebar()?>
<?php get_footer()?>