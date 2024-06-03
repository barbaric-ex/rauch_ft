<?php
/*
Template Name: Page Home
*/
get_header(); ?>

<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $background_video = get_sub_field('background_video');
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


        <div class="home_sec1">
            <?php if ($background_video) : ?>
                <div class="video-wrap">
                    <video disableRemotePlayback loop playsinline muted autoplay="">
                        <source src="<?php echo $background_video ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif; ?>


            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="wrapper">
                            <?php if ($small_title) : ?>
                                <div class="small_text wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                    <h3 class="line line1"><?php echo $small_title ?></h2>

                                </div>
                            <?php endif; ?>

                            <?php if ($big_title) : ?>
                                <div class="title_wrap wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                    <h2 class="line line1"><?php echo $big_title ?></h2>
                                </div>
                            <?php endif; ?>


                            <div class="content_wrap wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                <div class="btn_standard">
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
                                    <div class="text">
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

        $scrolling_text = get_sub_field('scrolling_text');

    ?>

        <div class="home_sec2">

            <div class="scrolling_text">
                <div class="text_to_scroll">
                    <?php if ($scrolling_text) : ?>
                        <h2 class="marquee1"><?php echo $scrolling_text ?></h2>
                    <?php endif; ?>

                </div>
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

    <?php endwhile; ?>
<?php endif; ?>



