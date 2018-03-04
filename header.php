<?php
/**
 * The Header of the theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Aerodoktor
 */
$aerodoktor_theme_options = aerodoktor_get_options( 'aerodoktor_theme_options' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- start top navbar -->
    <section id="top-nav">
        <div class="container">
            <div class="top">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="left">
                            <ul>
                                <li>
                                    <a href="" class="btn btn-link">AeroDoktor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="right hidden-md-down">
                            <ul>
                                <li>
                                    <a href="" class="btn btn-link">8 (985) 229-67-56</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start header -->
    <div id="header">
        <div class="container">
            <div class="head">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left">
                            <a href="" class="navbar-brand"><img src="<?php echo esc_url($aerodoktor_theme_options['logo_image']); ?>"></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="right hidden-md-down">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="left">
                                        <img src="images/Clock.png" alt="Clock">
                                    </div>
                                    <div class="right">
                                        <p>Работаем круглосуточно - 24/7</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="left">
                                        <img src="images/Info-copy.png" alt="addres">
                                    </div>
                                    <div class="right">
                                        <p> г. Москва, м. Электрозаводская</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="left">
                                        <img src="images/phone.png" alt="phone">
                                    </div>
                                    <div class="right">
                                        <p>8 (985) 229-67-56 info@aerodoktor.ru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>