

<style>
    .featured-box{
        background-color: #294552;
        margin: 15px 15px 15px 15px;
        border: 4px solid <?php the_field('services_box_boarder_color'); ?>;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
        height: 100%;
    }

    .title-image-box{
        height: 200px !important;
        background-size: cover;
        background-position: top;
        padding: 50px;
    }
    .featured-title{
        font-size: 22px;
        width: 95%;
        padding: 5px 5px 5px 5px;
        background: #597884;
        color: white;
        font-weight: bold;
        letter-spacing: 1.5px;
        line-height: 1.6;
    }
    .featured-title:hover{
        color: #3a595c;
        background-color: rgba(229, 229, 229, 0.5);
        border: 3px solid #597884;
    }


    .fearured-description-box{
        padding: 10px 10px 10px 10px;
        height: 100%;
    }
    .desc-text{
        text-align: center;
        color: #FFFFFF !important;
    }

    .fea-link{

    }
    .fea-link:hover, .fea-link:active, .fea-link:focus {
        color: white !important;
        text-decoration: none;
    }

    .cta-btn-holder{
        padding: 25px 25px 25px 25px;
    }

    .btn-featured-style{
        background-color: #597884;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 10px 10px 10px 10px;
        font-size: 18px;
        color: #FFFFFF;
        border-color: #efefef;
        border-width: 3px;
        font-weight: bold;
    }
    .btn-featured-style:hover{
        background-color: #3a595c;
        color: #efefef;
        border-width: 4px;
        border-color: #3a595c;
    }
    .btn-featured-icon{
        color: #efefef;
        font-size: 14px;
        font-weight: unset;
    }

    /* Bob */
    @-webkit-keyframes hvr-bob {
        0% {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
        50% {
            -webkit-transform: translateY(-4px);
            transform: translateY(-4px);
        }
        100% {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
    }
    @keyframes hvr-bob {
        0% {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
        50% {
            -webkit-transform: translateY(-4px);
            transform: translateY(-4px);
        }
        100% {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
    }
    @-webkit-keyframes hvr-bob-float {
        100% {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
    }
    @keyframes hvr-bob-float {
        100% {
            -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
        }
    }
    .hvr-bob {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    }
    .hvr-bob:hover, .hvr-bob:focus, .hvr-bob:active {
        -webkit-animation-name: hvr-bob-float, hvr-bob;
        animation-name: hvr-bob-float, hvr-bob;
        -webkit-animation-duration: .3s, 1.5s;
        animation-duration: .3s, 1.5s;
        -webkit-animation-delay: 0s, .3s;
        animation-delay: 0s, .3s;
        -webkit-animation-timing-function: ease-out, ease-in-out;
        animation-timing-function: ease-out, ease-in-out;
        -webkit-animation-iteration-count: 1, infinite;
        animation-iteration-count: 1, infinite;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-direction: normal, alternate;
        animation-direction: normal, alternate;
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
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
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
    .btn-book-Featured{
        background-color: transparent;
        margin-top: 30px;
        padding: 15px 15px 15px 15px;
        font-size: 18px;
        border: 3px solid #efefef;
        margin-bottom: 30px;
    }

</style>


<div style="background: <?php the_field('services_box_outer_color'); ?>">
    <div class="container hidden-sm hidden-xs" align="center">
        <div class="row display-flex" style="padding: 30px 30px 30px 30px;">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-fix ">
                    <?php if( have_rows('featured_one') ):
                        while( have_rows('featured_one') ): the_row(); ?>
                            <div class="featured-fix" style="max-width: 400px;padding-top: 10px; padding-bottom: 10px" >
                                <div class="featured-fix" data-aos="fade-down">
                                    <div class="information radius-full shadow-lg featured-box featured-fix">

                                        <div class="img-holder">
                                            <div class="title-image-box" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                <a class="hvr-bob fea-link" href="https://hanfelderguides.com/about/"><h3 class="featured-title text-uppercase"><?php the_sub_field('image_text_overlay'); ?></h3></a>
                                            </div>
                                        </div>

                                        <!-- BEGIN .article -->
                                        <div style="padding: 18px;">

                                            <div class="text-holder fearured-description-box">
                                                <h2 class="title text-center" style="<?php the_field('color'); ?>"><?php the_sub_field('featured_right_title'); ?></h2>
                                                <div style="vertical-align: middle;">
                                                    <p class="desc-text"><?php the_sub_field('description'); ?></p>
                                                </div>
                                                <a href="https://hanfelderguides.com/about/" class="btn btn-lg text-uppercase btn-featured-style hvr-grow rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-fix ">
                    <?php if( have_rows('featured_two') ):
                        while( have_rows('featured_two') ): the_row(); ?>
                            <div class="featured-fix" style="max-width: 400px; padding-top: 10px; padding-bottom: 10px;">
                                <div class="featured-fix" data-aos="fade-down" data-aos-delay="300">
                                    <div class="information radius-full shadow featured-box featured-fix">

                                        <div class="img-holder">
                                            <div class="title-image-box" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                <a class="hvr-bob fea-link" href="https://hanfelderguides.com/about/"><h3 class="featured-title text-uppercase"><?php the_sub_field('image_text_overlay'); ?></h3></a>
                                            </div>
                                        </div>

                                        <!-- BEGIN .article -->
                                        <div style="padding: 18px;">

                                            <div class="text-holder fearured-description-box">
                                                <h2 class="title text-center" style="<?php the_field('color'); ?>"><?php the_sub_field('featured_right_title'); ?></h2>
                                                <div style="vertical-align: middle;">
                                                    <p class="desc-text"><?php the_sub_field('description'); ?></p>
                                                </div>
                                                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-featured-style hvr-grow rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-fix">
                    <?php if( have_rows('featured_three') ):
                        while( have_rows('featured_three') ): the_row(); ?>
                            <div class="featured-fix" style="max-width: 400px; padding-top: 10px; padding-bottom: 10px">
                                <div class="featured-fix" data-aos="fade-down" data-aos-delay="600">
                                    <div class="information radius-full shadow featured-box featured-fix">

                                        <div class="img-holder">
                                            <div class="title-image-box" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                <a class="hvr-bob fea-link" href="https://hanfelderguides.com/about/"><h3 class="featured-title text-uppercase"><?php the_sub_field('image_text_overlay'); ?></h3></a>
                                            </div>
                                        </div>

                                        <!-- BEGIN .article -->
                                        <div style="padding: 18px;">

                                            <div class="text-holder fearured-description-box">
                                                <h2 class="title text-center" style="<?php the_field('color'); ?>"><?php the_sub_field('featured_right_title'); ?></h2>
                                                <div style="vertical-align: middle;">
                                                    <p class="desc-text"><?php the_sub_field('description'); ?></p>
                                                </div>
                                                <a href="https://hanfelderguides.com/about/" class="btn btn-primary btn-lg text-uppercase btn-featured-style hvr-grow rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container hidden-lg hidden-md" align="center">
        <div class="row display-flex" style="padding-top: 30px; padding-bottom: 30px;">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-fix ">
                    <?php if( have_rows('featured_one') ):
                        while( have_rows('featured_one') ): the_row(); ?>
                            <div class="featured-fix" style="padding-top: 10px; padding-bottom: 10px" >
                                <div class="featured-fix" data-aos="fade-down">
                                    <div class="information radius-full shadow-lg featured-box featured-fix">

                                        <div class="img-holder">
                                            <div class="title-image-box" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                <a class="hvr-bob fea-link" href="https://hanfelderguides.com/about/"><h3 class="featured-title text-uppercase"><?php the_sub_field('image_text_overlay'); ?></h3></a>
                                            </div>
                                        </div>

                                        <!-- BEGIN .article -->
                                        <div style="padding: 18px;">

                                            <div class="text-holder fearured-description-box">
                                                <h2 class="title text-center" style="<?php the_field('color'); ?>"><?php the_sub_field('featured_right_title'); ?></h2>
                                                <div style="vertical-align: middle;">
                                                    <p class="desc-text"><?php the_sub_field('description'); ?></p>
                                                </div>
                                                <a href="https://hanfelderguides.com/about/" class="btn btn-lg text-uppercase btn-featured-style hvr-grow rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More <i class="fas fa-question btn-featured-icon"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-fix ">
                    <?php if( have_rows('featured_two') ):
                        while( have_rows('featured_two') ): the_row(); ?>
                            <div class="featured-fix" style="padding-top: 10px; padding-bottom: 10px" >
                                <div class="featured-fix" data-aos="fade-down">
                                    <div class="information radius-full shadow-lg featured-box featured-fix">

                                        <div class="img-holder">
                                            <div class="title-image-box" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                <a class="hvr-bob fea-link" href="https://hanfelderguides.com/about/"><h3 class="featured-title text-uppercase"><?php the_sub_field('image_text_overlay'); ?></h3></a>
                                            </div>
                                        </div>

                                        <!-- BEGIN .article -->
                                        <div style="padding: 18px;">

                                            <div class="text-holder fearured-description-box">
                                                <h2 class="title text-center" style="<?php the_field('color'); ?>"><?php the_sub_field('featured_right_title'); ?></h2>
                                                <div style="vertical-align: middle;">
                                                    <p class="desc-text"><?php the_sub_field('description'); ?></p>
                                                </div>
                                                <a href="https://hanfelderguides.com/about/" class="btn btn-lg text-uppercase btn-featured-style hvr-grow rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More <i class="fas fa-question btn-featured-icon"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="featured-fix">
                    <?php if( have_rows('featured_three') ):
                        while( have_rows('featured_three') ): the_row(); ?>
                            <div class="featured-fix" style="padding-top: 10px; padding-bottom: 10px" >
                                <div class="featured-fix" data-aos="fade-down">
                                    <div class="information radius-full shadow-lg featured-box featured-fix">

                                        <div class="img-holder">
                                            <div class="title-image-box" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                <a class="hvr-bob fea-link" href="https://hanfelderguides.com/about/"><h3 class="featured-title text-uppercase"><?php the_sub_field('image_text_overlay'); ?></h3></a>
                                            </div>
                                        </div>

                                        <!-- BEGIN .article -->
                                        <div style="padding: 18px;">

                                            <div class="text-holder fearured-description-box">
                                                <h2 class="title text-center" style="<?php the_field('color'); ?>"><?php the_sub_field('featured_right_title'); ?></h2>
                                                <div style="vertical-align: middle;">
                                                    <p class="desc-text"><?php the_sub_field('description'); ?></p>
                                                </div>
                                                <a href="https://hanfelderguides.com/about/" class="btn btn-lg text-uppercase btn-featured-style hvr-grow rounded-0" tabindex="-1" role="button" aria-disabled="true">Learn More <i class="fas fa-question btn-featured-icon"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


</div>



