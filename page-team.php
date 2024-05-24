<?php
/*
Template Name: Page Team
*/
get_header(); ?>

<div class="team_sec1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wrap">
                    <div class="global_title sub_global_title">
                        <h2 class="line1">LOREM IPSUM AMET CONSER<span>OUR TEAM.</span> </h2>

                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home_sec2 team_sec2">

    <div class="scrolling_text">
        <div class="text_to_scroll">
            <h2 class="marquee1">VERTRAUEN RESPEKT ZUSAMMENHALT INNOVATION ZUVERLÄSSIGKEIT GLAUBWÜRDIGKEIT SICHERHEIT</h2>
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


<div class="team_sec3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="box_wrap">

                    <div class="video-wrap">
                        <video disableRemotePlayback loop playsinline muted autoplay="">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/team-video-member-dummy.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="overlay_wrap"></div>

                    <div class="content">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/signet-red.svg" alt="">

                        </div>

                        <div class="name">Dr. Michael Mustermann</div>
                        <div class="function">Funktion</div>

                        <a href="mailto:mustermann@rauch-ft.com">mustermann@rauch-ft.com</a>
                    </div>


                </div>
            </div>

            <div class="col-md-6">

                <div class="box_wrap">

                    <div class="video-wrap">
                        <video disableRemotePlayback loop playsinline muted autoplay="">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/team-video-member-dummy.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="overlay_wrap"></div>

                    <div class="content">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/signet-red.svg" alt="">

                        </div>

                        <div class="name">Dr. Michael Mustermann</div>
                        <div class="function">Funktion</div>

                        <a href="mailto:mustermann@rauch-ft.com">mustermann@rauch-ft.com</a>
                    </div>


                </div>
            </div>

            <div class="col-md-6">

                <div class="box_wrap">

                    <div class="video-wrap">
                        <video disableRemotePlayback loop playsinline muted autoplay="">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/team-video-member-dummy.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="overlay_wrap"></div>

                    <div class="content">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/signet-red.svg" alt="">

                        </div>

                        <div class="name">Dr. Michael Mustermann</div>
                        <div class="function">Funktion</div>

                        <a href="mailto:mustermann@rauch-ft.com">mustermann@rauch-ft.com</a>
                    </div>


                </div>
            </div>

            <div class="col-md-6 ">

                <div class="box_wrap">

                    <div class="video-wrap">
                        <video disableRemotePlayback loop playsinline muted autoplay="">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/team-video-member-dummy.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="overlay_wrap"></div>

                    <div class="content">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/signet-red.svg" alt="">

                        </div>

                        <div class="name">Dr. Michael Mustermann</div>
                        <div class="function">Funktion</div>

                        <a href="mailto:mustermann@rauch-ft.com">mustermann@rauch-ft.com</a>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>



<div class="team_sec1 team_sec4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wrap">
                    <div class="global_title sub_global_title">
                        <h2 class="line1">LOREM IPSUM AMET CONSER<span>KARRIERE.</span> </h2>

                    </div>

                    <div class="text">
                        <p>Wollen Sie Teil eines jungen, dynamischen Teams werden? Dann sind Sie bei uns genau richtig! Senden Sie Ihre Initiativbewerbung jederzeit an personal@rauch-ft.com</p>
                        <p>Bewerbungen für 2025 werden entgegengenommen für: Lehrling - Elektrotechniker/in mit Schwerpunkt Anlagen- und Betriebstechnik</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image_wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home_content/Subpage Team/wko-certificate.jpg" alt="">

                </div>
            </div>
        </div>
    </div>
</div>






<?php get_footer(); ?>