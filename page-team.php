<?php
/*
Template Name: Page Team
*/
get_header(); ?>

<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');

    ?>

        <div class="team_sec1 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="wrap">
                            <?php if ($title) : ?>
                                <div class="global_title sub_global_title wow fadeInLeft " data-wow-delay="0.5s" data-wow-duration="0.6s">
                                    <h2 class="line1"> <?php echo $title ?> </h2>

                                </div>
                            <?php endif; ?>

                            <?php if ($text) : ?>
                                <div class="text wow fadeInLeft " data-wow-delay="0.6s" data-wow-duration="0.6s">
                                    <?php echo $text ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>




<?php if (have_rows('content_2')) : ?>
    <?php while (have_rows('content_2')) : the_row();
        $scroll_text = get_sub_field('scroll_text');

    ?>
        <div class="home_sec2 team_sec2 ">

            <div class="scrolling_text">
                <div class="text_to_scroll">
                    <?php if ($scroll_text) : ?>
                        <h2 class="marquee1"><?php echo $scroll_text ?></h2>
                </div>
            <?php endif; ?>

            </div>

        </div>

    <?php endwhile; ?>
<?php endif; ?>

<script type="text/javascript">
    $(function() {
        var speed_text;
        if ($(window).width() < 991) {
            speed_text = 300;
        } else {
            speed_text = 300;
        }
        console.log(speed_text)
        $('.marquee1').marquee({
            gap: 50,
            duplicated: true,
            speed: speed_text,

        });
    });
</script>

<?php if (have_rows('content_3')) : ?>
    <?php while (have_rows('content_3')) : the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');

    ?>
        <div class="team_sec3">
            <div class="container">
                <div class="row">

                    <?php if (have_rows('team_box')) : ?>
                        <?php while (have_rows('team_box')) : the_row();
                            $video = get_sub_field('video');
                            $image = get_sub_field('image');

                            $name = get_sub_field('name');
                            $function = get_sub_field('function');

                        ?>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">

                                <div class="box_wrap">

                                    <?php if ($video) : ?>
                                        <div class="video-wrap">
                                            <video disableRemotePlayback loop playsinline muted autoplay="">
                                                <source src="<?php echo $video ?>" type="video/mp4">
                                            </video>
                                        </div>

                                    <?php else : ?>

                                        <div class="image_wrap1" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);"></div>
                                    <?php endif; ?>

                                    <div class="overlay_wrap"></div>

                                    <div class="content">
                                        <div class="image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage_Team/signet-red.svg" alt="">

                                        </div>
                                        <?php if ($name) : ?>
                                            <div class="name"><?php echo $name ?></div>
                                        <?php endif; ?>

                                        <?php if ($function) : ?>
                                            <div class="function"><?php echo $function ?></div>
                                        <?php endif; ?>

                                        <?php
                                        $link = get_sub_field('email');
                                        if ($link) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>



                                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>


                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>




                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('content_4')) : ?>
    <?php while (have_rows('content_4')) : the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $image = get_sub_field('image');

    ?>
        <div class="team_sec1 team_sec4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wrap">
                            <?php if ($title) : ?>
                                <div class="global_title sub_global_title wow fadeInLeft " data-wow-delay="0.5s" data-wow-duration="0.6s">
                                    <h2 class="line1"><?php echo $title ?> </h2>

                                </div>
                            <?php endif; ?>

                            <?php if ($text) : ?>
                                <div class="text wow fadeInLeft " data-wow-delay="0.6s" data-wow-duration="0.6s">
                                    <?php echo $text ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <?php if ($image) : ?>
                            <div class="image_wrap wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>