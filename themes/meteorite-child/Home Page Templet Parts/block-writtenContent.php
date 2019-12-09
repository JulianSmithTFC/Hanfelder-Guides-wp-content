<style>
    .btn-book-mainContent{
        background-color: #597884;
        margin-top: 30px;
        padding: 15px 15px 15px 15px;
        font-size: 18px;
        border: 3px solid #acc4ce;
        color: #FFFFFF;
        font-family: 'Heebo', sans-serif;
        font-weight: bold;
    }
    .btn-book-mainContent-mobile{
        background-color: #597884;
        margin-top: 30px;
        padding: 15px 15px 15px 15px;
        font-size: 18px;
        border: 3px solid #acc4ce;
        margin-bottom: 30px;
        color: #FFFFFF;
        font-weight: bold;
    }
    .container-outline{
        padding: 20px 20px 20px 20px;
        border: 4px solid #acc4ce;
        margin-bottom: 30px;
    }
    .blockOne-heading{
        color: #acc4ce;
        font-size: 55px !important;
        letter-spacing: 6px;
    }
    .blockOne-bodyText{
        color: #FFFFFF;
    }

</style>

<?php if( have_rows('block_2') ):

    while( have_rows('block_2') ): the_row(); ?>
        <div class="container-fluid" style="background-color: #294552">
            <div class="container" align="center">

                <div class="hidden-sm hidden-xs" align="center" style="margin-left: 70px; margin-right: 70px; margin-top:
             30px; margin-bottom: 70px; text-align: center; color: <?php the_field('main_content_color'); ?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container-outline">
                            <h2 class="blockOne-heading"><?php the_sub_field('header'); ?></h2>
                            <br/>
                            <p class="blockOne-bodyText"><?php the_sub_field('text'); ?></p>
                            <br/>
                            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-book-mainContent rounded-0" tabindex="-1" role="button" aria-disabled="true">book your trip today</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden-lg hidden-md" align="center" style=" margin-top: 30px; margin-bottom: 70px; text-align:
             center; color: <?php the_field('main_content_color'); ?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="blockOne-heading"><?php the_sub_field('header'); ?></h2>
                        <br/>
                        <p class="blockOne-bodyText"><?php the_sub_field('text'); ?></p>
                        <br/>
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                            <a href="https://square.site/book/JJ9YXMZ06RRY0/hanfelder-outdoor-guides-llc" class="btn btn-primary btn-lg text-uppercase btn-book-mainContent-mobile rounded-0" tabindex="-1" role="button" aria-disabled="true">book your trip today</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>