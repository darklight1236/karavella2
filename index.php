<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.svg" type="image/svg">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>КАРАВЕЛЛА</title>
    <script>
        if(window.history.replaceState) 
        {
            window.history.replaceState(null,null,window.location.href);
        }    
    </script>
</head>
<body>

    <div class="preloader" id="preloader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="header_menu">
                <div class="header__logo">
                    <!-- <img src="img/logo.svg" alt=""> -->
                </div>
                <div class="header__menu">
                    <ul id="nav_menu" class="header__menu_ul">
                        <li class="header__menu_li"><a class="effect-1" href="#hit_sales">хит продаж</a></li>
                        <li class="header__menu_li"><a class="effect-1" href="#about_us">о нас</a></li>
                        <li class="header__menu_li"><a class="effect-1" href="#our_advantages">преимущества</a></li>
                        <li class="header__menu_li"><a class="effect-1" href="#our_archievemtnts">достижения</a></li>
                        <li class="header__menu_li"><a class="effect-1" href="#free_catalog">каталог</a></li>
                    </ul>
                </div>
                <div id="header__button" class="header__button scroll_bottom">
                    <a href="#footer"><button class="h_btn">контакты</button></a>
                </div>
            </div>
        </div>
    </header>

    <section id="block1" class="block1">
        <div class="container">
            <div class="block1__helper">

                <div class="block1__left">
                    <div class="block1__left_row1">
                        <img src="img/logo.svg" alt="">
                    </div>
                    <div class="block1__left_row2">
                        <div class="row2_helper">
                            <p class="title_bl1">Каравелла</p>
                            <p class="subtitle_bl1">мебель на металлических каркасах</p>
                        </div>
                    </div>
                    <div class="block1__left_row3">
                        <div class="row3_helper">
                            <p class="title__bl1_r3">Мебель, с которой<br>всегда уютно</p>
                            <p class="subtitle__bl1_r3">фабрика основана в 1996 году</p>
                        </div>
                    </div>
                </div>

                <div class="block1__right">
                    <img src="img/collage.svg" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- <section id="for_skipArrow" class="for_skipArrow">
        <div class="container">
            <div id="skipToHitSales" class="skipArrow__helper">
                <a href="#hit_sales"><img src="img/ArrowSkip.svg" alt=""></a>
            </div>
        </div>
    </section> -->

    <section id="hit_sales" class="hit_sales">
        <div class="container">
            <div class="hit_sales__helper">

                <div class="section__row1">
                    <p class="section__title">Хит продаж</p>
                    <div class="section__hr"></div>
                </div>

                <div class="hit_sales__row2">
                    <div class="sl">
                        <div class="sl_slide">
                            <img src="img/carousel/carousel1.svg" alt="">
                        </div>
                        <div class="sl_slide">
                            <img src="img/carousel/carousel2.svg" alt="">
                        </div>
                        <div class="sl_slide">
                            <img src="img/carousel/carousel3.svg" alt="">
                        </div>
                        <div class="sl_slide">
                            <img src="img/carousel/carousel4.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about_us" class="about_us">
        <div class="container">
            <div class="about_us__helper">

                <div class="section__row1">
                    <p class="section__title">о нас</p>
                    <div class="section__hr"></div>
                </div>

                <div class="about_us__container">
                    <div class="au__left">
                        <p class="au_left_txt">   Какая она, идеальная мебель для 
                            российского покупателя? Для себя этот вопрос мы решили в конце 
                            девяностых разработали оригинальную конструкцию мебельного 
                            трансформера "Каравелла". В его основе уникальные 
                            запатентованные решения, не имеющие аналогов.
                            Мы учли интересы нашего покупателя. Выбрали верный путь: 
                            производство практичной, 
                            надежной и при этом доступной мебели. В нашем ассортименте мягкая 
                            мебель, столы, стулья, 
                            корпусная мебель, обеденные зоны с долговечным металлическим каркасом.
                            Постоянно участвуем на выставках, в наличии оригинальные разработки 
                            своих механизмов 
                            трансформации. Выбирая продукцию "Каравелла" - Вы приобретаете 
                            современную, практичную и надежную мебель. Мы всегда открыты 
                            для сотрудничества!</p>
                    </div>
                    <div class="au__right">
                        <!-- <video class="au__right__video" controls>
                            <source src="video/cat.mp4">
                        </video> -->
                        <iframe class="au__right__video" src="https://www.youtube.com/embed/XvZ512eBsuU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="our_advantages" class="our_advantages">
        <div class="container">
            <div class="our_advantages__helper">

                <div class="oa__row1">
                    <p class="oa__title">наши преимущества</p>
                    <div class="oa__hr"></div>
                </div>

                <div class="oa__container">
                    <div class="oa_container__center_row">

                        <div class="oa_column">
                            <div class="oa_column__icon">
                                <img src="img/oa/sit_man.svg" alt="">
                            </div>
                            <div class="oa_column__txt">
                                <div class="oa_column__txt_title">комфорт</div>
                                <div class="oa_column__txt_subtitle">
                                    <ul>
                                        <li>Удобная рассрочка</li>
                                        <li>Индивидуальный подход к каждому клиенту</li>
                                        <li>Быстрая обратная связь</li>
                                        <li>Работа менеджеров 24/7</li>
                                        <li>Изготовление мебели по размерам</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="oa_column">
                            <div class="oa_column__icon">
                                <img src="img/oa/like.svg" alt="">
                            </div>
                            <div class="oa_column__txt">
                                <div class="oa_column__txt_title">КАЧЕСТВО</div>
                                <div class="oa_column__txt_subtitle">
                                    <ul>
                                        <li>Собственное производство</li>
                                        <li>Свой запотентованый материал</li>
                                        <li>Гарантия 30 лет</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="oa_column">
                            <div class="oa_column__icon">
                                <img src="img/oa/handshake.svg" alt="">
                            </div>
                            <div class="oa_column__txt">
                                <div class="oa_column__txt_title">ОПЫТ</div>
                                <div class="oa_column__txt_subtitle">
                                    <ul>
                                        <li>Работаем с 1996г</li>
                                        <li>Более 500 тыс клиентов</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="our_archievemtnts" class="our_archievemtnts">
        <div class="container">
            <div class="o_arch__helper">

                <div class="section__row1">
                    <p class="section__title">Наши достижения</p>
                    <div class="section__hr"></div>
                </div>

                <div class="our_arch__container">
                    <img src="img/frame5_bg.svg" alt="">
                </div>

                <div class="our_arc__mobile">
                    <div class="o_arch_r">
                        <img src="img/paper/d1_1.svg" alt="">
                        <img src="img/paper/d1_2.svg" alt="">
                    </div>
                    <div class="o_arch_r">
                        <img src="img/paper/d2_1.svg" alt="">
                        <img src="img/paper/d2_2.svg" alt="">
                    </div>
                    <div class="o_arch_r">
                        <img src="img/paper/d3_1.svg" alt="">
                        <img src="img/paper/d3_2.svg" alt="">
                    </div>
                    <div class="o_arch_r">
                        <img src="img/paper/d4_1.svg" alt="">
                        <div class="o_arch_r_column">
                            <img src="img/paper/d4_2_1.svg" alt="">
                            <img src="img/paper/d4_2_2.svg" alt="">
                        </div>
                    </div>
                    <div class="o_arch_r_solo">
                        <img src="img/paper/d5.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="free_catalog" class="free_catalog">
        <div class="container">
            <div class="free_cat__helper">

                <div class="section__row1">
                    <p class="section__title">Хотите получить наш бесплатный каталог?</p>
                    <div class="section__hr"></div>
                    <p class="free_cat__desc">Пройдите быструю регистрацию здесь и получите наш каталог бесплатно!</p>
                </div>

                <div class="free_cat__button" id="cat_btn">быстрая регистрация</div>

            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="footer__helper">
                <div class="footer_row1">
                    <div class="contact_txt">Контакты для связи</div>
                </div>
                <div class="footer_row2">
                    <div class="contact_icon">
                        <a href="https://vk.com/mebelkaravela73" target="_blank">
                            <img src="img/social/vk.svg" alt="">
                        </a>
                        <a href="tel:+79879438048">
                            <img src="img/social/phone.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/mfcaravella/" target="_blank">
                            <img src="img/social/instagram.svg" alt="">
                        </a>
                        <a href="https://www.youtube.com/channel/UCZcv3X-mgyQMnOB0eWGYl3Q" target="_blank">
                            <img src="img/social/youtube.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div id="toTop">
        <img src="img/arrow/arrowUp.svg" alt="">
    </div>

    <!-- <div class="msg_box">
        <img src="img/message_icon.svg" class="msg_box__img" alt="">
    </div> -->


    <!-- msgActive -->
    <div class="msg_form" id="msg_form">
        <div class="msgActive__helper">
            <div class="msgActive__content">
                <div class="msg__row">
                    <div class="msg__row__icon"><img src="img/msgBox/galka.svg" alt=""></div>
                    <div class="msg__row__txt">быстрая регистрация</div>
                </div>
                <div class="msg__row">
                    <div class="msg__row__icon"><img src="img/msgBox/phone.svg" alt=""></div>
                    <div class="msg__row__txt">позвонить нам</div>
                </div>
                <div class="msg__row">
                    <div class="msg__row__icon"><img src="img/msgBox/email.svg" alt=""></div>
                    <div class="msg__row__txt">написать нам на почту</div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/app.js"></script>
    <!-- <script src="js/send.js"></script> -->
</body>
</html>