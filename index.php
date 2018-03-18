<?php
/**
 * The main template file.
 *
 *
 *
 * @package Aerodoktor
 */
$aerodoktor_theme_options = aerodoktor_get_options( 'aerodoktor_theme_options' );
get_header(); ?>

<!-- section about-->
<div id="about-us">
    <section id="word">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="slide">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><img src="images/doc2.png" alt=""></div>
                            <div class="item"><img src="images/1-1.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="list">
                        <h1>AERO DOKTOR</h1>
                        <p>Необходима оперативная транспортировка больного для оказания медицинской помощи в других
городах и странах? Наиболее быстрый и безопасный вариант – санавиация в Москве AERO DOCTOR. Квалифицированно и оперативно.
                        </p>
                        <div class="mylist">
                            <div class="left">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i>
                                        <p>Гарантируем безопасность</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>
                                        <p>Гарантируем оперативность</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul>
                                    <li>
                                        <i class="fa fa-check"></i>
                                        <p>Работаем круглосуточно 24/7 </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end section about-->

<!-- start Emergency Cases -->
  <section id="cases">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-head">
            <h1>Наши возможности</h1>
            <img src="<?php echo esc_url($aerodoktor_theme_options['line-image']); ?>" alt="Line">
            <p>
              Наша компания существует на рынке санитарной авиацией и оказывает медицинскую неотложную помощь с 2007 года. Являясь лидером в области дальних транспортировок лежачих пациентов по России и за границу, приоритетом работы нашей компании является безопастность и эффективность.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- start card -->
        <div class="col-lg-6">
          <div class="card">
            <div class="top">
              <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
              <h1>Транспортировка больных</h1>
            </div>
            <div class="bottom">
              <P>самой высокой категории сложности, в тяжелом и крайне тяжелом состоянии;</p>
            </div>
          </div>
          <div class="card">
            <div class="top">
              <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
              <h1>Медицинская эвакуация</h1>
            </div>
            <div class="bottom">
              <P>из туристических стран и труднодоступных территорий; </p>
            </div>
          </div>
          <div class="card">
            <div class="top">
              <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
              <h1>«Скорая Помощь»</h1>
            </div>
            <div class="bottom">
              <P>по мировым стандартам, «Неотложная Помощь» взрослым и детям; </p>
            </div>
          </div>
            <div class="card">
                <div class="top">
                    <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
                    <h1>Медицинская перевозка больных</h1>
                </div>
                <div class="bottom">
                    <P>по Москве, в области, регионах, странах СНГ и других государствах.</p>
                </div>
            </div>
          <a href="#" class="btn btn-primary">Узнать подробнее</a>
        </div>
        <!-- end cards -->
        <!-- start img -->
        <div class="col-lg-6">
          <div class="image">
            <img src="<?php echo esc_url($aerodoktor_theme_options['docs-image']); ?>" alt="image">
          </div>
        </div>
        <!-- end img -->
      </div>
    </div>
  </section>
  <!-- end Emergency Cases -->
    <section id="what">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="section-head">
            <h1>Сайт в разработке</h1>
            <img src="<?php echo esc_url($aerodoktor_theme_options['line-image']); ?>" alt="Logo">
            <p>
            Index.php
        </p>
      </div>
    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>