<?php if (have_rows('content_3')) : ?>
    <?php while (have_rows('content_3')) : the_row();

        $main_title = get_sub_field('main_title');
        $title_1 = get_sub_field('title_1');
        $text_1 = get_sub_field('text_1');
        $title_2 = get_sub_field('title_2');
        $text_2 = get_sub_field('text_2');
        $title_3 = get_sub_field('title_3');
        $text_3 = get_sub_field('text_3');
        $title_4 = get_sub_field('title_4');
        $text_4 = get_sub_field('text_4');
        $title_5 = get_sub_field('title_5');
        $text_5 = get_sub_field('text_5');
        $video = get_sub_field('video');

    ?>

        <div class="home_sec3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper">




                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-pic.jpg" alt="">

                            </div>
                            <div class="line">
                                <div class="inner_red"></div>
                            </div>

                            <?php if ($main_title) : ?>

                                <div class="global_title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                    <h2 class="line1">How We Can <span>Help You</span></h2>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <?php
                        $link = get_sub_field('link_1');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>



                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <div class="wrap ">
                                    <div class="line">
                                        <div class="inner_red"></div>
                                    </div>

                                    <div class="number_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <div class="number">01</div>
                                    </div>

                                    <div class="text_wrap">
                                        <?php if ($title_1) : ?>

                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h3><?php echo $title_1 ?></h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($text_1) : ?>

                                            <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <p><?php echo $text_1 ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </a>
                        <?php endif; ?>

                    </div>


                    <div class="col-lg-6">
                        <?php
                        $link = get_sub_field('link_2');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>



                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <div class="wrap">
                                    <div class="line">
                                        <div class="inner_red"></div>
                                    </div>

                                    <div class="number_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <div class="number">02</div>
                                    </div>

                                    <div class="text_wrap">
                                        <?php if ($title_2) : ?>

                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h3><?php echo $title_2 ?></h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($text_2) : ?>

                                            <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <p><?php echo $text_2 ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </a>
                        <?php endif; ?>

                    </div>


                    <div class="col-lg-6">
                        <?php
                        $link = get_sub_field('link_3');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>



                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <div class="wrap">
                                    <div class="line">
                                        <div class="inner_red"></div>
                                    </div>

                                    <div class="number_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <div class="number">03</div>
                                    </div>

                                    <div class="text_wrap">
                                        <?php if ($title_3) : ?>

                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h3><?php echo $title_3 ?></h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($text_3) : ?>

                                            <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <p><?php echo $text_3 ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </a>
                        <?php endif; ?>

                    </div>


                    <div class="col-lg-6">
                        <?php
                        $link = get_sub_field('link_4');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>



                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <div class="wrap">
                                    <div class="line">
                                        <div class="inner_red"></div>
                                    </div>

                                    <div class="number_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <div class="number">04</div>
                                    </div>

                                    <div class="text_wrap">
                                        <?php if ($title_4) : ?>

                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h3><?php echo $title_4 ?></h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($text_4) : ?>

                                            <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <p><?php echo $text_4 ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </a>
                        <?php endif; ?>

                    </div>

                    <div class="col-lg-6">
                        <?php
                        $link = get_sub_field('link_5');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>



                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <div class="wrap">
                                    <div class="line">
                                        <div class="inner_red"></div>
                                    </div>

                                    <div class="number_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <div class="number">05</div>
                                    </div>

                                    <div class="text_wrap">
                                        <?php if ($title_5) : ?>

                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h3><?php echo $title_5 ?></h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($text_5) : ?>

                                            <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <p><?php echo $text_5 ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </a>
                        <?php endif; ?>

                    </div>


                    <div class="col-lg-6">
                        <div class="wrap wrap_video">
                            <?php if ($video) : ?>
                                <div class="video-wrap wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                    <video disableRemotePlayback loop playsinline muted autoplay="">
                                        <source src="<?php echo $video ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php endif; ?>


                        </div>
                    </div>



                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('content_4')) : ?>
    <?php while (have_rows('content_4')) : the_row();

        $main_title = get_sub_field('main_title');



    ?>

        <div class="home_sec4">
            <div class="container">

                <div class="wrapp1">
                    <div class="arows_wrap">
                        <div class="arrow arrow1">Prev</div>
                        <div class="arrow arrow2">Next</div>
                    </div>

                    <?php if ($main_title) : ?>
                        <div class="global_title">
                            <h2 class="line1"><?php echo $main_title ?></h2>
                        </div>
                    <?php endif; ?>


                </div>

                <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                    <div class="owl-carousel image_slider1 owl-theme">

                        <?php if (have_rows('slider_box')) : ?>
                            <?php while (have_rows('slider_box')) : the_row();

                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $subtitle = get_sub_field('subtitle');
                                $text = get_sub_field('text');



                            ?>

                                <div class="item_box">
                                    <?php if ($image) : ?>

                                        <div class="image">
                                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                        </div>
                                    <?php endif; ?>


                                    <div class="content">
                                        <div class="title">
                                            <?php if ($title) : ?>
                                                <h2><?php echo $title ?></h2>
                                            <?php endif; ?>


                                            <?php if ($subtitle) : ?>
                                                <h3><?php echo $subtitle ?></h3>
                                            <?php endif; ?>

                                        </div>
                                        <?php if ($text) : ?>
                                            <div class="text">
                                                <?php echo $text ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    </div>

                </div>



            </div>
        </div>

        <script>
            $(window).on('load', function() {
                let owl2 = $('.owl-carousel.image_slider1').owlCarousel({

                    dots: true,
                    loop: true,
                    autoplay: true,
                    margin: 50,
                    autoWidth: true,



                });

                $('.home_sec4 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                    owl2.trigger('prev.owl.carousel');
                })
                $('.home_sec4 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                    owl2.trigger('next.owl.carousel');
                })
            });
        </script>



        <div class="home_sec5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper">
                            <div class="arr_brn wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.6s">
                                <?php
                                $link = get_sub_field('link_button_1');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>



                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="btn_standard wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                <?php
                                $link = get_sub_field('link_button_2');
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
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('content_5')) : ?>
    <?php while (have_rows('content_5')) : the_row();

        $subtitle_main = get_sub_field('subtitle_main');
        $title_main = get_sub_field('title_main');
        $background_video = get_sub_field('background_video');
        $map_image = get_sub_field('map_image');


    ?>

        <div class="home_sec6">

            <?php if ($background_video) : ?>

                <div class="video-wrap">
                    <video disableRemotePlayback loop playsinline muted autoplay="">
                        <source src="<?php echo $background_video ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif; ?>


            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_wrap">
                            <?php if ($subtitle_main) : ?>

                                <div class="subtitle wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                    <h3><?php echo $subtitle_main ?></h3>
                                </div>
                            <?php endif; ?>

                            <?php if ($title_main) : ?>

                                <div class="global_title wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                    <h2 class="line1"><?php echo $title_main ?></span></h2>
                                </div>
                            <?php endif; ?>



                        </div>
                    </div>


                    <?php if (have_rows('content_box')) : ?>
                        <?php while (have_rows('content_box')) : the_row();

                            $title = get_sub_field('title');
                            $text = get_sub_field('text');


                        ?>

                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                <div class="wrap">
                                    <?php if ($title) : ?>

                                        <div class="title">
                                            <h2><?php echo $title ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>

                                        <div class="text">
                                            <?php echo $text ?>
                                        </div>
                                    <?php endif; ?>


                                    <div class="button_wrapper">
                                        <a href="#">mehr erfahren</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>









                    <div class="col-lg-12">

                        <div id="year_slider_wrap" class="year_slider_wrap">
                            <div class="owl-carousel year_slider owl-theme">

                                <?php if (have_rows('year_slider_box')) : ?>
                                    <?php while (have_rows('year_slider_box')) : the_row();

                                        $title = get_sub_field('title');
                                        $text = get_sub_field('text');
                                        $year = get_sub_field('year');


                                    ?>
                                        <div class="year" data-text="<?php echo $text ?>" data-title="<?php echo $title ?>">
                                            <?php echo $year ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>


                            </div>
                        </div>


                    </div>


                    <script>
                        $(window).on('load', function() {
                            var $owl2 = $('.owl-carousel.year_slider');
                            $owl2.children().each(function(index) {
                                $(this).attr('data-position', index); // NB: .attr() instead of .data()
                            });

                            let owl2 = $('.owl-carousel.year_slider').owlCarousel({
                                loop: true,
                                nav: false,
                                center: true,
                                dots: false,

                                autoplay: true,
                                autoWidth: true,
                                autoplaySpeed: 1000,
                                autoplayTimeout: 3500,
                                margin: 50,
                                smartSpeed: 1500,
                                autoplayHoverPause: false,
                                responsive: {
                                    0: {
                                        items: 1,
                                    },
                                    600: {
                                        items: 4,
                                    },
                                    1000: {
                                        items: 8,
                                    }
                                }
                            });



                            // Function to update the text based on the current item
                            function updateText() {
                                var year = $('.owl-carousel.year_slider .owl-item.center .year');


                                var titleText = year.data('title');
                                var mainText = year.data('text');

                                // Add hide class to all .year elements
                                $(".year").addClass("hide");

                                setTimeout(function() {
                                    // Update the title and text
                                    $(".home_sec6 .year_text_wrap .title_wrap h3").text(titleText);
                                    $(".home_sec6 .year_text_wrap .text_wrap .text").html(mainText);

                                    // Remove hide class from the current year
                                    year.removeClass("hide");
                                }, 400);
                            }

                            // Initial update
                            updateText();

                            // Update on change
                            owl2.on('changed.owl.carousel', function(event) {
                                updateText();
                            });

                            // Update on click
                            $('.year').on('click', function() {
                                updateText();
                            });


                            $(document).on('click', '.owl-item>div', function() {

                                $owl2.trigger('to.owl.carousel', [$(this).data('position'), 500]);
                            });
                        });
                    </script>

                    <div class="col-lg-12">
                        <div class="year_text_wrap">
                            <div class="title_wrap">

                                <h3></h3>

                            </div>

                            <div class="text_wrap">
                                <div class="text">
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>



                    <?php $i = 1;
                    if (have_rows('line_number_box')) : ?>
                        <?php while (have_rows('line_number_box')) : the_row();

                            $title = get_sub_field('title');
                            $number = get_sub_field('number');



                        ?>
                            <div class="col-lg-3 ">
                                <div class="wrap_line">
                                    <div class="title">
                                        <h2><?php echo $title ?></h2>
                                    </div>

                                    <div class="number">
                                        <?php echo $number ?>
                                    </div>

                                    <div class="line">
                                        <div class="red<?php echo $i; ?>">
                                            <div class="red_line ">
                                                <div class="circle_top"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif; ?>




                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            function isInViewport(element) {
                                const rect = element.getBoundingClientRect();
                                return (
                                    rect.top >= 0 &&
                                    rect.left >= 0 &&
                                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                                );
                            }

                            function handleScroll() {
                                const wrapLineElements = document.querySelectorAll('.wrap_line');
                                wrapLineElements.forEach(function(element) {
                                    if (isInViewport(element)) {
                                        const redLine = element.querySelector('.red_line');
                                        if (redLine) {
                                            redLine.style.width = '100%';
                                        }
                                    }
                                });
                            }

                            window.addEventListener('scroll', handleScroll);

                            // Call the function once to check if any elements are already in the viewport on load
                            handleScroll();
                        });
                    </script>

                    <div class="col-lg-12">
                        <div class="wrapper_btnn">
                            <div class="btn_standard wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                <?php
                                $link = get_sub_field('link');
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




        <div class="home_map_sec">
            <?php if ($map_image) : ?>
                <div class="image">
                    <img src="<?php echo $map_image['sizes']['large']; ?>" alt="">

                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('content_6')) : ?>
    <?php while (have_rows('content_6')) : the_row();

        $video = get_sub_field('video');


    ?>

        <div class="home_video_sec">
            <?php if ($video) : ?>
                <div class="video-wrap">
                    <video disableRemotePlayback loop playsinline muted autoplay="">
                        <source src="<?php echo $video ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif; ?>

        </div>

    <?php endwhile; ?>
