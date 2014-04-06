<?php get_header() ?>

<?php 
    $top_panel_page = get_page(52);
    $testimonial_page = get_page(66);
?>

<div id="content">
    <div id="top-panel">
        <div id="top-panel-pic" class="left"><?php ?></div>
        <div id="top-panel-info" class="right">
            <h2><?php echo $top_panel_page->post_title; ?></h2>
            <p><?php echo $top_panel_page->post_content; ?></p>
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
            <?php $count = 0; while( $count < 4 && have_posts()): the_post() ?>
                <div class="post">
                    <div class="post_thumbnail left"><?php the_post_thumbnail('130px', '130px')?></div>
                    <div class="post_content right">
                        <h3><a href="#"><?php the_title() ?></a></h3>
                        <h5 class="greytext"><?php the_time('F jS, Y') ?></h5>
                        <?php the_content('[continue reading]') ?>
                    </div>
                </div>
            <?php $count++; endwhile; ?>
            <!-- END LOOP -->
        </div>
        <div class="sidebar right">
            <div class="testimonials">
                <?php $testimonial_page ?>
                <h2><?php echo $testimonial_page->post_title; ?></h2>
                <?php 
                    $testimonials = get_post_meta($testimonial_page->ID, 'testimonial', false);
                    $i = 0;
                    foreach($testimonials as $testimonial) {
                        if($i < 3) {
                            echo '<p>'.$testimonial.'</p>';
                        }
                        $i++;
                    }
                ?>
                <div class="buttoncontainer">
                    <a href="<?php echo get_page_link($testimonials)?>"><div class="button">Read More</div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>