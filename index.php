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
                            <div class="item"><img src="<?php echo esc_url($aerodoktor_theme_options['doc2']); ?>" alt=""></div>
                            <div class="item"><img src="<?php echo esc_url($aerodoktor_theme_options['1-1_image']); ?>" alt=""></div>
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

<!-- start what we do section -->
<section id="what">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="section-head">
        <h1>О нас</h1>
        <img src="<?php echo esc_url($aerodoktor_theme_options['line-image']); ?>" alt="Logo">
        <p> Основным направлением деятельности компании «AERO DOCTOR» является предоставление
уникальной возможности транспортировки больных за границу или по территории России
посредством авиаперевозок. В распоряжении компании – современные вертолеты и самолет,
которые используются для оказания квалифицированной медицинской помощи. Используемый
авиатранспорт оснащен всей необходимой техникой для транспортировки пациентов в тяжелом и
очень тяжелом состоянии.
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3">
      <div class="card">
        <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icon">
        <h1>Эффективно</h1>
        <p></p>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <img src="<?php echo esc_url($aerodoktor_theme_options['icon-2']); ?>" alt="icon">
        <h1>Безопасно</h1>
        <p></p>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <img src="<?php echo esc_url($aerodoktor_theme_options['icon-3']); ?>" alt="icon">
        <h1>Квалифицированно</h1>
        <p></p>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <img src="<?php echo esc_url($aerodoktor_theme_options['icon-4']); ?>" alt="icon">
        <h1>Оперативно</h1>
        <p></p>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end what we do section -->

<!-- start Emergency Cases -->
<section id="cases">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="section-head">
        <h1>Наши преимущества</h1>
        <img src="<?php echo esc_url($aerodoktor_theme_options['line-image']); ?>" alt="">
        <p>
            Наша компания существует на рынке санитарной авиацией и оказывает медицинскую неотложную помощь с 2007 года. Являясь лидером в области дальних транспортировок лежачих пациентов по России и за границу, приоритетом работы нашей компании является безопасность и эффективность.<br>
            При оказании экстренной медицинской помощи сотрудниками «AERO DOCTOR» проводится полный комплекс мероприятий, включающих решение административных вопросов. Специалисты, принимающие участие в транспортировке, владеют иностранными языками и имеют постоянные шенгенские визы. Четкая координация действий и слаженная работа персонала обеспечивают полную безопасность пациента. Сотрудники нашей компании оказывают консультационную поддержку, подбирая наилучшие варианты необходимого лечения. Каждый случай рассматривается индивидуально и, исходя из тяжести состояния больного, а также географии транспортировки, будет выбран оптимальный тип авиатранспорта. Заказать перевозку больных можно в любое время. Бригады готовы к выезду круглосуточно.
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
                <h1>Профессионализм</h1>
            </div>
            <div class="bottom">
                <P>Госпитализация пациентов с любой тяжестью заболевания транспортными средствами, которые оборудованы всем необходимым для поддержания жизненных процессов. <br>Имеется ноголетний опыт работы в сфере транспортировки больных.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="top">
                <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
                <h1>Сотрудничество</h1>
            </div>
            <div class="bottom">
                <P>Отлаженная система взаимодействия с медицинскими учреждениями России и стран зарубежья. Наши врачи координаторы предложат вам пройти лечение в лучших клиниках Израиля, Германии и Корее. Согластно диагнозу пациента подберут оптимальную клинику для лечения в России так и в ведущих клиниках Германии и Израиля.</p>
            </div>
        </div>
        <div class="card">
            <div class="top">
                <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
                <h1>Специализация</h1>
            </div>
            <div class="bottom">
                <P>Сотрудники нашей компании оказывают консультационную поддержку, подбирая наилучшие варианты необходимого лечения. Каждый случай рассматривается индивидуально и, исходя из тяжести состояния больного, а также географии транспортировки, будет выбран оптимальный тип авиатранспорта.</p>
            </div>
        </div>
        <div class="card">
            <div class="top">
                <img src="<?php echo esc_url($aerodoktor_theme_options['icon-1']); ?>" alt="icons">
                <h1>Техника</h1>
            </div>
            <div class="bottom">
                <P>Наши медицинские работники оснащены cовременным импортным медицинским оборудованием: аппарат искусственной вентиляции легких, мониторинг витальных функций, следящая аппаратура, а так же всеми необходимыми медикаментами для проведения реанимационных мероприятий и поддержания всех жизнено важных функций организма пациента.</p>
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