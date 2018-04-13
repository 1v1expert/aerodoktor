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
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48462620 = new Ya.Metrika({
                    id:48462620,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/48462620" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
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
                                    <a href="" class="btn btn-link"><i class="fa fa-phone"></i> +7 (916)-653-71-00</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="right hidden-md-down">
                            <ul>
                                <li>
                                    <a href="" class="btn btn-link">AeroDoktor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start header -->
    <header id="header">
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
                                <div class="col-lg-12">
                                    <div class="left">
                                        <img src="<?php echo esc_url($aerodoktor_theme_options['addres_image']); ?>" alt="phone">
                                    </div>
                                    <div class="right">
                                        <p>+7 (916)-653-71-00 | info@aerodoktor.ru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start navbar -->
    <div id="navbar">
        <div class="container">
            <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMenu"   aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="homeMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Главная</a>
            <div class="dropdown-menu" >
              <a class="dropdown-item" href="">О нас</a>
              <a class="dropdown-item" href="">Много интересного</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pageMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Страницы</a>
            <div class="dropdown-menu" >
              <a class="dropdown-item" href="">О нас</a>
              <a class="dropdown-item" href="">Контакты</a>
            </div>
          </li>
        </ul>

        <?php
					if (has_nav_menu('main_navigation')) {

						$modality_default_menu = array(
    						'theme_location'  => 'main_navigation',
							'menu'       => 'main_navigation',
    						'depth'      => 0,
    						'container'  => false,
    						'menu_class' => 'nav navbar-nav',
                			'fallback_cb'       => 'wp_page_menu',
    						'walker'     => '',
						);

					} else {

						$modality_default_menu = array(
    						'theme_location'  => 'main_navigation',
							'menu'       => 'main_navigation',
    						'depth'      => 0,
    						'container'  => false,
    						'menu_class' => 'nav-bar',
                			'fallback_cb'       => 'wp_page_menu',
						);

					}

					wp_nav_menu( $modality_default_menu );

					?>

        <form class="form-inline input-group hidden-md-down">
          <input class="form-control" type="text" placeholder="Найти">
          <button class="btn btn-outline-success input-group-addon" type="submit"><i class="fa fa-search"></i></button>
        </form>

      </div>
      </nav>
    </div>
  </div>
  <!-- end navbar -->