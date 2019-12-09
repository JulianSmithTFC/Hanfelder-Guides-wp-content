<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meteorite
 */
?>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.3'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="1829129873839001">
</div>

<?php do_action( 'meteorite_before_footer' ); ?>

<div class="footer-area">

    <?php meteorite_footer_sidebar(); ?>


    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <?php meteorite_footer_menu(); ?>
            </div>
        </div><!-- .container -->
    </footer><!-- #colophon -->
</div><!-- .footer-area -->

<?php do_action( 'meteorite_after_footer' ); ?>


<?php wp_footer(); ?>

</body>
</html>
