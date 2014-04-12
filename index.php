<?php get_header() ?>

<?php 
<<<<<<< HEAD
    $top_panel_page = get_page(28);
    $testimonial_page = get_page(30);
=======
    //Page ID storage. Insert the correct page IDs for best results.
    $top_panel_page = get_page(52);
    $testimonial_page = get_page(66);
    $thebook_page = get_page(72);
    
    /******** BUTTON TEXT RETRIEVAL ********/
    $button_text = get_post_meta($top_panel_page->ID, 'button text', false);
    $i = 0;
    foreach($button_text as $text) {
        if($i < 1) {
            $top_panel_button = $text;
        }
        $i++;
    }
    
    $button_text = get_post_meta($testimonial_page->ID, 'button text', false);
    $i = 0;
    foreach($button_text as $text) {
        if($i < 1) {
            $testimonial_button = $text;
        }
        $i++;
    }
    
    $button_text = get_post_meta($thebook_page->ID, 'button text', false);
    $i = 0;
    foreach($button_text as $text) {
        if($i < 1) {
            $thebook_button = $text;
        }
        $i++;
    } 
>>>>>>> 3390d2f47779391191023581bfd2ad71faea9b20
?>

<div id="content">
    <div id="top-panel">
        <div id="top-panel-thumbnail" class="left">
            <?php
                if(has_post_thumbnail($top_panel_page->ID)) {
                    the_post_thumbnail('200px', '200px');
                }
                else {
                    echo '<div id="default_thumbnail_200x200"></div>';
                }
            ?>
        </div>
        <div id="top-panel-info" class="right">
            <h2><?php echo $top_panel_page->post_title; ?></h2>
            <p><?php echo $top_panel_page->post_content; ?></p>
            <div class="buttoncontainer">
                <a href="#">
                    <div class="button"><?php echo $top_panel_button ?></div>
                </a>
            </div>
        </div>
    </div>
    <div id="bottom-panel">
        <div id="latest_blog_posts" class="left">
            <h2>Latest Blog Posts</h2>
            <!-- START POSTS LOOP -->
            <?php $i = 0; while( $i < 4 && have_posts()): the_post() ?>
                <div class="post">
                    <div class="post_thumbnail left">
                        <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('130px', '130px');
                            }
                            else {
                                echo '<div id="default_thumbnail"></div>';
                            }
                            ?>
                    </div>
                    <div class="post_content right">
                        <h3><a href="#"><?php the_title() ?></a></h3>
                        <h5 class="greytext"><?php the_time('F jS, Y') ?></h5>
                        <?php the_content('[continue reading]') ?>
                    </div>
                </div>
            <?php $i++; endwhile; ?>
            <!-- END LOOP -->
            <div class="buttoncontainer">
                <a href="#"><div class="button">View All Posts</div></a>
            </div>
        </div>
        <div class="sidebar right">
            <div class="testimonials">
                <h2><?php echo $testimonial_page->post_title; ?></h2>
                <?php 
                    $testimonials = get_post_meta($testimonial_page->ID, 'testimonial', false);
                    $i = 0;
                    foreach($testimonials as $testimonial) {
                        if($i < 3) {
                            echo '<p class="testimonial">'.$testimonial.'</p>';
                        }
                        $i++;
                    }
                ?>
                <div class="buttoncontainer">
                    <a href="<?php echo get_page_link($testimonial_page)?>"><div class="button"><?php echo $testimonial_button ?></div></a>
                </div>
            </div>
            <div class="thebook">

                <div id="thebook_thumbnail_container">
                    <h2><?php echo $thebook_page->post_title; ?></h2>
                    <div id="thebook_thumbnail">
                        <?php    
                            if(has_post_thumbnail($thebook_page->ID)) {
                                the_post_thumbnail('130px', '130px');
                            }
                            else {
                                echo '<div id="default_thumbnail"></div>';
                            }
                        ?>
                    </div>
                </div>
                <p><?php echo $thebook_page->post_content; ?></p>
                <?php 
                    $thebook_testimonials = get_post_meta($thebook_page->ID, 'testimonial', false);
                    $i = 0;
                    foreach($thebook_testimonials as $testimonial) {
                        if($i < 1) {
                            echo '<p class="testimonial">'.$testimonial.'</p>';
                        }
                        $i++;
                    }
                ?>
                <div class="buttoncontainer">
                    <a href="#"><div class="button"><?php echo $thebook_button ?></div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>