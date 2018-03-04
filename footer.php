
    <!-- Start navbar -->
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
              <a class="dropdown-item" href="">ГОвно мы</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pageMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Страницы</a>
            <div class="dropdown-menu" >
              <a class="dropdown-item" href="">О нас</a>
              <a class="dropdown-item" href="">Контакты</a>
              <a class="dropdown-item" href="">Докторы</a>
              <a class="dropdown-item" href="">Мы</a>
              <a class="dropdown-item" href="">Наш блог</a>
              <a class="dropdown-item" href="">Пост</a>
              <a class="dropdown-item" href="">FAQ</a>
              <a class="dropdown-item" href="">Галерея</a>
              <a class="dropdown-item" href="">Прайс-лист</a>
              <a class="dropdown-item" href="">Сервисы</a>
            </div>
          </li>
        </ul>

        <form class="form-inline input-group hidden-md-down">
          <input class="form-control" type="text" placeholder="Найти">
          <button class="btn btn-outline-success input-group-addon" type="submit"><i class="fa fa-search"></i></button>
        </form>

      </div>
      </nav>
    </div>
  </div>
  <!-- end navbar -->
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
                            <div class="left"><img src="etc/img/4-2.jpg" alt=""></div>
                            <div class="right">
                                <p>Lorem ipsum dolor sit amet</p>
                                <p class="p2">25 april 2016</p>
                            </div>
                        </div>
                        <div class="post">
                            <div class="left"><img src="etc/img/4-2.jpg" alt=""></div>
                            <div class="right">
                                <p>Lorem ipsum dolor sit amet</p>
                                <p class="p2">25 april 2016</p>
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
                        <img src="etc/img/box-1.png" alt="">
                        <img src="etc/img/box-2.png" alt="">
                        <img src="etc/img/box-3.png" alt="">
                        <img src="etc/img/box-4.png" alt="">
                        <img src="etc/img/box-5.jpg" alt="">
                        <img src="etc/img/box-6.jpg" alt="">
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