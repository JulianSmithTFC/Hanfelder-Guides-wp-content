
<style type="text/css">
    .booking-block{
        background-color: #294552;
        padding: 25px 25px 25px 25px;
        color: #79A8A8 !important;
    }
    .col-headings{
        text-align: center;
        font-size: 30px !important;
        color: #FFFFFF !important;
    }
    .contact-option{
        text-align: left;
        padding-right: 15px;
        color: ;
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
    .rate-field{
        text-align: left;
        font-size: 20px !important;
        color: #9eb9b3;
    }
    .lake-title{

    }
    .lake-subfield{
        text-align: left;
    }
    .lakes{
        font-size: 14px;
    }
    .sep-line{
        border-width: 4px;
        border-color: #7aa9a9;
    }
    .person-icon{
        color: #FFFFFF !important;
    }

    .contact-icons{
     color: #FFFFFF !important;
    }

    /* Icon Up */
    @-webkit-keyframes hvr-icon-up {
        0%,
        50%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        25%,
        75% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }
    }
    @keyframes hvr-icon-up {
        0%,
        50%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        25%,
        75% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }
    }
    /* Icon Up */
    .hvr-icon-up {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    }
    .hvr-icon-up .hvr-icon {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    .hvr-icon-up:hover .hvr-icon, .hvr-icon-up:focus .hvr-icon, .hvr-icon-up:active .hvr-icon {
        -webkit-animation-name: hvr-icon-up;
        animation-name: hvr-icon-up;
        -webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }

    .bounce {
        -webkit-animation: bounce 2s;
        animation: bounce 2s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    @-webkit-keyframes bounce {
        0%,
        25%,
        50%,
        75%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        40% {
            -webkit-transform: translateY(-14px);
            transform: translateY(-14px);
        }
        60% {
            -webkit-transform: translateY(-12px);
            transform: translateY(-12px);
        }
    }

    @keyframes bounce {
        0%,
        25%,
        50%,
        75%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        40% {
            -webkit-transform: translateY(-14px);
            transform: translateY(-14px);
        }
        60% {
            -webkit-transform: translateY(-12px);
            transform: translateY(-12px);
        }


    .slide-in-top {
        -webkit-animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    @-webkit-keyframes slide-in-top {
        0% {
            -webkit-transform: translateY(-1000px);
            transform: translateY(-1000px);
            opacity: 0;
        }
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }
    }
    @keyframes slide-in-top {
        0% {
            -webkit-transform: translateY(-1000px);
            transform: translateY(-1000px);
            opacity: 0;
        }
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }
    }



</style>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=1191891704257867&autoLogAppEvents=1"></script>

<div align="center" class="booking-block">
    <div class="container-fluid">


        <?php if( have_rows('booking_column_1') ):
            while( have_rows('booking_column_1') ): the_row(); ?>
                <div class="col-lg-4 hidden-md hidden-sm hidden-xs">

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
                                <h3 class="contact-line"><?php the_sub_field('contact_1_heading'); ?></h3>
                                <p class="contact-option"><a class="contact-link" href="tel:+1-662-230-4952"><?php the_sub_field('contact_1_contact_info_text'); ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-delay="300">
                        <div class="row">
                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12" >
                                    <a class="hvr-icon-up"><i class="fas fa-envelope-open fa-3x hvr-icon contact-icons"></i></a>
                               </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                <h3 class="contact-line"><?php the_sub_field('contact_2_heading'); ?></h3>
                                <p class="contact-option"><a class="contact-link" href="mailto:info@HanfelderOutdoorGudes.com"><?php the_sub_field('contact_2_contact_info_text'); ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-delay="600">
                        <div class="row">
                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"><a class="hvr-icon-up"><i class="fas
                            fa-calendar-alt fa-3x hvr-icon contact-icons"></i></a></div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                <h3 class="contact-line"><?php the_sub_field('contact_3_heading'); ?></h3>
                                <p class="contact-option"><a class="contact-link" href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc"><?php the_sub_field('contact_3_contact_info_text'); ?></a></p>
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
                                <h3 class="contact-lineMobile"><?php the_sub_field('contact_1_heading'); ?></h3>
                                <p class="contact-optionMobile"><a class="contact-linkMobile" href="tel:+1-662-230-4952"><?php the_sub_field('contact_1_contact_info_text'); ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-delay="300">
                        <div class="row">
                            <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;
                            margin-top: 15px;"><a class="hvr-icon-up"><i class="fas fa-envelope-open fa-5x hvr-icon contact-icons"></i></a></div>
                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                <h3 class="contact-lineMobile"><?php the_sub_field('contact_2_heading'); ?></h3>
                                <p class="contact-optionMobile"><a class="contact-linkMobile" href="mailto:info@HanfelderOutdoorGudes.com"><?php the_sub_field('contact_2_contact_info_text'); ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-delay="600">
                        <div class="row">
                            <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;
                            margin-top: 15px;"><a class="hvr-icon-up"><i class="fas fa-calendar-alt fa-5x hvr-icon contact-icons"></i></a></div>
                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                <h3 class="contact-lineMobile"><?php the_sub_field('contact_3_heading'); ?></h3>
                                <p class="contact-optionMobile"><a class="contact-linkMobile" href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc"><?php the_sub_field('contact_3_contact_info_text'); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('booking_column_2') ):
            while( have_rows('booking_column_2') ): the_row(); ?>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                    <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300">
                        <h2 class="col-headings"><?php the_sub_field('column_heading'); ?></h2>
                        <hr class="sep-line"/>
                    </div>


                    <p class="rate-field" data-aos="fade-down"><i class="fas fa-male fa-2x person-icon"
                                                                  data-aos="fade-down" data-aos-delay="200"></i> <i
                                class="fas fa-male fa-2x person-icon" data-aos="fade-down" data-aos-delay="400"></i> <?php the_sub_field('rate_field_1'); ?></p>
                    <br/>
                    <p class="rate-field" data-aos="fade-down" data-aos-delay="400"><i class="fas fa-male fa-2x
                    person-icon" data-aos="fade-down" data-aos-delay="300"></i> <i class="fas fa-male fa-2x
                    person-icon" data-aos="fade-down" data-aos-delay="500"></i> <i class="fas fa-male fa-2x
                    person-icon" data-aos="fade-down" data-aos-delay="700"></i> <?php the_sub_field('rate_field_2');
                    ?></p>
                    <br/>
                    <p class="lake-subfield"><i class="fas fa-square-full fa-xs"></i> Daily Trips Available</p>
                    <p class="lake-subfield"><i class="fas fa-square-full fa-xs"></i> Please call to request hunting guided
                        trips!</p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('booking_column_3') ):
            while( have_rows('booking_column_3') ): the_row(); ?>

                <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
                    <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="800">
                        <h2 class="col-headings"><?php the_sub_field('column_heading'); ?></h2>
                        <hr class="sep-line"/>
                    </div>
                    <div class="fb-page" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="600" data-href="https://www.facebook.com/HanfelderGuides/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/HanfelderGuides/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HanfelderGuides/">Hanfelder&#039;s Outdoor Guides,LLC</a></blockquote></div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 hidden-lg">
                    <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="800">
                        <h2 class="col-headings"><?php the_sub_field('column_heading'); ?></h2>
                        <hr class="sep-line"/>
                    </div>
                    <div class="fb-page" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="600" data-href="https://www.facebook.com/HanfelderGuides/" data-tabs="" data-width="200" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/HanfelderGuides/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HanfelderGuides/">Hanfelder&#039;s Outdoor Guides,LLC</a></blockquote></div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>












