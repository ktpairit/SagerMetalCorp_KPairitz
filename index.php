<?php get_header(); ?>

<div class="main">
    <div class="row">
        <div class="twelve columns mainPic">
            <div class="my-slider" dir="rtl">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/metalFab.png" width="1000"></li>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/tc3.png" width="1000"></li>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/l2.png" width="1000"></li>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/mc1.png" width="1000"></li>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/welder.png" width="1000"></li>
                </ul>
                            <!-- Third we include jQuery -->
            <script src="//code.jquery.com/jquery-latest.min.js"></script>

            <!-- Speed up Slider
            <script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>
            --->

            <!-- Fourth we include the Unslider.js -->
            <script src="<?php echo get_template_directory_uri (); ?>/js/unslider.js"></script>

            </div>
        </div>
    </div>


        <div class="row customConveyors">
            <div class="twelve columns">
                <?php dynamic_sidebar('main-sidebar-sidebar'); ?>
                <!-- <button type="button"><a href="<?php // the_permalink(); ?>">Read More</a></button> -->
            </div>
        </div>

        <div class="row solutions">
            <div class="four columns">
                <?php dynamic_sidebar('left-sager-sidebar'); ?>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('middle-sager-sidebar'); ?>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('right-sager-sidebar'); ?>
            </div>
        </div>

        <div class="row worldDiv">
            <div class="six columns">
                <?php dynamic_sidebar('sager-world-image'); ?>
            </div>
            <div class="six columns worldWords">
                <?php dynamic_sidebar('sager-world'); ?>
            </div>
        </div>
</div>




</div> <!--End of Main section-->

<?php get_footer(); ?>