<?php
/*
Template Name: Page Home
*/
get_header(); ?>




<div class="home_sec1">
    <div class="video-wrap">
        <video disableRemotePlayback loop playsinline muted autoplay="">
            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-video-header.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="wrapper">
                    <div class="small_text">
                        <h3 class="line line1">The Next</h2>
                            <h3 class="line line2">Gen</h2>
                    </div>
                    <div class="title_wrap">
                        <h2 class="line line1">MELT WITH <span>TRUST</span></h2>
                    </div>

                    <div class="content_wrap">
                        <div class="btn_standard">
                            <a href="#">Let´s Talk</a>
                        </div>

                        <div class="text">
                            <p>RAUCH steht für hochwertige Schmelztechnik-Lösungen für die Verarbeitung von Magnesium, Zink und Nichteisenmetallen, die sich perfekt in den individuellen Produktionsprozess integrieren.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="wrapper2">


                    <div class="accordion_item">
                        <div class="title_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/button-drop-down-text.svg" alt="">
                            </div>

                            <div class="title">
                                Experten-Know-how
                            </div>
                        </div>

                        <div class="content_text">
                            <p>RAUCH steht für hochwertige Schmelztechnik-Lösungen für die Verarbeitung von Magnesium, Zink und Nichteisenmetallen, die sich perfekt in den individuellen Produktionsprozess integrieren.</p>
                        </div>
                    </div>

                    <div class="accordion_item accordion_item2">
                        <div class="title_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/button-drop-down-text.svg" alt="">
                            </div>

                            <div class="title">
                                Höchste Qualitätsansprüche
                            </div>
                        </div>

                        <div class="content_text">
                            <p>RAUCH steht für hochwertige Schmelztechnik-Lösungen für die Verarbeitung von Magnesium, Zink und Nichteisenmetallen, die sich perfekt in den individuellen Produktionsprozess integrieren.</p>
                        </div>
                    </div>


                    <div class="accordion_item accordion_item3">
                        <div class="title_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/button-drop-down-text.svg" alt="">
                            </div>

                            <div class="title">
                                Perfekte Schmelztechnik-Lösungen
                            </div>
                        </div>

                        <div class="content_text">
                            <p>RAUCH steht für hochwertige Schmelztechnik-Lösungen für die Verarbeitung von Magnesium, Zink und Nichteisenmetallen, die sich perfekt in den individuellen Produktionsprozess integrieren.</p>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>




<div class="home_sec2">

    <div class="scrolling_text">
        <div class="text_to_scroll">
            <h2 class="marquee1">DRUCKGUSS RECYCLING ALLOYING</h2>
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
                    <div class="global_title">
                        <h2 class="line1">How We Can</h2>
                        <h2 class="line2">Help You</h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="wrap">
                    <div class="line">
                        <div class="inner_red"></div>
                    </div>

                    <div class="number_wrap">
                        <div class="number">01</div>
                    </div>

                    <div class="text_wrap">
                        <div class="title">
                            <h3>Druckguss</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="wrap">
                    <div class="line">
                        <div class="inner_red"></div>
                    </div>

                    <div class="number_wrap">
                        <div class="number">02</div>
                    </div>

                    <div class="text_wrap">
                        <div class="title">
                            <h3>Recycling / Alloying</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="wrap">
                    <div class="line">
                        <div class="inner_red"></div>
                    </div>

                    <div class="number_wrap">
                        <div class="number">03</div>
                    </div>

                    <div class="text_wrap">
                        <div class="title">
                            <h3>Sandguss</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="wrap">
                    <div class="line">
                        <div class="inner_red"></div>
                    </div>

                    <div class="number_wrap">
                        <div class="number">04</div>
                    </div>

                    <div class="text_wrap">
                        <div class="title">
                            <h3>Customer Engineering</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="wrap">
                    <div class="line">
                        <div class="inner_red"></div>
                    </div>

                    <div class="number_wrap">
                        <div class="number">05</div>
                    </div>

                    <div class="text_wrap">
                        <div class="title">
                            <h3>Schutzgasmischanlage</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="wrap wrap_video">
                    <div class="video-wrap">
                        <video disableRemotePlayback loop playsinline muted autoplay="">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/01_rauch_innovation_3.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>


