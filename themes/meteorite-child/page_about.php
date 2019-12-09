<?php
/*
Template Name: About Page
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

            .sep-line{
                border-width: 4px;
                border-color: #efefef;
            }

            /*
            ---------------------------------
            Block One CSS Styles
            ---------------------------------
            */
            .blockOne-container{
                padding-top: 50px;
                padding-bottom: 50px;
                padding-left: 20px;
                padding-right: 20px;
            }
            .blockOne-name{
                color: #acc4ce;
            }
            .blockOne-title{
                color: #acc4ce;
            }
            .blockOne-heading{
                color: #acc4ce;
            }
            .blockOne-des{
                color: #FFFFFF;
            }

            /*
            ---------------------------------
            Block Two CSS Styles
            ---------------------------------
            */

            .blockTwo-container{
                height: 400px;
                background-image: url("https://hanfelderguides.com/wp-content/uploads/2019/03/About-Page-Block-Two-Background.jpg");
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .blockTwo-innerContainer{
                padding-top: 130px;
                background:rgba(239,239,239,0.5);
                width: 100%;
                height: 100%;
            }

            .blockTwo-btn{
                background-color: #3a595c;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                color: #efefef;
                border-color: transparent;
                font-weight: bold;
            }


            /*
            ---------------------------------
            Block Three CSS Styles
            ---------------------------------
            */

            .blockThree-container{
                background-color: #efefef;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .blockThree-mainHeading{
                font-size: 25px !important;
            }
            .blockThree-subHeading{
                font-size: 18px !important;
                color: #7ba9a9;
            }
            .blockThree-ul{
                list-style-type: none;
            }
            .blockThree-li{
                font-size: 16px;
            }
            .blockThree-ul .blockThree-li:before {
                font-family: 'FontAwesome';
                content: '\f00c';
                margin:0 5px 0 -15px;
                font-size: 14px;
                color: #3a595c;
            }
            .sep-line-blockThree{
                border-width: 4px;
                border-color: #7aa9a9;
            }

            /*
            ---------------------------------
            Block Four CSS Styles
            ---------------------------------
            */

            .blockFour-container{
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .blockFour-header{
                text-align: center;
                color: #acc4ce;
                font-size: 45px !important;
            }

            .blockFour-sep{
                text-align: center;
                border-width: 4px;

            }

            .lakes-header{
                text-align: center;
                color: #acc4ce;
                font-size: 25px !important;
            }

            .sep-lakes{
                text-align: center;
                border-width: 2px;
            }

            .Lakes-ul{
                list-style-type: none;
                text-align: left;
            }

            .Lakes-li{
                text-align: left;
                font-size: 16px;
                color: #FFFFFF;
            }

            .Lakes-ul .Lakes-li:before {
                font-family: 'FontAwesome';
                content: '\f068';
                margin:0 5px 0 -15px;
                font-size: 16px;
                color: #9eb9b3;
            }

            .btn-Lakes{
                background-color: transparent;
                margin-bottom: 15px;
                margin-top: 15px;
                padding: 5px 5px 5px 5px;
                font-size: 18px;
                border: 3px solid #efefef;
                text-align: center;
            }
            .btn-Lakes-icons{
                color: #9eb9b3;
            }

            /*
            ---------------------------------
            Block Five CSS Styles
            ---------------------------------
            */
            .blockFive-container{
                background-color: #efefef;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .btn-blockFive {
                margin-top: 0px !important;
                margin-bottom: 0px !important;
                background-color: #597884;
                font-size: 14px;
                padding: 10px 10px 10px 10px !important;
                border-color: #00070a;
            }
            .btn-container{

            }
            .service-heading{
                font-size: 30px !important;

            }
            .blockFive-content{

            }
            .blockFiveMobileHeading{
                color: #3a595c;
                font-size: 20px;
            }
            .btn-MobileServices{
                color: #3a595c;
                font-size: 18px;
            }

            /*
            ---------------------------------
            Block Six CSS Styles
            ---------------------------------
            */
            .blockSix-container{
                background-color: #294552;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .blockSix-heading{
                color: #acc4ce;

            }
            .btn-blockSix{
                background-color: transparent;
                margin: 30px 30px 30px 30px;
                padding: 15px 15px 15px 15px;
                font-size: 22px;
                border: 3px solid #efefef;
                font-weight: bold;
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

<?php if( have_rows('guide_#1') ):
    while( have_rows('guide_#1') ): the_row(); ?>
        <div class="container blockOne-container">
            <div class="row" align="center">
                <div data-aos="fade-left">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-centered">
                        <p><img class="rounded-circle" style="" src="https://hanfelderguides.com/wp-content/uploads/2019/02/contact-page.jpg" alt="" width="270px" ></p>
                        <h3 class="blockOne-name"><?php the_sub_field('name_or_title'); ?></h3>
                        <h4 class="blockOne-title">USCG Certified Captian & Fishing Guide</h4>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-centered hidden-sm hidden-xs" align="left">
                        <h2 class="blockOne-heading">Hello,</h2>
                        <hr class="sep-line"/>
                        <p class="blockOne-des"><?php the_sub_field('bio_or_description_'); ?></p>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-centered hidden-lg hidden-md" align="center">
                        <h2 class="blockOne-heading">Hello,</h2>
                        <hr class="sep-line"/>
                        <p class="blockOne-des"><?php the_sub_field('bio_or_description_'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


    <div class="container-fluid blockThree-container">
        <div class="container">
            <div class="row" align="center">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-centered">
                    <h2 class="blockThree-mainHeading" data-aos="fade-down">What Do I Need To Bring?</h2>
                    <hr class="sep-line-blockThree" data-aos="fade-down" data-aos-delay="200"/>
                    <h3 class="blockThree-subHeading" data-aos="fade-down" data-aos-delay="400">Fishing</h3>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Clothes fit for the weather (Rain gear is recommended)</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="550">Cooler for fish after trip is over</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="600">Snacks and drinks of choice</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="650">Fishing license</li>
                        </ul>
                    </div>
                    <h3 class="blockThree-subHeading" data-aos="fade-down" data-aos-delay="400">Hunting</h3>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Clothes fit for hunting</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="550">Gun and Ammo</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="600">Hunting license</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-centered">
                    <h2 class="blockThree-mainHeading" data-aos="fade-down">Whats Included?</h2>
                    <hr class="sep-line-blockThree" data-aos="fade-down" data-aos-delay="200"/>
                    <h3 class="blockThree-subHeading" data-aos="fade-down" data-aos-delay="400">Fishing</h3>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Ranger boat</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="550">Fish cleaning</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="600">Other</li>
                        </ul>
                    </div>
                    <h3 class="blockThree-subHeading" data-aos="fade-down" data-aos-delay="400">Hunting</h3>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Calls</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="550">Decoys</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="600">Other</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-centered">
                    <h2 class="blockThree-mainHeading" data-aos="fade-down">Additional Information</h2>
                    <hr class="sep-line-blockThree" data-aos="fade-down" data-aos-delay="200"/>
                    <h3 class="blockThree-subHeading" data-aos="fade-down" data-aos-delay="400">Fishing</h3>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Special needs available upon request</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="550">Small cooler can be brought on board</li>
                        </ul>
                    </div>
                    <h3 class="blockThree-subHeading" data-aos="fade-down" data-aos-delay="400">Hunting</h3>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Additional equipment is available upon request</li>
                            <li class="blockThree-li" data-aos="fade-down" data-aos-delay="550">Loaner guns, waders, ext. </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-centered">
                    <h2 class="blockThree-mainHeading" data-aos="fade-down">Meeting Location</h2>
                    <hr class="sep-line-blockThree" data-aos="fade-down" data-aos-delay="200"/>
                    <div style="text-align: left">
                        <ul class="blockThree-ul">
                            <li class="blockThree-li"  data-aos="fade-down" data-aos-delay="500">Contact us upon day
                                of fishing or hunting trip for meeting location.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid blockTwo-container">
        <div class="container-fluid blockTwo-innerContainer">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-centered">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" align="center">
                            <a href="https://hanfelderguides.com/gallery/" class="btn btn-primary btn-lg text-uppercase blockTwo-btn rounded-0" tabindex="-1" role="button" aria-disabled="true">Check out Our Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid blockFour-container">
        <h2 class="blockFour-header">Lakes We Fish</h2>
        <hr class="blockFour-sep shadow-lg"/>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-centered" align="center">
                <h3 class="lakes-header">Mississippi</h3>
                <hr class="sep-lakes"/>
                <ul class="Lakes-ul">
                    <li class="Lakes-li"  data-aos="fade-down" >Grenada Lake</li>
                    <li class="Lakes-li" data-aos="fade-down" >Sardis Lake</li>
                </ul>
                <div class="collapse" id="mislake">
                    <ul class="Lakes-ul">
                        <li class="Lakes-li">Enid Lake</li>
                        <li class="Lakes-li">Arkabutla Lake</li>
                        <li class="Lakes-li">Lake Washington</li>
                        <li class="Lakes-li">Ross Barnett Reservoir</li>
                        <li class="Lakes-li">Eagle Lake</li>
                    </ul>
                </div>
                <a class="btn btn-primary btn-lg btn-Lakes rounded-0 shadow" data-toggle="collapse" href="#mislake"
                   role="button" aria-expanded="false" aria-controls="mislake">Show More <i class="fas fa-caret-down btn-Lakes-icons"></i></a>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-centered" align="center">
                <h3 class="lakes-header">Illinois</h3>
                <hr class="sep-lakes"/>
                <ul class="Lakes-ul">
                    <li class="Lakes-li"  data-aos="fade-down" >Carlyle Lake</li>
                    <li class="Lakes-li" data-aos="fade-down" >Rend Lake</li>
                </ul>
                <div class="collapse" id="illlake">
                    <ul class="Lakes-ul">
                        <li class="Lakes-li">Kinkaid Lake</li>
                        <li class="Lakes-li">Coffeen Lake</li>
                        <li class="Lakes-li">Lake Glenn Shoals</li>
                        <li class="Lakes-li">Lake Lou Yaeger</li>
                        <li class="Lakes-li">Lake of Egypt</li>
                    </ul>
                </div>
                <a class="btn btn-primary btn-lg btn-Lakes rounded-0 shadow" data-toggle="collapse" href="#illlake"
                   role="button" aria-expanded="false" aria-controls="illlake">Show More <i class="fas fa-caret-down btn-Lakes-icons"></i></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-centered" align="center">
                <h3 class="lakes-header">Missouri</h3>
                <hr class="sep-lakes"/>
                <ul class="Lakes-ul">
                    <li class="Lakes-li"  data-aos="fade-down" >Lake of the Ozarks</li>
                    <li class="Lakes-li" data-aos="fade-down" >Truman Reservoir</li>
                </ul>

            </div>
        </div>
    </div>


    <div class="container-fluid blockFive-container">
        <div class="container">
            <div data-aos="fade-right">
                <div class="row">

                    <div id="blockFiveDesktop" class="hidden-sm hidden-xs">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-centered btn-container">
                            <div class="btn-group-vertical shadow-lg" role="group">
                                <button type="button" class="btn btn-secondary rounded-0 btn-blockFive" data-toggle="collapse" data-target="#One" >Crappie Fishing</button>
                                <button type="button" class="btn btn-secondary rounded-0 btn-blockFive" data-toggle="collapse" data-target="#Two" >Trophy Catfishing</button>
                                <button type="button" class="btn btn-secondary rounded-0 btn-blockFive" data-toggle="collapse" data-target="#Three" >Waterfowl Hunts</button>
                                <button type="button" class="btn btn-secondary rounded-0 btn-blockFive" data-toggle="collapse" data-target="#Four" >Deer hunting</button>
                                <button type="button" class="btn btn-secondary rounded-0 btn-blockFive" data-toggle="collapse" data-target="#Five" >Turkey Hunts</button>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-centered">
                            <div class="accordion-group">
                                <div id="One" class="collapse show" data-parent="#blockFiveDesktop">
                                    <h3 class="service-heading">Crappie Fishing</h3>
                                    <p class="blockFive-content">We offer the best top-notch equipment and techniques to be successful on the water. We fish in Mississippi, Illinois and Missouri Lakes. Depending on the lake, we fish, on average, lots of 2-pound crappie. During spawn we target giant 3 pounders which are considered trophies. We stay on top of several great fishers to catch fish where they are biting best at the time of your trip. When you show up, all you do is get in our boat and catch fish. We take care of all the tackle hook baiting and operation of the boat. Our guides provide full service for your experience of a lifetime. Get ready for a comfortable day of fishing from a big fiberglass Ranger boat. 100% success rate.</p>
                                </div>
                                <div id="Two" class="collapse" data-parent="#blockFiveDesktop">
                                    <h3 class="service-heading">Trophy Catfishing</h3>
                                    <p class="blockFive-content">Come experience some giant catfish on rod and reel. With our US Coast Guard certified captains. These giant fish will put your arms to the test. We catch big blue cats on the Mississippi River. All the big fish over 40 pounds are released. You can keep some eaters if you wish, but our main goal is to break your personal giant catfish record. There is always a possibility for a world record as well since we fish where they live. We provide all the best tackle and always have fresh bait to increase your chances for a big catch.</p>

                                </div>
                                <div id="Three" class="collapse" data-parent="#blockFiveDesktop">
                                    <h3 class="service-heading">Waterfowl Hunts</h3>
                                    <p class="blockFive-content">$200 per gun corporate hunts available upon request. We offer heated blinds, pits, layout hunts, panel blinds depending on where birds are using. Our guides have years of experience calling and decoying birds to make your hunt successful. Whether you choose ducks or geese, we will strive to cater your hunt. We provide all the latest and greatest equipment including decoys. We hunt some giant decoy spreads to micro spreads on smart weary birds. Both morning and afternoon hunts are available. You need to have appropriate gear including clothes, gun and ammo. We can recommend which is best for the hunt, so you're prepared. Also, a valid hunting license with stamps is required for hunting. The license should be for the appropriate state and date we are hunting in. Any additional equipment can be provided upon special requests. We have loaner guns, waders, etc.</p>

                                </div>
                                <div id="Four" class="collapse" data-parent="#blockFiveDesktop">
                                    <h3 class="service-heading">Deer hunting</h3>
                                    <p class="blockFive-content">We offer fully guided hunts to self-guided, and deer leases where you do it all depending on your needs. 30+ years’ experience in the words, our guides are very qualified as some of the best money can buy. Our guides hang stands, run the cameras, and stay on top of our properties to know where to find your trophy Buck. It's your responsibility to bring clothes and proper weapon of choice for your guided hunt. Valid license and tags are also required according to state specific regulations. Give us a call to talk to one of our guides so we can best outfit your experience of a lifetime. We can provide a guns, ammo, and additional equipment upon a special request.</p>

                                </div>
                                <div id="Five" class="collapse" data-parent="#blockFiveDesktop">
                                    <h3 class="service-heading">Turkey Hunts</h3>
                                    <p class="blockFive-content">As avid professional turkey hunters with years of experience managing and killing trophy birds is our specialty. We offer fully guided hunts all over in Illinois, Mississippi, and Missouri. Three-day or five-day hunts are available. We provide calling, decoys, and anything else needed for a successful hunt. Our turkey hunts are very limited, so make sure you book in advance to get your dates. Make sure you have all your license and tags on your hunt, state specific requirements.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion hidden-lg hidden-md" id="blockFiveMobile">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 class="blockFiveMobileHeading">
                                    <button class="btn btn-link btn-MobileServices" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Crappie Fishing <i class="fas fa-caret-down"></i></button>
                                </h3>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#blockFiveMobile">
                                <div class="card-body">
                                    <p class="blockFive-content">We offer the best top-notch equipment and techniques to be successful on the water. We fish in Mississippi, Illinois and Missouri Lakes. Depending on the lake, we fish, on average, lots of 2-pound crappie. During spawn we target giant 3 pounders which are considered trophies. We stay on top of several great fishers to catch fish where they are biting best at the time of your trip. When you show up, all you do is get in our boat and catch fish. We take care of all the tackle hook baiting and operation of the boat. Our guides provide full service for your experience of a lifetime. Get ready for a comfortable day of fishing from a big fiberglass Ranger boat. 100% success rate.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 class="blockFiveMobileHeading">
                                    <button class="btn btn-link collapsed btn-MobileServices" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Trophy Catfishing <i class="fas fa-caret-down"></i></button>
                                </h3>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#blockFiveMobile">
                                <div class="card-body">
                                    <p class="blockFive-content">Come experience some giant catfish on rod and reel. With our US Coast Guard certified captains. These giant fish will put your arms to the test. We catch big blue cats on the Mississippi River. All the big fish over 40 pounds are released. You can keep some eaters if you wish, but our main goal is to break your personal giant catfish record. There is always a possibility for a world record as well since we fish where they live. We provide all the best tackle and always have fresh bait to increase your chances for a big catch.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 class="blockFiveMobileHeading">
                                    <button class="btn btn-link collapsed btn-MobileServices" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Waterfowl Hunts <i class="fas fa-caret-down"></i></button>
                                </h3>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#blockFiveMobile">
                                <div class="card-body">
                                    <p class="blockFive-content">$200 per gun corporate hunts available upon request. We offer heated blinds, pits, layout hunts, panel blinds depending on where birds are using. Our guides have years of experience calling and decoying birds to make your hunt successful. Whether you choose ducks or geese, we will strive to cater your hunt. We provide all the latest and greatest equipment including decoys. We hunt some giant decoy spreads to micro spreads on smart weary birds. Both morning and afternoon hunts are available. You need to have appropriate gear including clothes, gun and ammo. We can recommend which is best for the hunt, so you're prepared. Also, a valid hunting license with stamps is required for hunting. The license should be for the appropriate state and date we are hunting in. Any additional equipment can be provided upon special requests. We have loaner guns, waders, etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 class="blockFiveMobileHeading">
                                    <button class="btn btn-link collapsed btn-MobileServices" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Deer hunting <i class="fas fa-caret-down"></i></button>
                                </h3>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#blockFiveMobile">
                                <div class="card-body">
                                    <p class="blockFive-content">We offer fully guided hunts to self-guided, and deer leases where you do it all depending on your needs. 30+ years’ experience in the words, our guides are very qualified as some of the best money can buy. Our guides hang stands, run the cameras, and stay on top of our properties to know where to find your trophy Buck. It's your responsibility to bring clothes and proper weapon of choice for your guided hunt. Valid license and tags are also required according to state specific regulations. Give us a call to talk to one of our guides so we can best outfit your experience of a lifetime. We can provide a guns, ammo, and additional equipment upon a special request.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 class="blockFiveMobileHeading">
                                    <button class="btn btn-link collapsed btn-MobileServices" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">Turkey Hunts <i class="fas fa-caret-down"></i></button>
                                </h3>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#blockFiveMobile">
                                <div class="card-body">
                                    <p class="blockFive-content">As avid professional turkey hunters with years of experience managing and killing trophy birds is our specialty. We offer fully guided hunts all over in Illinois, Mississippi, and Missouri. Three-day or five-day hunts are available. We provide calling, decoys, and anything else needed for a successful hunt. Our turkey hunts are very limited, so make sure you book in advance to get your dates. Make sure you have all your license and tags on your hunt, state specific requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid blockSix-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-centered" align="center">
                <h2 class="blockSix-heading">Book Your Trip Now!</h2>
                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-blockSix rounded-0 shadow-lg" tabindex="-1" role="button" aria-disabled="true" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">book now</a>
            </div>
        </div>
    </div>



<?php
get_footer();