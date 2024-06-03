<?php
/*
Template Name: Page Subpage main tamplate
*/
get_header(); ?>


<div class="sub_big_wrapper " style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/mesh_main.png);">




    <?php if (have_rows('content_1')) : ?>
        <?php while (have_rows('content_1')) : the_row();
            $title = get_sub_field('title');

        ?>

            <div class="team_sec1 benefit_sec1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="wrap">
                                <?php if ($title) : ?>
                                    <div class="global_title sub_global_title wow fadeInLeft " data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <h2 class="line1"> <?php echo $title ?> </h2>

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

            <div class="benefits_sec2 tamplate_subpages2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="accord_mega_wrap">
                                <div class="part2 part">

                                    <?php if (have_rows('accordion_box')) : ?>
                                        <?php while (have_rows('accordion_box')) : the_row();
                                            $title = get_sub_field('title');
                                            $text = get_sub_field('text');

                                        ?>
                                            <div class="accordion_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
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

                        <div class="col-lg-12">

                            <div class="btn_standard">
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

    <?php if (have_rows('content_3')) : ?>
        <?php while (have_rows('content_3')) : the_row();
            $image_1 = get_sub_field('image_1');

            $image_2 = get_sub_field('image_2');

        ?>
            <div class="main_template3">
                <div class="image">
                    <?php if ($image_1) : ?>
                        <img id="img1" class="img1" src="<?php echo $image_1['sizes']['large']; ?>" alt="">
                    <?php endif; ?>

                    <?php if ($image_2) : ?>
                        <img id="img2" class="img2" src="<?php echo $image_2['sizes']['large']; ?>" alt="">
                    <?php endif; ?>


                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <script>
        window.addEventListener('scroll', function() {
            var scrollTop = window.scrollY;
            var docHeight = document.documentElement.scrollHeight - window.innerHeight;
            var scrollPercent = scrollTop / docHeight;

            var img1 = document.getElementById('img1');
            var img2 = document.getElementById('img2');

            var opacityValue = 1 - scrollPercent;

            img1.style.opacity = opacityValue;
            img2.style.opacity = 1 - opacityValue;
        });
    </script>

    <?php if (have_rows('content_4')) : ?>
        <?php while (have_rows('content_4')) : the_row();
            $title = get_sub_field('title');

            $text = get_sub_field('text');
            $scroll_text = get_sub_field('scroll_text');

        ?>

            <div class="team_sec1 benefit_sec1 main_template4" id="magnes_part1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="wrap">
                                <?php if ($title) : ?>
                                    <div class="global_title sub_global_title wow fadeInLeft " data-wow-delay="0.5s" data-wow-duration="0.6s">
                                        <h2 class="line1"><?php echo $title ?></h2>

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



            <div class="home_sec2 team_sec2 druke_sec2 benefits_sec_scroll_text main_template5">
                <?php if ($scroll_text) : ?>
                    <div class="scrolling_text">
                        <div class="text_to_scroll">
                            <h2 class="marquee1"><?php echo $scroll_text ?></h2>
                        </div>
                    </div>
                <?php endif; ?>

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


    <?php if (have_rows('content_5')) : ?>
        <?php while (have_rows('content_5')) : the_row();
            $title = get_sub_field('title');

            $text = get_sub_field('text');


        ?>

            <div class="main_template6" id="produkte_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="slider_big_wrap">
                                <div class="arows_wrap">
                                    <div class="arrow arrow1">Prev</div>
                                    <div class="arrow arrow2">Next</div>
                                </div>
                                <div class="owl-carousel producte1-slider owl-theme">
                                    <?php if (have_rows('slider_box')) : ?>
                                        <?php while (have_rows('slider_box')) : the_row();
                                            $title = get_sub_field('title');

                                            $text = get_sub_field('text');
                                            $image = get_sub_field('image');
                                            $file = get_sub_field('file');
                                            $name = get_sub_field('name');
                                            $file_name = get_sub_field('file_name');


                                        ?>
                                            <div class="prod_slider_wrap">
                                                <div class="text_part part">
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

                                                    <?php if ($file) : ?>
                                                        <div class="btn_standard">
                                                            <a href="<?php echo $file ?>"><?php echo $file_name ?></a>
                                                        </div>
                                                    <?php endif; ?>



                                                </div>
                                                <?php if ($image) : ?>
                                                    <div class="image_part part">
                                                        <div class="image">
                                                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="">

                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>


                                </div>


                            </div>


                        </div>


                        <div class="col-lg-12">
                            <div class="link_wraper">
                                <div class="owl-carousel links-slider owl-theme">

                                    <ul>
                                        <?php $i = 1;
                                        if (have_rows('slider_box')) : ?>
                                            <?php while (have_rows('slider_box')) : the_row();

                                                $name = get_sub_field('name');

                                            ?>
                                                <li class="<?php if ($i == 1) : ?>after_element<?php endif; ?>"><?php echo $name ?></li>
                                            <?php $i++;
                                            endwhile; ?>
                                        <?php endif; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(window).on('load', function() {
                                let owl2 = $('.owl-carousel.links-slider').owlCarousel({

                                    dots: true,
                                    loop: true,
                                    margin: 0,
                                    autoWidth: true,



                                });


                            });
                        </script>


                    </div>
                </div>
            </div>


            <script>
                $(window).on('load', function() {
                    var mobonly;
                    var windowWidth = $(window).width();
                    if (windowWidth < 1330) {
                        mobonly = true;
                    } else {
                        mobonly = false;
                    }

                    let owl2 = $('.owl-carousel.producte1-slider').owlCarousel({
                        items: 1,
                        loop: false,
                        autoHeight: mobonly,
                        dots: false,
                        autoplay: false,
                        autoplaySpeed: 2500,
                        smartSpeed: 1500,
                        autoplayHoverPause: false
                    });

                    owl2.on('changed.owl.carousel', function(event) {
                        var currentIndex = event.item.index;
                        $('.main_template6 .link_wraper ul li').removeClass('after_element');
                        $('.main_template6 .link_wraper ul li').eq(currentIndex).addClass('after_element');
                    });

                    $('.main_template6 .link_wraper ul').on('click', 'li', function() {
                        var index = $(this).index();
                        owl2.trigger('to.owl.carousel', [index, 300]);
                        $(".main_template6 .link_wraper ul li").removeClass("after_element");
                        $(this).addClass("after_element");
                    });

                    $('.main_template6 .slider_big_wrap .arows_wrap .arrow').click(function() {
                        var direction = $(this).hasClass('arrow1') ? 'prev.owl.carousel' : 'next.owl.carousel';
                        owl2.trigger(direction);
                        setTimeout(function() {
                            var currentIndex = owl2.find('.owl-item.active').index();
                            $(".main_template6 .link_wraper ul li").removeClass("after_element");
                            $(".main_template6 .link_wraper ul li").eq(currentIndex).addClass("after_element");
                        }, 300); // timeout to ensure carousel has finished sliding
                    });
                });
            </script>



            <div class="druke_sec3 main_template_last">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="wrap">


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
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>