<div class="home_sec4">
    <div class="container">

        <div class="wrapp1">
            <div class="arows_wrap">
                <div class="arrow arrow1">Prev</div>
                <div class="arrow arrow2">Next</div>
            </div>
            <div class="global_title">
                <h2 class="line1">Your</h2>
                <h2 class="line2">Values</h2>
            </div>

        </div>

        <div class="slider_wrap">
            <div class="owl-carousel image_slider1 owl-theme">

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/your-benefit-preview-trust.jpg" alt="">

                    </div>

                    <div class="content">
                        <div class="title">
                            <h2>WE MELT<br> WITH TRUST</h2>
                            <h3>Vertrauen</h3>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/your-benefit-preview-joy.jpg" alt="">

                    </div>

                    <div class="content">
                        <div class="title">
                            <h2>WE MELT<br> WITH TRUST</h2>
                            <h3>Vertrauen</h3>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/your-benefit-preview-innovation.jpg" alt="">

                    </div>

                    <div class="content">
                        <div class="title">
                            <h2>WE MELT<br> WITH TRUST</h2>
                            <h3>Vertrauen</h3>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/your-benefit-preview-credibility.jpg" alt="">

                    </div>

                    <div class="content">
                        <div class="title">
                            <h2>WE MELT<br> WITH TRUST</h2>
                            <h3>Vertrauen</h3>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/your-benefit-preview-safety.jpg" alt="">

                    </div>

                    <div class="content">
                        <div class="title">
                            <h2>WE MELT<br> WITH TRUST</h2>
                            <h3>Vertrauen</h3>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>


                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/your-benefit-preview-respect-and-community.jpg" alt="">

                    </div>

                    <div class="content">
                        <div class="title">
                            <h2>WE MELT<br> WITH TRUST</h2>
                            <h3>Vertrauen</h3>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>

