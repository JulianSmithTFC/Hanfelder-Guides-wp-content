<?php
/*
Template Name: Booking Page
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

            /* Shrink */
            .hvr-shrink {
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
            .hvr-shrink:hover, .hvr-shrink:focus, .hvr-shrink:active {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
            /*
            ---------------------------------
            Block One CSS Styles
            ---------------------------------
            */

            .blockOne{
                margin-top: 40px;
                background-color: #efefef;
                padding-top: 30px;
                padding-bottom: 30px;
            }
            .featured-blockOneInd{
                padding-left: 30px;
                padding-right: 30px;
            }
            .heading-bloackOne{
                text-align: center;
                font-size: 30px !important;
            }
            .des-blockOne{
               font-size: 12px !important;

            }

            /*
            ---------------------------------
            Block Two CSS Styles
            ---------------------------------
            */

            .blockTwo{
                background-color: #294552;

            }

            .row.display-flex {
                display: flex;
                flex-wrap: wrap;
            }
            .row.display-flex > [class*='col-'] {
                display: flex;
                flex-direction: column;
            }

            .featured-fix {
                height: 100%;
            }

            .trip-optionBlock{
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .trip-optionTitles{
                color: #597884;
                font-size: 25px !important;
                letter-spacing: 2px;

            }
            .trip-optionSub-Titles{

            }
            .trip-optionPrice{

            }
            .trip-optionDes{

            }
            .rmv-whit-space{
                margin-top: 0 !important;
                margin-bottom: 0; !important;
            }
            .optionTopBlock{
                background-color: #acc4ce;
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .optionBottomBlock{
                padding-top: 20px;
                padding-bottom: 20px;

            }
            .text-before-btn{
                color: #acc4ce !important;
            }

            .btn-Block2{
                background-color: transparent;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                border: 3px solid #efefef;
            }

            /*
            ---------------------------------
            Block Three CSS Styles
            ---------------------------------
            */

            .blockThree{
                background-color: #efefef;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .btn-policys{
                font-size: 18px;
                background-color: #597884;
                color: #FFFFFF;
                border-top-width: 0px;
                border-left-width: 0px;
                border-bottom-width: 0px;
                border-right-width: 0px;

            }
            .btn-policysMobile{
                font-size: 10px;
                background-color: #597884;
                color: #FFFFFF;
            }
            .btn-policys:active{
                background-color: #3a595c;
                color: #efefef;
            }
            .policy-icons{
                color: #294552;
            }
            .policyTitle{
                font-size: 25px !important;
                margin-top: 20px;

            }
            .policyBody{
                text-align: left;
            }

            /*
            ---------------------------------
            Block Four CSS Styles
            ---------------------------------
            */

            .blockFour{
                margin-top: 40px;
                padding-top: 30px;
                padding-bottom: 30px;
            }
            .blockFour-Heading{
                color: #acc4ce;
                font-size: 25px !important;
            }
            .blockFour-Icons{
                color: #FFFFFF;
            }
            .blockFour-Titles{
                color: #acc4ce;
            }


            /*
            ---------------------------------
            Block Five CSS Styles
            ---------------------------------
            */

            .blockFive{
                background-color: #efefef;
                padding-top: 50px;
                padding-bottom: 50px;
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
<br/>
<br/>
    <div class="container-fluid blockFive" align="center">
        <div class="container">
            <h2>Book Now!</h2>
            <div data-aos="fade-up">
                <hr class="sep-line"/>
                <!-- Start Square Appointments Embed Code --><script src='https://squareup.com/appointments/buyer/widget/94f757e2-6b60-4997-a693-7edee20732d3/JJ9YXMZ06RRY0.js'></script><!-- End Square Appointments EmbedCode -->
            </div>

        </div>
    </div>

<!--    <div class="container-fluid blockOne">-->
<!--        <div class="row" align="center">-->
<!--            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="featured-blockOneInd" data-aos="fade-down">-->
<!--                    <img src="https://stlcatfishing.com/wp-content/uploads/2013/06/stlcatfishing_familyfishing_icon.png" alt="Family Friendly Trips"/>-->
<!--                    <h2 class="heading-bloackOne">Family Friendly</h2>-->
<!--<!--                    <p class="des-blockOne">e want to share the catfishing experience with everyone and that includes the kids</p>-->-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="featured-blockOneInd" data-aos="fade-down" data-aos-delay="200">-->
<!--                    <img src="https://stlcatfishing.com/wp-content/uploads/2013/06/stlcatfishing_corporate.png" alt="Family Friendly Trips"/>-->
<!--                    <h2 class="heading-bloackOne">Corporate Fishing</h2>-->
<!--<!--                    <p class="des-blockOne">e want to share the catfishing experience with everyone and that includes the kids</p>-->-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="featured-blockOneInd" data-aos="fade-down" data-aos-delay="400">-->
<!--                    <img src="https://stlcatfishing.com/wp-content/uploads/2013/06/stlcatfishing_tripicon.png" alt="Family Friendly Trips"/>-->
<!--                    <h2 class="heading-bloackOne">Flexible Booking</h2>-->
<!--<!--                    <p class="des-blockOne">e want to share the catfishing experience with everyone and that includes the kids</p>-->-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="featured-blockOneInd" data-aos="fade-down" data-aos-delay="600">-->
<!--                    <img src="https://stlcatfishing.com/wp-content/uploads/2013/06/stlcatfishing_fishfinder_icon.png" alt="Family Friendly Trips"/>-->
<!--                    <h2 class="heading-bloackOne">Quality Equipment</h2>-->
<!--<!--                    <p class="des-blockOne">e want to share the catfishing experience with everyone and that includes the kids</p>-->-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="container-fluid blockTwo">
        <div class="container">
            <div class="row display-flex">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 trip-optionBlock">
                    <div class="featured-fix" data-aos="fade-right">
                        <div class="shadow-lg featured-fix" style="text-align: center; background-color: #efefef" align="center">
                            <div class="optionTopBlock ">
                                <h3 class="trip-optionTitles rmv-whit-space">2 People</h3>
                                <p class="trip-optionSub-Titles rmv-whit-space"></p>
                            </div>
                            <div class="optionBottomBlock ">
                                <h1 class="trip-optionPrice rmv-whit-space">$400</h1>
                                <h3 class="trip-optionDes rmv-whit-space">2 People</h3>
<!--                                <p>List</p>-->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 trip-optionBlock">
                    <div class="featured-fix" data-aos="fade-left">
                        <div class="shadow-lg featured-fix" style="text-align: center; background-color: #efefef" align="center">
                            <div class="optionTopBlock ">
                                <h3 class="trip-optionTitles rmv-whit-space">3 People</h3>
                                <p class="trip-optionSub-Titles rmv-whit-space"></p>
                            </div>
                            <div class="optionBottomBlock ">
                                <h1 class="trip-optionPrice rmv-whit-space">$600</h1>
                                <h3 class="trip-optionDes rmv-whit-space">3 People</h3>
<!--                                <p>List</p>-->
<!--                                <p>asdfsadf</p>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div align="center" style="text-align: center">
                <h3 class="text-before-btn">Daily Trips Available</h3>

                <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-Block2 rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid blockThree">
        <div class="container">
            <div data-aos="fade-left">
                <div id="blockThree" align="center">

                    <div class="hidden-sm hidden-xs">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary btn-policys rounded-0" data-toggle="collapse" data-target="#paymentPolicy" >Payment Policy <i class="fas fa-caret-down policy-icons"></i></button>
                            <button type="button" class="btn btn-secondary btn-policys rounded-0" data-toggle="collapse" data-target="#cancellationPolicy" >Cancellation Policy <i class="fas fa-caret-down policy-icons"></i></button>
                            <button type="button" class="btn btn-secondary btn-policys rounded-0" data-toggle="collapse" data-target="#privacyPolicy" >Privacy Policy <i class="fas fa-caret-down policy-icons"></i></button>
                        </div>
                    </div>

                    <div class="hidden-lg hidden-md">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary btn-policysMobile rounded-0" data-toggle="collapse" data-target="#paymentPolicy" >Payment Policy <i class="fas fa-caret-down policy-icons"></i></button>
                            <button type="button" class="btn btn-secondary btn-policysMobile rounded-0" data-toggle="collapse" data-target="#cancellationPolicy" >Cancellation Policy <i class="fas fa-caret-down policy-icons"></i></button>
                            <button type="button" class="btn btn-secondary btn-policysMobile rounded-0" data-toggle="collapse" data-target="#privacyPolicy" >Privacy Policy <i class="fas fa-caret-down policy-icons"></i></button>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div id="paymentPolicy" class="collapse show" data-parent="#blockThree">
                            <h3 class="policyTitle">Payment Policy</h3>
                            <p class="policyBody">A required deposit of $100 will need to be made via PayPal to reserve your trip. The remaining balance must be paid upfront at the time of trip, unless other arrangements are made prior to day of your trip.</p>
                        </div>
                        <div id="cancellationPolicy" class="collapse" data-parent="#blockThree">
                            <h3 class="policyTitle">Cancellation Policy</h3>
                            <p class="policyBody">To avoid a penalty, customers must cancel their trip 7 days prior to the date of your reservation. Failure to do so will result in a loss of the $100 deposit.</p>
                            <p class="policyBody">Captain Mike Hanfelder reserves the right to refuse service or cancel reservation due to any unforeseen issues concerning emergency situations or safety issues. (Weather, vessel conditions, river conditions, etc.)</p>
                            <p class="policyBody">If the captain cancels your trip for any reason, he will gladly
                                reschedule for the earliest possible date.</p>

                        </div>
                        <div id="privacyPolicy" class="collapse " data-parent="#blockThree">
                            <h3 class="policyTitle">Privacy Policy</h3>
                            <p class="policyBody"></p>
                            <div class="policyBody">
                                <h2 class="policyTitle">Web Site Terms and Conditions of Use</h2>
                                <h3>1. Terms</h3>
                                <p>By accessing this web site, you are agreeing to be bound by these web site Terms and
                                    Conditions of Use, all applicable laws and regulations, and agree that you are
                                    responsible for compliance with any applicable local laws. If you do not agree with
                                    any of these terms, you are prohibited from using or accessing this site. The
                                    materials contained in this web site are protected by applicable copyright and trade
                                    mark law.</p>

                                <h3>2. Use License</h3>
                                <ol type="a">
                                    <li>Permission is granted to temporarily download one copy of the materials
                                        (information or software) on Hanfelder's Outdoor Guide's web site for personal,
                                        non-commercial transitory viewing only. This is the grant of a license, not a
                                        transfer of title, and under this license you may not:

                                        <ol type="i">
                                            <li>modify or copy the materials;</li>
                                            <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                                            <li>attempt to decompile or reverse engineer any software contained on Hanfelder's Outdoor Guide's web site;</li>
                                            <li>remove any copyright or other proprietary notations from the materials; or</li>
                                            <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                                        </ol>
                                    </li>
                                    <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by Hanfelder's Outdoor Guide at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
                                </ol>
                                <h3>3. Disclaimer</h3>
                                <ol type="a">
                                    <li>The materials on Hanfelder's Outdoor Guide's web site are provided "as is". Hanfelder's Outdoor Guide makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Hanfelder's Outdoor Guide does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.</li>
                                </ol>
                                <h3>4. Limitations</h3>
                                <p>In no event shall Hanfelder's Outdoor Guide or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Hanfelder's Outdoor Guide's Internet site, even if Hanfelder's Outdoor Guide or a Hanfelder's Outdoor Guide authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
                                <h3>5. Revisions and Errata</h3>
                                <p>The materials appearing on Hanfelder's Outdoor Guide's web site could include technical, typographical, or photographic errors. Hanfelder's Outdoor Guide does not warrant that any of the materials on its web site are accurate, complete, or current. Hanfelder's Outdoor Guide may make changes to the materials contained on its web site at any time without notice. Hanfelder's Outdoor Guide does not, however, make any commitment to update the materials.</p>
                                <h3>6. Links</h3>
                                <p>Hanfelder's Outdoor Guide has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Hanfelder's Outdoor Guide of the site. Use of any such linked web site is at the user's own risk.</p>
                                <h3>7. Site Terms of Use Modifications</h3>
                                <p>Hanfelder's Outdoor Guide may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p>

                                <h3>8. Governing Law</h3>

                                <p>Any claim relating to Hanfelder's Outdoor Guide's web site shall be governed by the laws of the State of Illinois without regard to its conflict of law provisions.</p>

                                <p>General Terms and Conditions applicable to Use of a Web Site.</p>



                                <h2 class="policyTitle">Privacy Policy</h2>

                                <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>

                                <ul>
                                    <li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
                                    <li>We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.</li>
                                    <li>We will only retain personal information as long as necessary for the fulfillment of those purposes.</li>
                                    <li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
                                    <li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li>
                                    <li>We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
                                    <li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li>
                                </ul>

                                <p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container blockFour" align="center">
        <h3 class="blockFour-Heading">Check The Local Conditions Before Booking Your Trip</h3>
        <br/>
        <br/>
        <div class="row" align="center">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-blockOneInd" data-aos="fade-down">
                    <p style="font-size: 30px"><i class="fas fa-cloud-sun-rain fa-6x blockFour-Icons"></i></p>
                    <h2 class="blockFour-Titles">Local Weather</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-blockOneInd" data-aos="fade-down" data-aos-delay="200">
                    <p style="font-size: 30px"><i class="fas fa-water fa-6x blockFour-Icons"></i></p>
                    <h2 class="blockFour-Titles">Lake Conditions</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-blockOneInd" data-aos="fade-down" data-aos-delay="400">
                    <p style="font-size: 30px"><i class="fas fa-tachometer-alt fa-6x blockFour-Icons"></i></p>
                    <h2 class="blockFour-Titles">Barometric Pressure</h2>
                </div>
            </div>
        </div>
    </div>





<?php
get_footer();