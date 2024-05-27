<?php
/*
Template Name: Page Druckguss
*/
get_header(); ?>

<div class="home_sec1 druck_sec1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/header-druckgusstechnik.jpg);">


    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="wrapper">

                    <div class="title_wrap">
                        <h2 class="line line1">LOREM IPSUM <span>DRUCKGUSS</span></h2>
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

<div class="mega_section_wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/mesh.svg);">

    <!-- <div class="abs_dot_image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/2_Druckguss/mes2.png" alt="">

    </div> -->

    <div class="home_sec2 team_sec2 druke_sec2">

        <div class="scrolling_text">
            <div class="text_to_scroll">
                <h2 class="marquee1">DRUCKGUSS MAGNESIUM DRUCKGUSS ZINK</h2>
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


    <div class="druke_sec3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="wrap">
                        <div class="global_title">
                            <h2>Wirtschaftlich, schnell, exakt: <span>Druckguss</span></h2>
                        </div>

                        <div class="text">
                            <p>Druckguss zählt zu den ökonomischsten Formgebungsverfahren. Mit nur einer Form lassen sich enorme Zahlen an Gussprodukten herstellen – und das bei einheitlicher Qualität und zu relativ geringen Stückkosten. Dabei wird flüssige Schmelze unter hohem Druck (bis 1.200 bar) mit hoher Füllgeschwindigkeit in eine Form gepresst – verwendet werden dabei metallische Dauerformen (anders beim Sandguss, wo die Form auf nur einen Gussvorgang ausgelegt ist). Druckguss erlaubt die Herstellung großer und komplexer Bauteile mit geringen Wandstärken und glatteren Oberflächen in einem schnellen Gießzyklus.<br><br> Lernen Sie hier unsere besondere Kompetenz für den <strong>Druckguss mit Magnesium</strong> kennen! Hier finden Sie unser Lösungsangebot für den <strong>Zinkguss.</strong></p>
                        </div>

                        <div class="btns_wrap">
                            <div class="arr_brn">
                                <a href="#">Druckguss/Magnesium</a>
                            </div>

                            <div class="arr_brn arr_btn2">
                                <a href="#">Druckguss/Zink</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<?php get_footer(); ?>