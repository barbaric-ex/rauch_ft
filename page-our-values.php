<?php
/*
Template Name: Page Our values
*/
get_header(); ?>

<div class="sub_big_wrapper " style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/mesh_main.png);">
    <?php if (have_rows('content_1')) : ?>
        <?php while (have_rows('content_1')) : the_row();
            $title = get_sub_field('title');
            $text = get_sub_field('text');

        ?>

            <div class="team_sec1 benefit_sec1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="wrap">
                                <?php if ($title) : ?>
                                    <div class="global_title sub_global_title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                        <h2 class="line1"> <?php echo $title ?> </h2>

                                    </div>
                                <?php endif; ?>

                                <?php if ($text) : ?>
                                    <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
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


        ?>
            <div class="benefits_sec2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="accord_mega_wrap">
                                <div class="part2 part">

                                    <?php if (have_rows('dropdown_text_box_1')) : ?>
                                        <?php while (have_rows('dropdown_text_box_1')) : the_row();
                                            $title = get_sub_field('title');
                                            $text = get_sub_field('text');

                                        ?>
                                            <div class="accordion_wrap wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <div class="title">

                                                    <div class="icone_wrap">
                                                        <div class="icone icone1">
                                                            <div class="line"></div>
                                                        </div>
                                                        <div class="icone icone2">
                                                            <div class="line"></div>
                                                        </div>
                                                    </div>


                                                    <?php if ($title) : ?>
                                                        <h2><?php echo $title ?></h2>
                                                    <?php endif; ?>

                                                </div>
                                                <?php if ($text) : ?>
                                                    <div class="text">
                                                        <?php echo $text ?>
                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>




                                </div>


                                <div class="part1 part">
                                    <?php if (have_rows('dropdown_text_box_2')) : ?>
                                        <?php while (have_rows('dropdown_text_box_2')) : the_row();
                                            $title = get_sub_field('title');
                                            $text = get_sub_field('text');

                                        ?>
                                            <div class="accordion_wrap wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <div class="title">

                                                    <div class="icone_wrap">
                                                        <div class="icone icone1">
                                                            <div class="line"></div>
                                                        </div>
                                                        <div class="icone icone2">
                                                            <div class="line"></div>
                                                        </div>
                                                    </div>


                                                    <?php if ($title) : ?>
                                                        <h2><?php echo $title ?></h2>
                                                    <?php endif; ?>

                                                </div>
                                                <?php if ($text) : ?>
                                                    <div class="text">
                                                        <?php echo $text ?>
                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('content_3')) : ?>
        <?php while (have_rows('content_3')) : the_row();
            $scroll_text = get_sub_field('scroll_text');

        ?>
            <div class="home_sec2 team_sec2 druke_sec2 benefits_sec_scroll_text">

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



    <?php if (have_rows('content_4')) : ?>
        <?php while (have_rows('content_4')) : the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $text = get_sub_field('text');

        ?>

            <div class="slider_repeat_megawrap">
                <div class="home_sec4 benef_slider1_sec ben1">
                    <div class="container">

                        <div class="wrapp1">
                            <div class="arows_wrap">
                                <div class="arrow arrow1">Prev</div>
                                <div class="arrow arrow2">Next</div>
                            </div>


                        </div>

                        <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <div class="owl-carousel bene_slider1 owl-theme">

                                <?php if (have_rows('image_slider_box')) : ?>
                                    <?php while (have_rows('image_slider_box')) : the_row();
                                        $image = get_sub_field('image');


                                    ?>

                                        <div class="item_box">
                                            <?php if ($image) : ?>
                                                <div class="image">
                                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>




                            </div>

                        </div>






                    </div>
                </div>

                <script>
                    $(window).on('load', function() {
                        let owl1 = $('.owl-carousel.bene_slider1').owlCarousel({

                            dots: true,
                            loop: true,
                            margin: 30,
                            autoWidth: true,
                            autoplay: true,
                            autoplayTimeout: 2000,



                        });

                        $('.home_sec4.ben1 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                            owl1.trigger('prev.owl.carousel');
                        })
                        $('.home_sec4.ben1 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                            owl1.trigger('next.owl.carousel');
                        })
                    });
                </script>


                <div class="bene_sec4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content_wrapper">
                                    <?php if ($title) : ?>
                                        <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                            <h2><?php echo $title ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($subtitle) : ?>
                                        <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                            <h2><?php echo $subtitle ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                            <?php echo $text ?>
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



    <?php if (have_rows('content_5')) : ?>
        <?php while (have_rows('content_5')) : the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $text = get_sub_field('text');

        ?>
            <div class="slider_repeat_megawrap">
                <div class="home_sec4 benef_slider1_sec ben3">
                    <div class="container">

                        <div class="wrapp1">
                            <div class="arows_wrap">
                                <div class="arrow arrow1">Prev</div>
                                <div class="arrow arrow2">Next</div>
                            </div>


                        </div>

                        <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <div class="owl-carousel bene_slider2 owl-theme">

                                <?php if (have_rows('image_slider_box')) : ?>
                                    <?php while (have_rows('image_slider_box')) : the_row();
                                        $image = get_sub_field('image');


                                    ?>

                                        <div class="item_box">
                                            <?php if ($image) : ?>
                                                <div class="image">
                                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>


                            </div>

                        </div>






                    </div>
                </div>

                <script>
                    $(window).on('load', function() {
                        let owl2 = $('.owl-carousel.bene_slider2').owlCarousel({

                            dots: true,
                            loop: true,
                            margin: 30,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoWidth: true,



                        });

                        $('.home_sec4.ben2 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                            owl2.trigger('prev.owl.carousel');
                        })
                        $('.home_sec4.ben2 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                            owl2.trigger('next.owl.carousel');
                        })
                    });
                </script>


                <div class="bene_sec4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content_wrapper">
                                    <?php if ($title) : ?>
                                        <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                            <h2><?php echo $title ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($subtitle) : ?>
                                        <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                            <h2><?php echo $subtitle ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                            <?php echo $text ?>
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
    <?php if (have_rows('content_6')) : ?>
        <?php while (have_rows('content_6')) : the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $text = get_sub_field('text');

        ?>
            <div class="slider_repeat_megawrap">
                <div class="home_sec4 benef_slider1_sec ben3">
                    <div class="container">

                        <div class="wrapp1">
                            <div class="arows_wrap">
                                <div class="arrow arrow1">Prev</div>
                                <div class="arrow arrow2">Next</div>
                            </div>


                        </div>

                        <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <div class="owl-carousel bene_slider3 owl-theme">

                                <?php if (have_rows('image_slider_box')) : ?>
                                    <?php while (have_rows('image_slider_box')) : the_row();
                                        $image = get_sub_field('image');


                                    ?>

                                        <div class="item_box">
                                            <?php if ($image) : ?>
                                                <div class="image">
                                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>






                            </div>

                        </div>






                    </div>
                </div>

                <script>
                    $(window).on('load', function() {
                        let owl3 = $('.owl-carousel.bene_slider3').owlCarousel({

                            dots: true,
                            loop: true,
                            margin: 30,
                            autoplay: true,
                            autoplayTimeout: 2000,

                            autoWidth: true,



                        });

                        $('.home_sec4.ben3 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                            owl3.trigger('prev.owl.carousel');
                        })
                        $('.home_sec4.ben3 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                            owl3.trigger('next.owl.carousel');
                        })
                    });
                </script>


                <div class="bene_sec4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content_wrapper">
                                    <?php if ($title) : ?>
                                        <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                            <h2><?php echo $title ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($subtitle) : ?>
                                        <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                            <h2><?php echo $subtitle ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                            <?php echo $text ?>
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



    <?php if (have_rows('content_7')) : ?>
        <?php while (have_rows('content_7')) : the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $text = get_sub_field('text');

        ?>
            <div class="slider_repeat_megawrap">
                <div class="home_sec4 benef_slider1_sec ben4">
                    <div class="container">

                        <div class="wrapp1">
                            <div class="arows_wrap">
                                <div class="arrow arrow1">Prev</div>
                                <div class="arrow arrow2">Next</div>
                            </div>


                        </div>

                        <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <div class="owl-carousel bene_slider4 owl-theme">

                                <?php if (have_rows('image_slider_box')) : ?>
                                    <?php while (have_rows('image_slider_box')) : the_row();
                                        $image = get_sub_field('image');


                                    ?>

                                        <div class="item_box">
                                            <?php if ($image) : ?>
                                                <div class="image">
                                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>






                            </div>

                        </div>






                    </div>
                </div>

                <script>
                    $(window).on('load', function() {
                        let owl4 = $('.owl-carousel.bene_slider4').owlCarousel({

                            dots: true,
                            loop: true,
                            margin: 30,
                            autoWidth: true,
                            autoplay: true,
                            autoplayTimeout: 2000,



                        });

                        $('.home_sec4.ben4 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                            owl4.trigger('prev.owl.carousel');
                        })
                        $('.home_sec4.ben4 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                            owl4.trigger('next.owl.carousel');
                        })
                    });
                </script>


                <div class="bene_sec4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content_wrapper">
                                    <?php if ($title) : ?>
                                        <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                            <h2><?php echo $title ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($subtitle) : ?>
                                        <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                            <h2><?php echo $subtitle ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                            <?php echo $text ?>
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



    <?php if (have_rows('content_8')) : ?>
        <?php while (have_rows('content_8')) : the_row();
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $text = get_sub_field('text');

        ?>
            <div class="slider_repeat_megawrap">
                <div class="home_sec4 benef_slider1_sec ben5">
                    <div class="container">

                        <div class="wrapp1">
                            <div class="arows_wrap">
                                <div class="arrow arrow1">Prev</div>
                                <div class="arrow arrow2">Next</div>
                            </div>


                        </div>

                        <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                            <div class="owl-carousel bene_slider5 owl-theme">

                                <?php if (have_rows('image_slider_box')) : ?>
                                    <?php while (have_rows('image_slider_box')) : the_row();
                                        $image = get_sub_field('image');


                                    ?>

                                        <div class="item_box">
                                            <?php if ($image) : ?>
                                                <div class="image">
                                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>








                            </div>

                        </div>






                    </div>
                </div>

                <script>
                    $(window).on('load', function() {
                        let owl5 = $('.owl-carousel.bene_slider5').owlCarousel({

                            dots: true,
                            loop: true,
                            margin: 30,
                            autoWidth: true,
                            autoplay: true,
                            autoplayTimeout: 2000,



                        });

                        $('.home_sec4.ben5 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                            owl5.trigger('prev.owl.carousel');
                        })
                        $('.home_sec4.ben5 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                            owl5.trigger('next.owl.carousel');
                        })
                    });
                </script>


                <div class="bene_sec4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content_wrapper">
                                    <?php if ($title) : ?>
                                        <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                            <h2><?php echo $title ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($subtitle) : ?>
                                        <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                            <h2><?php echo $subtitle ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                            <?php echo $text ?>
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

    <div class="bene_sec5">
        <div class="video-wrap">
            <video disableRemotePlayback loop playsinline muted autoplay="">
                <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage_Your_Values/video-safety.mp4" type="video/mp4">
            </video>
        </div>


        <?php if (have_rows('content_10')) : ?>
            <?php while (have_rows('content_10')) : the_row();
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $text = get_sub_field('text');

            ?>
                <div class="slider_repeat_megawrap slider_repeat_megawrap2">
                    <div class="home_sec4 benef_slider1_sec ben6">
                        <div class="container">

                            <div class="wrapp1">
                                <div class="arows_wrap">
                                    <div class="arrow arrow1">Prev</div>
                                    <div class="arrow arrow2">Next</div>
                                </div>


                            </div>

                            <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                <div class="owl-carousel bene_slider6 owl-theme">

                                    <?php if (have_rows('image_slider_box')) : ?>
                                        <?php while (have_rows('image_slider_box')) : the_row();
                                            $image = get_sub_field('image');


                                        ?>

                                            <div class="item_box">
                                                <?php if ($image) : ?>
                                                    <div class="image">
                                                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                    </div>
                                                <?php endif; ?>


                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>





                                </div>

                            </div>






                        </div>
                    </div>

                    <script>
                        $(window).on('load', function() {
                            let owl6 = $('.owl-carousel.bene_slider6').owlCarousel({

                                dots: true,
                                loop: true,
                                margin: 30,
                                autoWidth: true,
                                autoplay: true,
                                autoplayTimeout: 2000,



                            });

                            $('.home_sec4.ben6 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                                owl6.trigger('prev.owl.carousel');
                            })
                            $('.home_sec4.ben6 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                                owl6.trigger('next.owl.carousel');
                            })
                        });
                    </script>


                    <div class="bene_sec4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content_wrapper">
                                        <?php if ($title) : ?>
                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h2><?php echo $title ?></h2>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($subtitle) : ?>
                                            <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <h2><?php echo $subtitle ?></h2>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($text) : ?>
                                            <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                                <?php echo $text ?>
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



        <?php if (have_rows('content_11')) : ?>
            <?php while (have_rows('content_11')) : the_row();
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $text = get_sub_field('text');

            ?>
                <div class="slider_repeat_megawrap slider_repeat_megawrap2">
                    <div class="home_sec4 benef_slider1_sec ben7">
                        <div class="container">

                            <div class="wrapp1">
                                <div class="arows_wrap">
                                    <div class="arrow arrow1">Prev</div>
                                    <div class="arrow arrow2">Next</div>
                                </div>


                            </div>

                            <div class="slider_wrap wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                <div class="owl-carousel bene_slider7 owl-theme">

                                    <?php if (have_rows('image_slider_box')) : ?>
                                        <?php while (have_rows('image_slider_box')) : the_row();
                                            $image = get_sub_field('image');


                                        ?>

                                            <div class="item_box">
                                                <?php if ($image) : ?>
                                                    <div class="image">
                                                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                    </div>
                                                <?php endif; ?>


                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>





                                </div>

                            </div>






                        </div>
                    </div>

                    <script>
                        $(window).on('load', function() {
                            let owl7 = $('.owl-carousel.bene_slider7').owlCarousel({

                                dots: true,
                                loop: true,
                                margin: 30,
                                autoWidth: true,
                                autoplay: true,
                                autoplayTimeout: 2000,



                            });

                            $('.home_sec4.ben7 .wrapp1 .arows_wrap .arrow.arrow1').click(function() {
                                owl7.trigger('prev.owl.carousel');
                            })
                            $('.home_sec4.ben7 .wrapp1 .arows_wrap .arrow.arrow2').click(function() {
                                owl7.trigger('next.owl.carousel');
                            })
                        });
                    </script>


                    <div class="bene_sec4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content_wrapper">
                                        <?php if ($title) : ?>
                                            <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                <h2><?php echo $title ?></h2>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($subtitle) : ?>
                                            <div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                                <h2><?php echo $subtitle ?></h2>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($text) : ?>
                                            <div class="text wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                                                <?php echo $text ?>
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



    </div>










    <?php get_footer(); ?>