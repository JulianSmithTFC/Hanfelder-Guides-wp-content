<div class="container" align="center">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php if( have_rows('featured_one') ):

            while( have_rows('featured_one') ): the_row(); ?>
                <div style="max-width: 400px">

                    <div class="information radius-full shadow" style="min-height: 530px !important; max-height: 580px !important; height: 100%; background: #7ba9a9;  margin: 15px 15px 15px 15px;">

                        <div class="img-holder">
                            <div style="background-image: url(<?php the_sub_field('image'); ?>); height: 200px !important; background-size: cover; background-position: top"></div>
                        </div>

                        <!-- BEGIN .article -->
                        <div style="padding: 18px;">

                            <div class="text-holder">
                                <h2 class="title text-center"><?php the_sub_field('featured_right_title'); ?></h2>
                                <p style="color: #EDEEF0; text-align: center"><?php the_sub_field('description'); ?></p>
                            </div>

                            <div class="align-center text-center">
                                <a class="button" href="" rel="bookmark" title="Permalink to Meet The Team"><?php the_sub_field('link_text'); ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php if( have_rows('featured_two') ):

            while( have_rows('featured_two') ): the_row(); ?>
                <div style="max-width: 400px">

                    <div class="information radius-full shadow" style="min-height: 530px !important; max-height: 580px !important; height: 100%; background: #39585C;  margin: 15px 15px 15px 15px;">

                        <div class="img-holder">
                            <div style="background-image: url(<?php the_sub_field('image'); ?>); height: 200px !important; background-size: cover; background-position: top"></div>
                        </div>

                        <!-- BEGIN .article -->
                        <div style="padding: 18px;">

                            <div class="text-holder">
                                <h2 class="title text-center"><?php the_sub_field('featured_right_title'); ?></h2>
                                <p style="color: #7AA9A9; text-align: center"><?php the_sub_field('description'); ?></p>
                            </div>

                            <div class="align-center text-center">
                                <a class="button" href="" rel="bookmark" title="Permalink to Meet The Team"><?php the_sub_field('link_text'); ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php if( have_rows('featured_three') ):

            while( have_rows('featured_three') ): the_row(); ?>
                <div style="max-width: 400px">

                    <div class="information radius-full shadow" style="min-height: 530px !important; max-height: 580px !important; height: 100%; background: #39585C;  margin: 15px 15px 15px 15px;">

                        <div class="img-holder">
                            <div style="background-image: url(<?php the_sub_field('image'); ?>); height: 200px !important; background-size: cover; background-position: top"></div>
                        </div>

                        <!-- BEGIN .article -->
                        <div style="padding: 18px;">

                            <div class="text-holder">
                                <h2 class="title text-center"><?php the_sub_field('featured_right_title'); ?></h2>
                                <p style="color: #7AA9A9; text-align: center"><?php the_sub_field('description'); ?></p>
                            </div>

                            <div class="align-center text-center">
                                <a class="button" href="" rel="bookmark" title="Permalink to Meet The Team"><?php the_sub_field('link_text'); ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
