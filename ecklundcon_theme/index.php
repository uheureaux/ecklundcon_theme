<?php get_header() ?>

<div id="content">   
    <div id="top-panel">
        <?php $page_52 = get_page(52);?>
        <div id="top-panel-pic" class="left"><?php ?></div>
        <div id="top-panel-info" class="right">
            <h2><?php echo $page_52->post_title ?></h2>
            <p><?php echo $page_52->post_content; ?></p>
            <div class="buttoncontainer">
                <a href="#">
                    <div class="button">Call to Action</div>
                </a>
            </div>
        </div>            
    </div>
    <div id="bottom-panel">
        <div id="latest_blog_posts" class="left">
            <h2>Latest Blog Posts</h2>
            <!-- START POSTS LOOP -->
            <?php 
                $count = 0;
                while( $count < 4 && have_posts()): the_post() ?>
                <div class="post">
                    <div class="post_thumbnail left"><?php the_post_thumbnail('130px', '130px')?></div>
                    <div class="post_content right">
                        <h3><a href="#"><?php the_title() ?></a></h3>
                        <h5><?php the_time('F jS, Y') ?></h5>
                        <p><?php the_content('[continue reading]') ?></p>
                    </div>
                </div>
            <?php 
                $count++;
                endwhile; 
            ?>
            <!-- END LOOP -->
        </div>
    </div>
</div>

<?php get_footer() ?>