<?php endif; ?>




<?php if (have_rows('content_7')) : ?>
    <?php while (have_rows('content_7')) : the_row();

        $subtitle = get_sub_field('subtitle');
        $title = get_sub_field('title');


    ?>

        <div class="home_sec4 home_last_slider">
            <div class="container">

                <div class="wrapp1">
                    <div class="arows_wrap">
                        <div class="arrow arrow1">Prev</div>
                        <div class="arrow arrow2">Next</div>
                    </div>

                    <?php if ($subtitle) : ?>

                        <div class="subtitle wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <h3><?php echo $subtitle ?></h3>
                        </div>
                    <?php endif; ?>


                    <?php if ($title) : ?>

                        <div class="global_title wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                            <h2 class="line1"><?php echo $title ?></h2>

                        </div>
                    <?php endif; ?>


                </div>

                <div class="slider_wrap wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                    <div class="owl-carousel image_slider2 owl-theme">
                        <?php if (have_rows('client_repeter_box')) : ?>
                            <?php while (have_rows('client_repeter_box')) : the_row();

                                $text = get_sub_field('text');
                                $image = get_sub_field('image');

                                $name = get_sub_field('name');
                                $function = get_sub_field('function');


                            ?>
                                <div class="item_box">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                                    </div>


                                    <div class="content">

                                        <?php if ($text) : ?>
                                            <div class="text">
                                                <p><?php echo $text ?></p>
                                            </div>
                                        <?php endif; ?>


                                        <div class="person_wrap">
                                            <?php if ($image) : ?>
                                                <div class="image">
                                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">

                                                </div>
                                            <?php endif; ?>

                                            <div class="name_wrap">
                                                <?php if ($name) : ?>
                                                    <div class="name"><?php echo $name ?></div>
                                                <?php endif; ?>

                                                <?php if ($function) : ?>

                                                    <div class="function"><?php echo $function ?></div>
                                                <?php endif; ?>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>










                    </div>

                </div>



            </div>
        </div>

        <script>
            $(window).on('load', function() {
                let owl2 = $('.owl-carousel.image_slider2').owlCarousel({

                    dots: true,
                    loop: true,
                    margin: 70,
                    autoplay: true,
                    autoWidth: true,



                });

                $('.home_sec4 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                    owl2.trigger('prev.owl.carousel');
                })
                $('.home_sec4 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                    owl2.trigger('next.owl.carousel');
                })
            });
        </script>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('content_8')) : ?>
    <?php while (have_rows('content_8')) : the_row();

        $subtitle = get_sub_field('subtitle');
        $title = get_sub_field('title');

        $video = get_sub_field('video');
        $text = get_sub_field('text');


    ?>
        <div class="home_sec7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapp1">
                            <?php if ($subtitle) : ?>

                                <div class="subtitle wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                    <h3><?php echo $subtitle ?></h3>
                                </div>
                            <?php endif; ?>


                            <?php if ($title) : ?>

                                <div class="global_title wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                    <h2 class="line1"><?php echo $title ?></h2>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="wrapp2">
                            <?php if ($video) : ?>

                                <div class="video-wrap">
                                    <video disableRemotePlayback loop playsinline muted autoplay="">
                                        <source src="<?php echo $video ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php endif; ?>


                            <div class="content_box">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-team-red-mark.svg" alt="">

                                </div>
                                <?php if ($text) : ?>

                                    <div class="text wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                        <p><?php echo $text ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="home_sec8">
            <div class="container">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="arr_brn wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <?php
                            $link = get_sub_field('link');
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

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>