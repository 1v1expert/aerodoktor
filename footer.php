    <?php
    /**
    * The Header of the theme.
    *
    * Displays all of the <head> section and everything up till <main id="main">
    *
    * @package Aerodoktor
    */
    $aerodoktor_theme_options = aerodoktor_get_options( 'aerodoktor_theme_options' ); ?>
    <!-- start footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" placeholder="Ваше имя">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Ваш email">
                            </div>
                            <div class="col-lg-4">
                                <input class="sub" type="submit" value="Отправить">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="about">
                        <h1>О нас</h1>
                        <ul>
                            <li><a href="" class="btn btn-link"><i class="fa fa-map"></i>Москва, м. Новорижская </a></li>
                            <li><a href="" class="btn btn-link"><i class="fa fa-envelope"></i>info@aerodoktor.ru</a></li>
                            <li><a href="" class="btn btn-link"><i class="fa fa-phone"></i>+7 (985) 229-67-56</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog">
                        <h1>Блог</h1>
                        <div class="post">
                            <div class="left"><img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="post1"></div>
                            <div class="right">
                                <p>Lorem ipsum dolor sit amet</p>
                                <p class="p2">25 апреля 2017</p>
                            </div>
                        </div>
                        <div class="post">
                            <div class="left"><img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt=""></div>
                            <div class="right">
                                <p>Lorem ipsum dolor sit amet</p>
                                <p class="p2">25 января 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="tweets">
                        <h1>Твиттер</h1>
                        <div class="social">
                            <i class="fa fa-twitter"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                            </p>
                        </div>
                        <div class="social">
                            <i class="fa fa-twitter"></i>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="projects">
                        <h1>Проекты</h1>
                        <img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="">
                        <img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="">
                        <img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="">
                        <img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="">
                        <img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="">
                        <img src="<?php echo esc_url($aerodoktor_theme_options['placeholder_image']); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Copyright &copy; 2018 AeroDoktor Theme by <a href="http://vk.com/1v1expert" >VLADDOS</a> </p>
                            </div>
                            <div class="col-lg-2">
                                <div class="up">
                                    <a href="#header"><i class="fa fa-arrow-up"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="social">
                                    <a href=""><i class="fa fa-gitlab"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google"></i></a>
                                    <a href=""><i class="fa fa-dropbox"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <?php wp_footer(); ?>
</body>
</html>