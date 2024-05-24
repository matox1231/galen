<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script defer="defer" src="js/js.js"></script>
    <title>Завод «Гален»</title>
</head>
<?php
    session_start();
    include 'db_connect.php';
?>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
              <div class="header_menu_upper">
                <div class="header_logo-body">
                  <a href="index.php" class="header__logo"><img class="main-logo" src="img/image 35.png" alt="logo"></a>
                </div>
                <div class="header_text-body">
                  <div class="header__day">
                    <div class="day_work">Пн-Пт: с&nbsp;9.00 до&nbsp;18.00</div>
                    <div class="day_vacation">Сб-Вс: выходной</div>
                  </div>
                  <div class="header__contacts">
                    <a href="tel:+79059245807" class="tell">+7 <span class="inic">(905)</span> 924-58-07</a>
                    <a href="mailto:alfit-galen@mail.ru" class="email">alfit-galen@mail.ru</a>
                  </div>
                  <div class="header__auth">
                    <a href="pages/auth.html" class="tell">Войти</a>
                    <a href="pages/registr.html" class="email">Регистрация</a>
                  </div>
                  <button type="button" class="header_burger burger btn-reset" data-burger="">
                    <span class="burger__line"></span>
                  </button>
                  <div class="header_buttons">
                    <div class="icon_butt">
                      <a href="https://t.me/CTM_Alfit" target="_blank" class="small_icon"><img class="icon_button" src="img/image 36.png" alt="telegram"></a>
                    </div>
                    <div class="icon_butt">
                      <a href="https://wa.me/send?phone=79059245807" target="_blank" class="small_icon"><img src="img/image 37.png" alt="tell"></a>
                    </div>
                    <a class="a-large" href="#order">
                      Оставить заявку
                    </a>
                  </div>
                </div>
              </div>
              <nav class="nav" data-menu="">
                <ul class="nav_body list-reset">
                  <li class="nav_item">
                    <a class="nav_link" data-menu-item="" href="#section-1">О&nbsp;компании</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" data-menu-item="" href="#products">Продукция</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" data-menu-item="" href="#stage">Этапы работ</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" data-menu-item="" href="#block_text-info">Наши возможности</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" data-menu-item="" href="#numbers">Доверие</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" data-menu-item="" href="#contacts">Контакты</a>
                  </li>
                </ul>
              </nav>
            </div>
          </header>
        <main class="main">
          <div class="container">

          

            <div class="appear">
              <section class="main-block">
                <div class="wrapper">
                  <div class="">
                    <div class="item_block">
                      <div class="main-block">
                        <div class="block_text-info" id='block_text-info'>
                          <div class="block_title block_title-3">
                            Запустите свое контрактное производство с<span class="back-g"> минимальным вложением </span>от 60 000 ₽
                          </div>
                          <div class="block_subtitle">
                            Возможность заказать минимальную партию при первом
                            заказе
                          </div>
                          <ul class="block_ul list-reset">
                            <li class="block_li">
                              Минимальная партия — от 500 шт.
                            </li>
                            <li class="block_li">
                              Бизнес-проект без вложений в производство
                            </li>
                            <li class="block_li">
                              Высылаем готовые образцы на пробу
                            </li>
                            <li class="block_li">
                              Производство продукции, в том числе для маркетплейсов
                            </li>
                          </ul>
                        </div>
                        <div class="block-image_body">
                          <div class="block_image">
                            <div class="block-image__inner">
                              <div class="image_title">
                                <div class="image-text">Контроль качества</div>
                              </div>
                            </div>
                            <img class="block-image_body-image" src="/img/image 38.png" width="704" height="447" aria-hidden="true"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>


            <div class="appear">
              <section class="main-block">
                <div class="wrapper">
                  <div class="">
                    <div class="">
                      <div class="main-block">
                        <div class="block-image_body">
                          <div class="block_image">
                            <div class="block-image__inner2">
                              <div class="image_title">
                                <div class="image-text">Поддержка на всех этапах</div>
                              </div>
                            </div>
                            <img class="block-image_body-image" src="/img/image 39.png" width="704" height="447" aria-hidden="true"/>
                          </div>
                        </div>
                        <div class="block_text-info">
                          <div class="block_title block_title-3">
                            Быстрый вывод на рынок продуктов
                            <span class="back-g">под собственной </span>торговой
                            маркой
                          </div>
                          <div class="block_subtitle">
                            С вас идея, с нас реализация. Можем помочь и с идеей!
                          </div>
                          <ul class="block_ul list-reset">
                            <li class="block_li">
                              Более 300 собственных готовых рецептур
                            </li>
                            <li class="block_li">
                              Возможная наценка на продукцию от 100%
                            </li>
                            <li class="block_li">
                              Опыт в контрактном производстве более 10 лет
                            </li>
                            <li class="block_li">
                              Персональный менеджер по вашему проекту
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>



            <div class="numbers appear" id='numbers'>
              <div class="numbers_title">
                Нам доверяют —<br>цифры
                <span class="back-g">это подтверждают</span>
              </div>
              <div class="numbers_block-body">
                <div class="numbers_block-item">
                  <div class="item-block_icon">
                    <img src="img/ic1.png" alt="">
                  </div>
                  <div class="item-block_text">
                    <div class="item-block_title">30 лет</div>
                    <div class="item-block_subtitle">
                      производим продукцию из&nbsp;целебных трав Алтая
                    </div>
                  </div>
                </div>
                <div class="numbers_block-item">
                  <div class="item-block_icon">
                    <img src="img/ic2.png" alt="">
                  </div>
                  <div class="item-block_text">
                    <div class="item-block_title">10 лет</div>
                    <div class="item-block_subtitle">
                      опыт контрактного производства
                    </div>
                  </div>
                </div>
                <div class="numbers_block-item">
                  <div class="item-block_icon">
                    <img src="img/ic3.png" alt="">
                  </div>
                  <div class="item-block_text">
                    <div class="item-block_title">550+</div>
                    <div class="item-block_subtitle">
                      наименований продукции выпущено
                    </div>
                  </div>
                </div>
                <div class="numbers_block-item">
                  <div class="item-block_icon">
                    <img src="img/ic4.png" alt="">
                  </div>
                  <div class="item-block_text">
                    <div class="item-block_title">300+</div>
                    <div class="item-block_subtitle">готовых рецептур</div>
                  </div>
                </div>
                <div class="numbers_block-item">
                  <div class="item-block_icon">
                    <img src="img/ic5.png" alt="">
                  </div>
                  <div class="item-block_text">
                    <div class="item-block_title">от&nbsp;500 шт.</div>
                    <div class="item-block_subtitle">минимальный заказ</div>
                  </div>
                </div>
                <div class="numbers_block-item">
                  <div class="item-block_icon">
                    <img src="img/ic6.png" alt="">
                  </div>
                  <div class="item-block_text">
                    <div class="item-block_title">20 дней</div>
                    <div class="item-block_subtitle">
                      от&nbsp;идеи до&nbsp;готового продукта
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <section id="products" class="page-product" style="outline: none;">
              <div class="page-product_main">
                <div class="appear">
                  <div class="page-product_title">
                    Что <span class="back-g">мы производим</span>
                  </div>
                  <div class="page-product_subtitle">
                    Мы&nbsp;можем произвести для вас фитопродукцию в&nbsp;7 формах выпуска:
                  </div>
                </div>
                <div class="page-product_grid-blocks appear">
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Брикеты</div>
                      </div>
                      <div class="product_img">
                        <img src="img/prod1.png" alt="prod1">
                      </div>
                      <div class="product_text">
                      <p>Уникальная форма выпуска с точной дозировкой по 2 грамма.<br>Высушенные, измельченные и спрессованные под большим давлением сборы растений сохраняют все биологически активные вещества.<br>Удобнее хранить и заваривать, чем травы россыпью.</p>
                      </div>
                    </div>
                  </div>
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Фитогранулы</div>
                      </div>
                      <div class="product_img">
                        <img src="img/prod2.png" alt="prod2">
                      </div>
                      <div class="product_text">
                      <p>Уникальная технология гранулирования позволяет сохранить целебные свойства растений.<br>Высушенные и сверхтонко измельченные растения проходят процесс гранулирования и дополнительно обогащаются целебными экстрактами для усиления фитотерапевтического эффекта.</p>
                      </div>
                    </div>
                  </div>
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Капсулы</div>
                      </div>
                      <div class="product_img">
                        <img src="img/prod3.png" alt="prod3">
                      </div>
                      <div class="product_text">
                      <p>Удобная форма приёма при современном ритме жизни — капсулы с растительными гранулами.<br>Бережное гранулирование растительного сырья позволяет сохранить биологически активные вещества. Гранулы обогащены целебными экстрактами.</p>
                      </div>
                    </div>
                  </div>
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Свечи</div>
                      </div>
                      <div class="product_img">
                        <img class="loop-img" height="150%" src="img/prod4.png" alt="prod4">
                      </div>
                      <div class="product_text">
                      <p>Свечи (суппозитории) состоят из экстрактов лекарственных растений и натурального масла какао.<br>Экстракты растений изготовлены при помощи вакуумной низкотемпературной технологии, сохраняющей все целебные свойства растений.</p>
                      </div>
                    </div>
                  </div>
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Жидкая форма</div>
                      </div>
                      <div class="product_img">
                        <img class="loop-img" height="150%" src="img/prod5.png" alt="prod5">
                      </div>
                      <div class="product_text">
                      <p>Фитоэкстракты, эликсиры, бальзамы, сиропы, соки растений, концентраты.<br>Щадящая вакуумная технология вытяжки позволяет сохранить высокую концентрацию комплекса биологически активных веществ.</p>
                      </div>
                    </div>
                  </div>
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Фильтр-пакеты</div>
                      </div>
                      <div class="product_img">
                        <img class="loop-img" height="150% " src="img/prod6.png" alt="prod6">
                      </div>
                      <div class="product_text">
                      <p>Фиточаи из сборов целебных растений, травяные чаи, фруктово-ягодные чаи, фитосборы для бани.<br>Растительное сырье может быть расфасовано в фильтр-пакеты и индивидуальные конверты. Упаковка производится без использования металлических скоб.</p>
                      </div>
                    </div>
                  </div>
                  <div class="block-product">
                    <div class="block-product_main">
                      <div class="block-image__inner inner-2">
                        <div class="product_title">Шоколад</div>
                      </div>
                      <div class="product_img">
                        <img class="loop-img" height="150% " src="img/prod7.png" alt="prod7">
                      </div>
                      <div class="product_text">
                      <p>Натуральный, вкусный и полезный шоколад — классический, с добавлением ягод, орехов, цветочных лепестков.<br>Изготовлен вручную, без использования машин и высоких температур (до 45 градусов).<br>100% натуральный шоколад и ингредиенты, без химических красителей, пальмового масла и консервантов.</p>
                      </div>
                    </div>
                    <div class="block-product_hover">
                  </div>
                </div>
              </div>
            </section>


            <section id="stage" class="page-stage">
              <div class="appear">
                <div class="page-stage_title">
                  Создадим ваш <span class="back-g">продукт за 20 дней</span>
                </div>
                <div class="page-stage_subtitle">
                  Фармацевтический завод «Гален» берёт на себя полный цикл работ
                  по выпуску продукта или станет партнёром на любом этапе работ.
                </div>
              </div>
              <div class="page-stage_grid-body appear">
                <div class="stage-block">
                  <div class="stage-block_title">
                    <div class="title-number">1</div>
                    <div class="title-text">Заявка</div>
                  </div>
                  <div class="stage-block_text">
                    Вы оставляете заявку, с Вами свяжется наш специалист для
                    уточнения деталей и поможет сформировать Техническое задание.
                  </div>
                </div>
                <div class="stage-block">
                  <div class="stage-block_title">
                    <div class="title-number">2</div>
                    <div class="title-text">Разработка и образцы</div>
                  </div>
                  <div class="stage-block_text">
                    Наши специалисты принимаются за разработку новой рецептуры или
                    подбор готового варианта. 
                  </div>
                </div>
                <div class="stage-block">
                  <div class="stage-block_title">
                    <div class="title-number">3</div>
                    <div class="title-text">Сертификация</div>
                  </div>
                  <div class="stage-block_text">
                    Специалист по сертификации занимается оформлением всей
                    разрешительной документации.
                  </div>
                </div>
                <div class="stage-line">
                  <img src="img/line.png" alt="" />
                </div>
                <div class="stage-block">
                  <div class="stage-block_title">
                    <div class="title-number">4</div>
                    <div class="title-text">Производство</div>
                  </div>
                  <div class="stage-block_text">
                    После согласования итогового продукта запускаем процесс
                    производства и фасовки с контролем качества.
                  </div>
                </div>
                <div class="stage-block">
                  <div class="stage-block_title">
                    <div class="title-number">5</div>
                    <div class="title-text">Организация доставки</div>
                  </div>
                  <div class="stage-block_text">
                    Бережно упаковываем вашу продукцию и организовываем
                    её доставку до терминала транспортной компании.
                  </div>
                </div>
                <div class="stage-block">
                  <div class="stage-block_title">
                    <div class="title-number">6</div>
                    <div class="title-text">Маркетинг и обучение</div>
                  </div>
                  <div class="stage-block_text">
                    Мы помогаем разработать идею продукта. Консультируем
                    по составу и хитам продаж. Проводим обучение по продукту.
                  </div>
                </div>
              </div>
            </section>


            <section id="section-1">
              <div class="page-factory_body appear">
                <div class="page-factory_part-text">
                  <div class="page-factory_title">
                    Узнайте больше о нашем заводе
                  </div>
                  <div class="page-factory_subtitle">
                    Наша команда объединена светлой идеей улучшения здоровья
                    и качества жизни людей через целебную силу алтайских трав
                    и профессиональную фитотерапию.
                  </div>
                  <div class="page-factory_title">
                    Об основателе
                  </div>
                  <div class="page-factory_subtitle">
                    Корепанов Сергей Валерьевич (основатель компании) — известный
                    практикующий врач-онколог, фитотерапевт, кандидат медицинских
                    наук. Главная цель его работы — признание фитотерапии частью
                    современной, практической медицины.
                  </div>
                  <div class="page-factory_quote">
                    <i>«Для меня, занимающегося фитотерапией более 30 лет,
                      целебные растения, их комплексы — не просто биологически
                      активные добавки, а один из эффективных и самостоятельных
                      методов улучшения здоровья».</i>
                  </div>
                  <div class="page-factory__info" style="margin-right: 30px;">
                    <div class="page-factory_title">
                      О&nbsp;заводе
                    </div>
                    <p>
                      В&nbsp;1991 году был открыт Алтайский краевой медицинский центр
                      «Алфит», где врачи-онкологи, фитотерапевты начали вести
                      приём и&nbsp;консультации по применению лекарственных растений.
                      В&nbsp;1996 году был основан Фармацевтический завод «Гален» для
                      обеспечения медицинского центра фитопрепаратами под запросы
                      врачей.
                    </p>
                    <p>
                      Рост популярности фитопрепаратов «Алфит» и&nbsp;спрос
                      на&nbsp;качественную продукцию из&nbsp;целебных трав Алтая привели
                      к&nbsp;решению о&nbsp;серийном производстве для широкого круга
                      покупателей. Оборудование завода сделано по&nbsp;индивидуальному
                      заказу, исходя из&nbsp;знаний правильных технологий изготовления
                      качественной фитопродукции.
                    </p>
                    <p>
                      Все рецептуры продукции Фармацевтического завода «Гален»
                      разработаны Корепановым <span class="inic">С.В.</span>
                    </p>
                    <p>
                      Фитопродукция завода «Гален» представлена во&nbsp;всех регионах
                      страны и Ближнего Зарубежья, отмечена множеством наград,
                      неоднократно признавалась «выбором сетей». Выбирая
                      Фармацевтический завод «Гален» в качестве партнера
                      по&nbsp;контрактному производству, вы&nbsp;можете быть уверены, что
                      под вашей торговой маркой будет произведен натуральный,
                      качественный и&nbsp;эффективный продукт.
                    </p>
                  </div>
                </div>
                <div class="page-factory_part-video">
                  <div class="page-factory_part-inner">
                    <div class="factory-video_title-body">
                      <div class="factory-title_icon">
                        <img loading="lazy" src="img/i7.png" alt="icon-video">
                      </div>
                      <div class="factory-title_text">процесс производства</div>
                    </div>
                  </div>
                  <button class="factory-button video-play" data-url="test-video-2412a.mp4">
                    <span class="start-factory"></span>
                  </button>
                  <a class="page-factory_part-video" href="https://www.youtube.com/watch?v=0EGJHSQ6pPM"><img loading="lazy" class="factory-button__video" src="img/vid.png" alt=""></a>
                </div>
              </div>
            </section>



            <section>
              <div class="page-partners appear">
                <div class="partners-title">
                  Компании, которые уже нам доверяют
                </div>
                <div class="partners-logo_body">
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p1.png"
                    alt="logo1"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p2.png"
                    alt="logo6"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p3.png"
                    alt="logo7"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p4.png"
                    alt="logo9"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p5.png"
                    alt="logo12"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p6.png"
                    alt="logo8"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p7.png"
                    alt="logo4"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p8.png"
                    alt="logo2"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p9.png"
                    alt="logo3"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p10.png"
                    alt="logo11"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p11.png"
                    alt="logo5"
                  />
                  <img
                    loading="lazy"
                    class="partners__logo-img"
                    src="img/p12.png"
                    alt="logo10"
                    id="order"
                  />
                </div>
              </div>
            </section>


            <section class="page-stage">
              <div class="appear">
                <div class="page-stage_title">
                  <span class="back-g">Оставьте свою заявку и мы вам ответим</span>
                </div>
                <div class="page-stage_subtitle2">
                  Время проверки заявок может достигать двух дней, после чего мы с вами свяжемся.
                </div>
                <form class="page-form_body2" action="pages/auth.html" method="POST">
                  <div class="buttons-body-form">
                    <button class="form_button">Оставить заявку</button>
                  </div>
                </form>
              </div>
            </section>


            <section class="page-contact" id="contacts">
              <div class="page-contact_title appear">Контакты</div>
              <div class="page-contact_body appear">
                <div class="page-contact_text">
                  <div class="factory_name">Фармацевтический завод «ГАЛЕН»</div>
                  <div class="factory_address">
                    <div class="address-icon">
                      <img src="img/contacts/address-a0af86ee64.svg" alt="" />
                    </div>
                    <div class="address">
                      РФ, 656011, г. Барнаул, ул. Зелёная роща, 15в
                    </div>
                  </div>
                  <div class="contacts">
                    <a href="tel:+79059245807" class="contacts__link tell"
                      ><div class="address-icon">
                        <svg
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.20108 4.87316L9.79601 5.93918C10.3329 6.9012 10.1174 8.16322 9.27178 9.00882C9.27178 9.00882 9.27178 9.00882 9.27177 9.00882C9.27166 9.00894 8.24619 10.0346 10.1058 11.8942C11.9647 13.7531 12.9903 12.729 12.9911 12.7282C12.9912 12.7282 12.9912 12.7282 12.9912 12.7282C13.8368 11.8826 15.0988 11.6671 16.0608 12.2039L17.1268 12.7989C18.5795 13.6096 18.751 15.6468 17.4742 16.9237C16.7069 17.6909 15.767 18.2879 14.728 18.3273C12.9788 18.3936 10.0084 17.951 7.02869 14.9713C4.04899 11.9916 3.60632 9.02113 3.67263 7.272C3.71202 6.23297 4.30903 5.29305 5.07628 4.5258C6.35315 3.24893 8.39037 3.42049 9.20108 4.87316Z"
                            fill="#041133"
                          />
                          <path
                            d="M12.1546 1.7234C12.2153 1.34859 12.5696 1.09433 12.9444 1.15501C12.9676 1.15945 13.0422 1.1734 13.0814 1.18211C13.1596 1.19953 13.2687 1.22635 13.4047 1.26597C13.6768 1.34521 14.0568 1.47575 14.513 1.68488C15.4262 2.10357 16.6416 2.83599 17.9027 4.09714C19.1639 5.35829 19.8963 6.57362 20.315 7.48687C20.5241 7.94302 20.6546 8.32307 20.7339 8.59512C20.7735 8.73116 20.8003 8.84027 20.8177 8.91849C20.8264 8.9576 20.8328 8.989 20.8372 9.0122L20.8425 9.0408C20.9032 9.41562 20.6513 9.78459 20.2764 9.84527C19.9027 9.90578 19.5506 9.65275 19.4884 9.27969C19.4865 9.26968 19.4813 9.24276 19.4756 9.21738C19.4643 9.16662 19.4447 9.08611 19.4137 8.97964C19.3517 8.76666 19.244 8.45011 19.0651 8.0599C18.7077 7.28046 18.0651 6.20412 16.9304 5.06941C15.7957 3.9347 14.7194 3.29213 13.9399 2.93478C13.5497 2.75589 13.2332 2.64815 13.0202 2.58612C12.9137 2.5551 12.7799 2.52438 12.7291 2.51308C12.3561 2.45091 12.0941 2.09715 12.1546 1.7234Z"
                            fill="#041133"
                          />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.362 4.88541C12.4663 4.52033 12.8468 4.30892 13.2119 4.41324L13.023 5.07428C13.2119 4.41324 13.2119 4.41324 13.2119 4.41324L13.2132 4.41361L13.2146 4.41402L13.2177 4.41491L13.2248 4.41703L13.2429 4.42268C13.2567 4.4271 13.274 4.43286 13.2946 4.44016C13.3357 4.45477 13.3902 4.47555 13.4569 4.50415C13.5904 4.56138 13.7729 4.64977 13.997 4.78242C14.4457 5.04796 15.0582 5.48904 15.7778 6.2086C16.4973 6.92816 16.9384 7.54066 17.204 7.98934C17.3366 8.21347 17.425 8.39595 17.4822 8.52949C17.5108 8.59623 17.5316 8.65064 17.5462 8.69181C17.5535 8.71239 17.5593 8.72965 17.5637 8.74348L17.5694 8.76161L17.5715 8.76872L17.5724 8.77177L17.5728 8.77318C17.5728 8.77318 17.5731 8.7745 16.9121 8.96337L17.5731 8.7745C17.6775 9.13959 17.4661 9.52011 17.101 9.62442C16.739 9.72784 16.3618 9.52089 16.2538 9.16151L16.2504 9.15163C16.2455 9.13785 16.2354 9.11073 16.2184 9.07113C16.1845 8.99199 16.123 8.86253 16.0207 8.68965C15.8163 8.34431 15.4471 7.8225 14.8055 7.18087C14.1639 6.53925 13.6421 6.1701 13.2967 5.96571C13.1239 5.8634 12.9944 5.80189 12.9153 5.76797C12.8756 5.751 12.8485 5.74089 12.8348 5.736L12.8249 5.73261C12.4655 5.62456 12.2585 5.2474 12.362 4.88541Z"
                            fill="#041133"
                          />
                        </svg>
                      </div>
                      <span class="inic"
                        >+7 <span>(905)</span> 924-58-07</span
                      > </a
                    ><a
                      href="mailto:alfit-galen@mail.ru"
                      class="contacts__link email"
                      ><div class="address-icon">
                        <svg
                          width="17"
                          height="13"
                          viewBox="0 0 17 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M0.995837 0.951903C0 1.90381 0 3.43587 0 6.5C0 9.56413 0 11.0962 0.995837 12.0481C1.99167 13 3.59445 13 6.8 13H10.2C13.4056 13 15.0083 13 16.0042 12.0481C17 11.0962 17 9.56413 17 6.5C17 3.43587 17 1.90381 16.0042 0.951903C15.0083 0 13.4056 0 10.2 0H6.8C3.59445 0 1.99167 0 0.995837 0.951903ZM14.0897 2.85989C14.3151 3.11843 14.2786 3.50268 14.0081 3.71813L12.1411 5.20534C11.3877 5.8055 10.7771 6.29193 10.2381 6.62327C9.67668 6.96843 9.12992 7.18646 8.5 7.18646C7.87008 7.18646 7.32332 6.96843 6.7619 6.62327C6.22295 6.29194 5.6123 5.8055 4.8589 5.20534L2.99188 3.71813C2.72141 3.50268 2.68486 3.11843 2.91026 2.85989C3.13566 2.60134 3.53764 2.56641 3.80812 2.78187L5.64318 4.24362C6.43619 4.87531 6.98677 5.31246 7.4516 5.59823C7.90155 5.87485 8.20669 5.96771 8.5 5.96771C8.79331 5.96771 9.09845 5.87485 9.5484 5.59823C10.0132 5.31246 10.5638 4.87531 11.3568 4.24362L13.1919 2.78187C13.4624 2.56641 13.8643 2.60134 14.0897 2.85989Z"
                            fill="#041133"
                          />
                        </svg>
                      </div>
                      alfit-galen@mail.ru</a
                    >
                  </div>
                  <button class="contact-button" type="button">
                    Оставить заявку
                  </button>
                  <div class="contact_day">
                    <div class="day_work">Пн-Пт: с 9.00 до 18.00</div>
                    <div class="day_vacation">Сб-Вс: выходной</div>
                    <div>(местное время МСК +4)</div>
                  </div>
                  <div class="soc_media">
                    <div class="title_media">
                      Подписывайтесь на нас в соцсетях:
                    </div>
                    <div class="icon-media_body">
                      <div class="icon_butt">
                        <a
                          target="_blank"
                          href="https://vk.com/alfit_altay"
                          class="small_icon"
                          ><img
                            class="icon_button"
                            src="img/ic_vk.png"
                            alt="vk"
                        /></a>
                      </div>
                      <div class="icon_butt">
                        <a
                          target="_blank"
                          href="https://m.ok.ru/alfit"
                          class="small_icon"
                          ><img
                            class="icon-class"
                            src="img/ic_ok.png"
                            alt="class"
                        /></a>
                      </div>
                    </div>
                  </div>
                </div>
                <iframe
                  src="https://yandex.ru/map-widget/v1/?um=constructor%3A562a4e44a3506dd0541b4c7a043097cba829faad9cd00550c5c4d3c5fc61d069&amp;source=constructor"
                  width="824"
                  height="683"
                  frameborder="0"
                ></iframe>
              </div>
            </section>



          </div>
        </main>
        <footer class="footer">
          <div class="container">
              <div class="footer_body">
                  <div class="footer_left">
                      <div class="left-inferior">
                          2024 Контрактное производство фитопродукции                    </div>
                      <a href="https://ctm.alfit.ru/policy/" class="left-supperior">Политика конфиденциальности</a>
                  </div>
                  <a href="#" target="_blank" class="footer_right">
                      <img class="fotter_img" src="img/image 35.png" alt="">
                  </a>
              </div>
          </div>
      </footer>
    </div>

    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>