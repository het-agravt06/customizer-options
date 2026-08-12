<!-- <!DOCTYPE html>
<html  -->
    <?php 
        // language_attributes(); 
        ?>
    <!-- > -->

<!-- <head>

    <meta charset=" -->
        <?php 
            // bloginfo('charset'); 
            ?>
        <!-- "> -->

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <?php 
        // wp_head(); 
    ?>

<!-- </head>

<body  -->
    <?php
    //  body_class(); ?>
<!-- > -->

    <!-- <header>

        <h1> -->
            <?php
                //  bloginfo('name'); 
            ?>
        <!-- </h1>

        <p> -->
            <?php
            //  bloginfo('description'); 
             ?>
        <!-- </p>

        <hr>

    </header> -->




    
<!-- bgcolor change choose by user -->



<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="site-header">

    <h1>
        <?php bloginfo('name'); ?>
    </h1>

    <nav>

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
            )
        );
        ?>

    </nav>

</header>