<?php
/**
 * Contains the header.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css" />

    <?php wp_head(); ?>


    <header class="container-xxl px-0 px-md-2">
        <div class="d-flex flex-column flex-sm-row justify-content-between px-3">
            <div class="d-flex flex-column justify-content-between ">
                <h3 class="m-0 my-sm-1"><?php the_field("main_title");?></h3>
                <p class="m-0  my-sm-1"><?php the_field("under_title");?></p>
            </div>
            <div class="d-flex flex-column justify-content-between ">
                <p class="text-sm-end m-0  my-sm-1"><?php the_field("top_contact");?></p>
                <p class="text-sm-end m-0  my-sm-1"><?php the_field("bottom_contact");?></p>
            </div>
        </div>
        <nav class=" navbar navbar-expand-lg navbar-light bg-light mt-1 mt-sm-3">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <?php  wp_nav_menu(
         array(
             "theme_location" => "top-menu",
             "menu_class" => "top-bar navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-between"  )
     );  ?>
                    <form class="d-flex align-items-center search-form">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success search-btn d-flex align-items-center"
                            type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
</head>

<body <?php body_class(); ?>>