<script>
    $(window).on('load', function() {
        let owl2 = $('.owl-carousel.image_slider1').owlCarousel({

            dots: true,
            loop: true,
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
                    <div class="arr_brn">
                        <a href="#">View All</a>
                    </div>

                    <div class="btn_standard">
                        <a href="#">Kontakt</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<div class="home_sec6">
    <div class="video-wrap">
        <video disableRemotePlayback loop playsinline muted autoplay="">
            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-video-background-earth.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_wrap">
                    <div class="subtitle">
                        <h3>Discover Our Company</h3>
                    </div>

                    <div class="global_title">
                        <h2 class="line1">Lorem Ipsum <span>Vision und Grundsätze</span></h2>
                    </div>


                </div>
            </div>

            <div class="col-lg-3">
                <div class="wrap">
                    <div class="title">
                        <h2>Headline Vision</h2>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. mehr erfahren</p>
                    </div>

                    <div class="button_wrapper">
                        <a href="#">mehr erfahren</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="wrap">
                    <div class="title">
                        <h2>Headline Grunsätze</h2>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. mehr erfahren</p>
                    </div>

                    <div class="button_wrapper">
                        <a href="#">mehr erfahren</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="wrap">
                    <div class="title">
                        <h2>Headline Team</h2>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. mehr erfahren</p>
                    </div>

                    <div class="button_wrapper">
                        <a href="#">mehr erfahren</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="wrap">
                    <div class="title">
                        <h2>Headline Worldwide</h2>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. mehr erfahren</p>
                    </div>

                    <div class="button_wrapper">
                        <a href="#">mehr erfahren</a>
                    </div>
                </div>
            </div>

            <div class="col_lg-12">



            </div>


            <div class="col-lg-3">
                <div class="wrap_line">
                    <div class="title">
                        <h2>Länder</h2>
                    </div>

                    <div class="number">
                        45
                    </div>

                    <div class="line">
                        <div class="red_line">
                            <div class="circle_top"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="wrap_line">
                    <div class="title">
                        <h2>Betriebjahre</h2>
                    </div>

                    <div class="number">
                        7500
                    </div>

                    <div class="line">
                        <div class="red_line">
                            <div class="circle_top"></div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="wrap_line">
                    <div class="title">
                        <h2>Schmelzleistung (t/J)</h2>
                    </div>

                    <div class="number">
                        2.200.000
                    </div>

                    <div class="line">
                        <div class="red_line">
                            <div class="circle_top"></div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="wrap_line">
                    <div class="title">
                        <h2>Vorwärmleistung (t/J)</h2>
                    </div>

                    <div class="number">
                        800.000
                    </div>

                    <div class="line">
                        <div class="red_line">
                            <div class="circle_top"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="wrapper_btnn">
                    <div class="btn_standard">
                        <a href="#">Kontakt</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>



<div class="home_map_sec">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-worldmap1.png" alt="">

    </div>
</div>

<div class="home_video_sec">
    <div class="video-wrap">
        <video disableRemotePlayback loop playsinline muted autoplay="">
            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-video-fullscreen.mp4" type="video/mp4">
        </video>
    </div>
</div>






<div class="home_sec4 home_last_slider">
    <div class="container">

        <div class="wrapp1">
            <div class="arows_wrap">
                <div class="arrow arrow1">Prev</div>
                <div class="arrow arrow2">Next</div>
            </div>

            <div class="subtitle">
                <h3>Testimonial</h3>
            </div>
            <div class="global_title">
                <h2 class="line1">What Our <span>Clients</span> Say</h2>

            </div>

        </div>

        <div class="slider_wrap">
            <div class="owl-carousel image_slider2 owl-theme">

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                    </div>

                    <div class="content">


                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div class="person_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/profile-pic-clients-statements.jpg" alt="">

                            </div>
                            <div class="name_wrap">
                                <div class="name">Mara Musterfrau, MBA</div>
                                <div class="function">Position, Musterland</div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                    </div>

                    <div class="content">


                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div class="person_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/profile-pic-clients-statements.jpg" alt="">

                            </div>
                            <div class="name_wrap">
                                <div class="name">Mara Musterfrau, MBA</div>
                                <div class="function">Position, Musterland</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                    </div>

                    <div class="content">


                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div class="person_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/profile-pic-clients-statements.jpg" alt="">

                            </div>
                            <div class="name_wrap">
                                <div class="name">Mara Musterfrau, MBA</div>
                                <div class="function">Position, Musterland</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                    </div>

                    <div class="content">


                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div class="person_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/profile-pic-clients-statements.jpg" alt="">

                            </div>
                            <div class="name_wrap">
                                <div class="name">Mara Musterfrau, MBA</div>
                                <div class="function">Position, Musterland</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                    </div>

                    <div class="content">


                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                        <div class="person_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/profile-pic-clients-statements.jpg" alt="">

                            </div>
                            <div class="name_wrap">
                                <div class="name">Mara Musterfrau, MBA</div>
                                <div class="function">Position, Musterland</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item_box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-stars-clients-statements.svg" alt="">

                    </div>

                    <div class="content">


                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>

                        <div class="person_wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/profile-pic-clients-statements.jpg" alt="">

                            </div>
                            <div class="name_wrap">
                                <div class="name">Mara Musterfrau, MBA</div>
                                <div class="function">Position, Musterland</div>
                            </div>
                        </div>
                    </div>
                </div>
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


<div class="home_sec7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapp1">
                    <div class="subtitle">
                        <h3>Rauch Team</h3>
                    </div>
                    <div class="global_title">
                        <h2 class="line1">Because <span>we care</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="wrapp2">
                    <div class="video-wrap">
                        <video disableRemotePlayback loop playsinline muted autoplay="">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-video-team.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="content_box">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Home/home-team-red-mark.svg" alt="">

                        </div>

                        <div class="text">
                            <p>„Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.“</p>
                        </div>
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
                <div class="arr_brn">
                    <a href="#">Zum Team</a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>