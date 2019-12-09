<?php
/*
Template Name: Home Page
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



        </style>
    </head>


    <div id="Content">

        <?php get_template_part( 'Custom Shared Templet Parts/block', 'headerImage' ); ?>

        <?php get_template_part( 'Home Page Templet Parts/block', 'featuredLarge' ); ?>

        <?php get_template_part( 'Home Page Templet Parts/block', 'writtenContent' ); ?>

        <?php get_template_part( 'Home Page Templet Parts/block', 'booking' ); ?>

    </div>




<?php
get_footer();
