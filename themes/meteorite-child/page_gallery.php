<?php
/*
Template Name: Gallery Page
*/

get_header();
?>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Heebo:300|Kalam|Patrick+Hand" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>

        <style>

            h1{
                font-family: 'Kalam', cursive !important;
                font-size: 70px !important;
                font-weight: 400;
            }

            h2{
                font-family: 'Patrick Hand', cursive !important;
                font-size: 40px !important;
            }
            h3{
                font-family: 'Patrick Hand', cursive !important;
                font-size: 20px !important;
            }
            p{
                font-family: 'Heebo', sans-serif !important;
                font-size: 18px !important;
            }

            .nav-container {
                background-color: #294552;
            }
            .site-content
            {
                padding: 0px;
            }
            body {
                font-family: 'Heebo', sans-serif !important;
                background: #294552;
            }
            .svgfree{
                width: 300px;
                height: 80px;
                position: inherit !important;
            }
            .gal-heading{
                margin-top: 55px;
                margin-bottom: 55px;
                color: #acc4ce;

            }
            .gal-description{
                color: #FFFFFF;
            }
            .gal-container{
                background-color: #acc4ce;
                padding-top: 30px;
                padding-bottom: 30px;
            }
            .btn-GalleryLeft{
                background-color: #597884;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                color: #efefef;
                border-color: transparent;
            }
            .btn-GalleryRight{
                background-color: transparent;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                border: 3px solid #597884;
                color: #597884;
            }



        </style>
    </head>

<?php get_template_part( 'Custom Shared Templet Parts/block', 'headerImage' ); ?>

<div align="left" style="padding-top: 30px">
    <svg class="svgfree" xmlns="http://www.w3.org/2000/svg" width="511" height="140" viewBox="0 0 511 140">
        <defs>
            <style>
                .cls-1, .cls-2 {
                    fill: #FFFFFF;
                }

                .cls-2 {
                    fill-rule: evenodd;
                }

                .cls-3 {
                    font-size: 90px;
                    fill: #294552;
                    font-family: 'Kalam', cursive;
                    font-weight: 700;
                }
            </style>
        </defs>
        <rect class="cls-1" width="422" height="140"/>
        <path id="Polygon_1" data-name="Polygon 1" class="cls-2" d="M422,140L332.987,0H511.013Z"/>
        <text id="TITLE" class="cls-3" x="29" y="102"><?php the_field('page_title'); ?></text>
    </svg>
</div>

    <div class="container">
        <h2 class="gal-heading" data-aos="fade-down" >Huge Crappie</h2>
<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->
    </div>
    <div class="gal-container">
        <div class="container">
            <div data-aos="fade-down" data-aos-delay="400" align="center">
                <?php echo do_shortcode("[justified_image_grid preset=test filterby=on last_row=flexible load_more=once load_more_text=\"Load More\" load_more_count_text=none load_more_limit=10 ng_gallery=3]"); ?>
            </div>
            <div align="center">
                        <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>

                        <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>


            </div>
        </div>
    </div>


    <div class="container">
        <h2 class="gal-heading">Trophy Catfish</h2>
<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->
    </div>
    <div class="gal-container">
        <div class="container">
            <div data-aos="fade-down" data-aos-delay="400" align="center">
                <?php echo do_shortcode("[justified_image_grid preset=test  filterby=on last_row=flexible load_more=once load_more_text=\"Load More \" load_more_count_text=none load_more_limit=10 ng_gallery=4]"); ?>
            </div>
            <div align="center">
                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>

                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>


            </div>
        </div>
    </div>


    <div class="container">
        <h2 class="gal-heading">Impressive Waterfowl</h2>
<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->
    </div>
    <div class="gal-container">
        <div class="container">
            <div data-aos="fade-down" data-aos-delay="400" align="center">
                <?php echo do_shortcode("[justified_image_grid preset=test filterby=on last_row=flexible load_more=once load_more_text=\"Load More \" load_more_count_text=none load_more_limit=10 ng_gallery=5]"); ?>
            </div>
            <div align="center">
                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>

                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>


            </div>
        </div>
    </div>


<!--    <div class="container">-->
<!--        <h2 class="gal-heading">Record Breaking Deer: Deet Hunting</h2>-->
<!--<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->-->
<!--    </div>-->
<!--    <div class="gal-container">-->
<!--        <div class="container">-->
<!--            <div data-aos="fade-down" data-aos-delay="400" align="center">-->
<!--                --><?php //echo do_shortcode("[justified_image_grid preset=test filterby=on last_row=flexible load_more=once load_more_text=\"Load More\" load_more_count_text=none load_more_limit=10 ng_gallery=6]"); ?>
<!--            </div>-->
<!--            <div align="center">-->
<!--                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>-->
<!---->
<!--                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="container">-->
<!--        <h2 class="gal-heading">Birds You Can Brag About: Turkey Hunting</h2>-->
<!--<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->-->
<!--    </div>-->
<!--    <div class="gal-container">-->
<!--        <div class="container">-->
<!--            <div data-aos="fade-down" data-aos-delay="400" align="center">-->
<!--                --><?php //echo do_shortcode("[justified_image_grid preset=test filterby=on last_row=flexible load_more=once load_more_text=\"Load More\" load_more_count_text=none load_more_limit=10 ng_gallery=7]"); ?>
<!--            </div>-->
<!--            <div align="center">-->
<!--                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>-->
<!---->
<!--                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


    <div class="container">
        <h2 class="gal-heading">Our Boats</h2>
<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->
    </div>
    <div class="gal-container">
        <div class="container">
            <div data-aos="fade-down" data-aos-delay="400" align="center">
                <?php echo do_shortcode("[justified_image_grid preset=test filterby=on last_row=flexible load_more=once load_more_text=\"Load More\" load_more_count_text=none load_more_limit=10 ng_gallery=8]"); ?>
            </div>
            <div align="center">
                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>

                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>


            </div>
        </div>
    </div>


    <div class="container">
        <h2 class="gal-heading">Beautiful Lakes</h2>
<!--        <p class="gal-description" data-aos="fade-down" data-aos-delay="200">We offer the best top-notch equipment and techniques to be successful on the water we fish in Mississippi, Illinois and Missouri Lakes</p>-->
    </div>
    <div class="gal-container">
        <div class="container">
            <div data-aos="fade-down" data-aos-delay="400" align="center">
                <?php echo do_shortcode("[justified_image_grid preset=test filterby=on last_row=flexible load_more=once load_more_text=\"Load More\" load_more_count_text=none load_more_limit=10 ng_gallery=10]"); ?>

            </div>
            <div align="center">
                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-GalleryLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>

                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-GalleryRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>


            </div>
        </div>
    </div>



<?php
get_footer();

