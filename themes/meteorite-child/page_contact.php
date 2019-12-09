<?php
/*
Template Name: Contact Page
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

            /* Grow */
            .hvr-grow {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: perspective(1px) translateZ(0);
                transform: perspective(1px) translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: transform;
                transition-property: transform;
            }
            .hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
            }
            div.wpforms-container-full .wpforms-form input[type=date], div.wpforms-container-full .wpforms-form input[type=datetime], div.wpforms-container-full .wpforms-form input[type=datetime-local], div.wpforms-container-full .wpforms-form input[type=email], div.wpforms-container-full .wpforms-form input[type=month], div.wpforms-container-full .wpforms-form input[type=number], div.wpforms-container-full .wpforms-form input[type=password], div.wpforms-container-full .wpforms-form input[type=range], div.wpforms-container-full .wpforms-form input[type=search], div.wpforms-container-full .wpforms-form input[type=tel], div.wpforms-container-full .wpforms-form input[type=text], div.wpforms-container-full .wpforms-form input[type=time], div.wpforms-container-full .wpforms-form input[type=url], div.wpforms-container-full .wpforms-form input[type=week], div.wpforms-container-full .wpforms-form select, div.wpforms-container-full .wpforms-form textarea {
                background-color: #FFFFFF !important;
                box-sizing: border-box;
                border-radius: 0px !important;
                color: #FFF !important;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                display: block;
                float: none;
                font-size: 20px;
                border: 0px solid #ccc !important;
                padding: 6px 10px;
                height: 38px;
                width: 100%;
                line-height: 1.3;
            }
            div.wpforms-container-full .wpforms-form .wpforms-field-sublabel{
                color: #FFFFFF;
            }
            div.wpforms-container-full .wpforms-form .wpforms-field-label {
                display: block;
                font-weight: 700;
                font-size: 18px !important;
                float: none;
                line-height: 1.3;
                margin: 0 0 4px 0;
                padding: 0;
                font-family: 'Nanum Gothic', sans-serif !important;
                color: #acc4ce;
            }
            .form-submitButton{
                background-color: transparent !important;
                padding: 10px 10px 10px 10px !important;
                font-size: 16px !important;
                border: 3px solid #efefef !important;
                color: #efefef !important;
                font-family: 'Nanum Gothic', sans-serif !important;
            }
            .contact-Heading{
                color: #FFFFFF;
            }
            .sep-line{
                border-width: 4px;
                border-color: #7aa9a9;
            }
            .contact-option{
                text-align: left;
                padding-right: 15px;

            }
            .contact-line{
                text-align: left;
                color: #acc4ce;
            }
            .contact-link{
                color: #9eb9b3;

            }
            .contact-link:hover{

            }
            .contact-optionMobile{
                text-align: center;
            }
            .contact-lineMobile{
                text-align: center;
                font-size: 28px !important;
                color: #acc4ce;
            }
            .contact-linkMobile{
                color: #9eb9b3;

            }
            .contact-linkMobile:hover{

            }
            .contact-icons{
                color: #FFFFFF;
            }
            .btn-ContactLeft{
                background-color: #acc4ce;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                color: #294552;
                border-color: transparent;
                font-weight: bold;
            }
            .btn-ContactRight{
                background-color: transparent;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                border: 3px solid #294552;
                color: #acc4ce;
                font-weight: bold;
            }

            .sep-line{
                border-width: 4px;
                border-color: #7aa9a9;
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

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" align="center" style="padding-top: 20px; padding-bottom: 20px;">
                    <div data-aos="fade-up">
                        <p><img class="rounded-circle" style="" src="http://techfusionproject.com/wp-content/uploads/2019/02/contact-page.jpg" alt="" width="270px" ></p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <h2 class="contact-Heading">Mike Hanfelder</h2>
                    </div>
                    <div class="col-lg-10 hidden-md hidden-sm hidden-xs">

                        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <h2 class="col-headings"><?php the_sub_field('column_heading'); ?></h2>
                            <hr class="sep-line"/>
                        </div>

                        <br/>
                        <div data-aos="fade-right">
                            <div class="row">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"><a class="hvr-icon-up"><i
                                                class="fas fa-phone fa-3x hvr-icon contact-icons"></i></a></div>
                                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="contact-line">Lets Talk</h3>
                                    <p class="contact-option"><a class="contact-link" href="tel:+1-662-230-4952">+1(662)-230-4952</a></p>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-right" data-aos-delay="300">
                            <div class="row">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12" >
                                    <a class="hvr-icon-up"><i class="fas fa-envelope-open fa-3x hvr-icon contact-icons"></i></a>
                                </div>
                                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="contact-line">
                                        Email:</h3>
                                    <p class="contact-option"><a class="contact-link"
                                                                 href="mailto:info@HanfelderOutdoorGudes.com">info@HanfelderOutdoorGudes.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-right" data-aos-delay="600">
                            <div class="row">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"><a class="hvr-icon-up"><i
                                                class="fas fa-calendar-alt fa-3x hvr-icon contact-icons"></i></a></div>
                                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="contact-line">Online Booking Page:</h3>
                                    <p class="contact-option"><a class="contact-link" href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc">Book Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 hidden-lg">

                        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <h2 class="col-headings"><?php the_sub_field('column_heading'); ?></h2>
                            <hr class="sep-line"/>
                        </div>

                        <br/>
                        <div data-aos="fade-right">
                            <div class="row">
                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;
                                margin-top: 15px;"><a class="hvr-icon-up"><i class="fas fa-phone fa-5x hvr-icon contact-icons"></i></a></div>
                                <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="contact-lineMobile">Lets Talk</h3>
                                    <p class="contact-optionMobile"><a class="contact-linkMobile"
                                                                       href="tel:+1-662-230-4952">+1(662)
                                            -230-4952</a></p>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-right" data-aos-delay="300">
                            <div class="row">
                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;
                                margin-top: 15px;"><a class="hvr-icon-up"><i class="fas fa-envelope-open fa-5x hvr-icon contact-icons"></i></a></div>
                                <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="contact-lineMobile">Email:</h3>
                                    <p class="contact-optionMobile"><a class="contact-linkMobile"
                                                                       href="mailto:info@HanfelderOutdoorGudes.com">info@HanfelderOutdoorGudes.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-right" data-aos-delay="600">
                            <div class="row">
                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;
                                margin-top: 15px;"><a class="hvr-icon-up"><i class="fas fa-calendar-alt fa-5x hvr-icon contact-icons"></i></a></div>
                                <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="contact-lineMobile">Online Booking Page:</h3>
                                    <p class="contact-optionMobile"><a class="contact-linkMobile" href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc">Book Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px; padding-bottom: 20px;">
                    <div data-aos="fade-left">
                        <div style="padding: 20px 20px 20px 20px">
                            <?php echo do_shortcode("[wpforms id=\"225\" title=\"false\" description=\"false\"]"); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #597884; text-align: center; padding-top: 30px; padding-bottom: 30px;">
        <h2 style="color: #BCD9D7">Let's Go Fishing!</h2>
        <div align="center">
            <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-ContactLeft rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">learn more</a>

            <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-ContactRight rounded-0" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>


        </div>
    </div>

<?php
get_footer();