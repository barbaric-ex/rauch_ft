<?php
/*
Template Name: Page Druckguss
*/
get_header(); ?>

<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $background_image = get_sub_field('background_image');
        $small_title = get_sub_field('small_title');

        $big_title = get_sub_field('big_title');
        $text = get_sub_field('text');

        $dropdown_title_1 = get_sub_field('dropdown_title_1');
        $dropdown_text_1 = get_sub_field('dropdown_text_1');

        $dropdown_title_2 = get_sub_field('dropdown_title_2');
        $dropdown_text_2 = get_sub_field('dropdown_text_2');

        $dropdown_title_3 = get_sub_field('dropdown_title_3');
        $dropdown_text_3 = get_sub_field('dropdown_text_3');

    ?>

        <div class="home_sec1 druck_sec1" <?php if ($background_image) : ?> style="background-image: url(<?php echo $background_image['sizes']['large']; ?>);" <?php endif; ?>>


            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="wrapper">


                            <?php if ($big_title) : ?>
                                <div class="title_wrap wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                    <h2 class="line line1"><?php echo $big_title ?></h2>
                                </div>
                            <?php endif; ?>


                            <div class="content_wrap">
                                <div class="btn_standard wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                    <?php
                                    $link = get_sub_field('link');
                                    if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>



                                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php if ($text) : ?>
                                    <div class="text wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                        <p><?php echo $text ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="wrapper2">


                            <div class="accordion_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                <div class="title_wrap">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/button-drop-down-text.svg" alt="">
                                    </div>
                                    <?php if ($dropdown_title_1) : ?>
                                        <div class="title">
                                            <?php echo $dropdown_title_1 ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <?php if ($dropdown_text_1) : ?>
                                    <div class="content_text">
                                        <?php echo $dropdown_text_1 ?>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <div class="accordion_item accordion_item2 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                <div class="title_wrap">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/button-drop-down-text.svg" alt="">
                                    </div>
                                    <?php if ($dropdown_title_2) : ?>
                                        <div class="title">
                                            <?php echo $dropdown_title_2 ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <?php if ($dropdown_text_2) : ?>
                                    <div class="content_text">
                                        <?php echo $dropdown_text_2 ?>
                                    </div>
                                <?php endif; ?>

                            </div>


                            <div class="accordion_item accordion_item3 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                <div class="title_wrap">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/button-drop-down-text.svg" alt="">
                                    </div>
                                    <?php if ($dropdown_title_3) : ?>
                                        <div class="title">
                                            <?php echo $dropdown_title_3 ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <?php if ($dropdown_text_3) : ?>
                                    <div class="content_text">
                                        <?php echo $dropdown_text_3 ?>
                                    </div>
                                <?php endif; ?>

                            </div>


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
        $background_image = get_sub_field('background_image');
        $title = get_sub_field('title');
        $text = get_sub_field('text');

    ?>

        <div class="mega_section_wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/mesh.svg);">

            <!-- <div class="abs_dot_image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/mes2.png" alt="">

    </div> -->



            <div class="home_sec2 team_sec2 druke_sec2 ">

                <div class="scrolling_text">
                    <div class="text_to_scroll">
                        <?php if ($scroll_text) : ?>
                            <h2 class="marquee1"><?php echo $scroll_text ?></h2>
                    </div>
                <?php endif; ?>

                </div>

            </div>





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


            <div class="druke_sec3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="wrap">
                                <?php if ($title) : ?>
                                    <div class="global_title wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <h2><?php echo $title ?></h2>
                                    </div>
                                <?php endif; ?>


                                <?php if ($text) : ?>
                                    <div class="text wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                        <?php echo $text ?>
                                    </div>
                                <?php endif; ?>


                                <div class="btns_wrap">
                                    <div class="arr_brn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <?php
                                        $link = get_sub_field('link_1');
                                        if ($link) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>



                                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="arr_brn arr_btn2 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                        <?php
                                        $link = get_sub_field('link_2');
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
                        </div>
                    </div>
                </div>
            </div>



        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>