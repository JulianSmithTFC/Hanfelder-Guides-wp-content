<style type="text/css">
    .headBlock{
        background-image: url('<?php the_field('header_image'); ?>');
        min-height: 650px;
        padding: 50px 50px 50px 50px;
        background-repeat: no-repeat;
        background-position: right top;
        background-size: cover;
        background-attachment: fixed;
    }

    .headBlock2{
        background-image: url('<?php the_field('header_image'); ?>');
        min-height: 600px;
        padding: 50px 50px 50px 50px;
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        background-attachment: fixed;
    }
    .btn-headerButtonLeft{
        background-color: #597884;
        margin: 30px 30px 30px 30px;
        padding: 15px 15px 15px 15px;
        font-size: 22px;
        color: #efefef;
        border-color: transparent;
        font-weight: bold !important;
        letter-spacing: 2px;
    }
    .btn-headerButtonRight{
        background-color: transparent;
        margin: 30px 30px 30px 30px;
        padding: 15px 15px 15px 15px;
        font-size: 22px;
        border: 3px solid #597884;
        color: #597884;
        font-weight: bold !important;
        letter-spacing: 2px;
    }
</style>

<div data-aos="fade-down">
    <div>
        <div class="hidden-sm hidden-xs" align="center">
            <div class="headBlock">
                <div style="background-color: rgba(0, 0, 0, 0.5); max-width: 600px; padding: 20px 20px 20px 20px;">
                    <div data-aos="fade-down" data-aos-delay="200">
                    <h1 style="font-size: 70px !important; font-weight: 400; color: #FFF;"><?php the_field('header_text'); ?></h1>
                    </div>
                </div>
                <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="right">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" align="right">
                            <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-headerButtonLeft rounded-0" tabindex="-1" role="button" aria-disabled="true">learn more</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="left">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" align="left">
                            <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-headerButtonRight rounded-0" tabindex="-1" role="button" aria-disabled="true">book now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div data-aos="fade-down">
        <div class="hidden-lg hidden-md" align="center">
            <div class="headBlock2">
                <div style="background-color: rgba(0, 0, 0, 0.5); padding: 20px 20px 20px 20px;">
                    <div data-aos="fade-down" data-aos-delay="200">
                    <h1 style="font-size: 35px !important; font-weight: 400; color: #FFF"><?php the_field('header_text'); ?></h1>
                    </div>
                </div>
                <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="center">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" align="center">
                            <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-headerButtonLeft rounded-0" tabindex="-1" role="button" aria-disabled="true">learn more</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="center">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" align="center">
                            <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-headerButtonRight rounded-0" tabindex="-1" role="button" aria-disabled="true">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

