<?php
/*
Template Name: Page Impressum
*/
get_header(); ?>



<?php if (have_rows('header')) : ?>
    <?php while (have_rows('header')) : the_row();
        $title = get_sub_field('title');

    ?>

        <div class="team_sec1 benefit_sec1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="wrap">
                            <?php if ($title) : ?>
                                <div class="global_title sub_global_title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.6s">
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


<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $text_1 = get_sub_field('text_1');
        $text_2 = get_sub_field('text_2');
        $text_3 = get_sub_field('text_3');
        $logo_image = get_sub_field('logo_image');

    ?>
        <div class="impressum_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wrap">

                            <div class="padd_wrap">
                                <?php if ($text_1) : ?>
                                    <div class="text text_bold">
                                        <p><?php echo $text_1 ?></p>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <?php if ($text_2) : ?>
                                <div class="padd_wrap">
                                    <div class="text text_bold">
                                        <p><?php echo $text_2 ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>


                            <?php if (have_rows('info_box_1')) : ?>
                                <?php while (have_rows('info_box_1')) : the_row();
                                    $text_1 = get_sub_field('text_1');
                                    $text_2 = get_sub_field('text_2');

                                ?>
                                    <div class="padd_wrap">




                                        <div class="info_wrap1">
                                            <?php if ($text_1) : ?>
                                                <div class="text text1"><?php echo $text_1 ?></div>

                                                <div class="text text2"><?php echo $text_2 ?></div>
                                            <?php endif; ?>


                                        </div>

                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>


                            <div class="padd_wrap">
                                <?php if (have_rows('info_box_2')) : ?>
                                    <?php while (have_rows('info_box_2')) : the_row();
                                        $text_1 = get_sub_field('text_1');
                                        $text_2 = get_sub_field('text_2');

                                    ?>

                                        <div class="info_wrap1">
                                            <?php if ($text_1) : ?>
                                                <div class="text text1"><?php echo $text_1 ?></div>

                                                <div class="text text2"><?php echo $text_2 ?></div>
                                            <?php endif; ?>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>

                        </div>

                        <div class="wrap_second">

                            <?php $i = 1;
                            if (have_rows('info_box_3')) : ?>
                                <?php while (have_rows('info_box_3')) : the_row();
                                    $text_1 = get_sub_field('text_1');
                                    $text_2 = get_sub_field('text_2');

                                ?>
                                    <div class="info_wrap2 <?php if ($i == 3) : ?>info_wrap3<?php endif; ?>">
                                        <?php if ($text_1) : ?>
                                            <div class="text text1"><?php echo $text_1 ?></div>

                                            <div class="text text2"><?php echo $text_2 ?></div>
                                        <?php endif; ?>
                                    </div>
                                <?php $i++;
                                endwhile; ?>
                            <?php endif; ?>


                        </div>


                    </div>

                    <div class="col-lg-6">
                        <?php if ($logo_image) : ?>
                            <div class="image_logo">
                                <img src="<?php echo $logo_image['sizes']['medium']; ?>" alt="">
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-12">
                        <?php if ($text_3) : ?>
                            <div class="third_wrap">
                                <div class="text">
                                    <?php echo $text_3 ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>


                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('content_2')) : ?>
    <?php while (have_rows('content_2')) : the_row();



    ?>


        <div class="benefits_sec2 impres_accor_sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="accord_mega_wrap">
                            <div class="part2 part">
                                <?php if (have_rows('accordion_box_1')) : ?>
                                    <?php while (have_rows('accordion_box_1')) : the_row();

                                        $title = get_sub_field('title');
                                        $text = get_sub_field('text');
                                        $file = get_sub_field('pdf_link');



                                    ?>


                                        <div class="accordion_wrap">
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

                                            <div class="text">
                                                <?php if ($file) : ?>
                                                    <a href="<?php echo $file ?>" target="_blank">PDF</a>
                                                <?php endif; ?>


                                                <?php if ($text) : ?>
                                                    <?php echo $text ?>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>










                            <div class="part1 part">
                                <?php if (have_rows('accordion_box_2')) : ?>
                                    <?php while (have_rows('accordion_box_2')) : the_row();

                                        $title = get_sub_field('title');
                                        $text = get_sub_field('text');
                                        $file = get_sub_field('pdf_link');



                                    ?>


                                        <div class="accordion_wrap">
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

                                            <div class="text">
                                                <?php if ($file) : ?>
                                                    <a href="<?php echo $file ?>" target="_blank">PDF</a>
                                                <?php endif; ?>


                                                <?php if ($text) : ?>
                                                    <?php echo $text ?>
                                                <?php endif; ?>

                                            </div>
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
        $text_1 = get_sub_field('text_1');
        $text_2 = get_sub_field('text_2');
        $text_3 = get_sub_field('text_3');


    ?>
        <div class="impress_last_sec">
            <div class="container">
                <div class="col-lg-12">
                    <div class="wrap">
                        <?php if ($text_1) : ?>
                            <div class="text text_bold">
                                <?php echo $text_1 ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($text_2) : ?>
                            <div class="text">
                                <?php echo $text_2 ?>
                            </div>
                        <?php endif; ?>


                        <?php if ($text_3) : ?>
                            <div class="text text_bold">
                                <?php echo $text_3 ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>