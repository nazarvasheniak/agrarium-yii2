<?php

/* @var $this yii\web\View */

$this->title = 'Agrarium | Home';
?>

    <div class="main_block">
        <div class="top_content">
            <div class="content_wrap">
                <header>
                    <a href="#" class="logo">
                        <img src="img/logo.png" alt="">
                    </a>
                    <div class="menu_btn menu_toggle"></div>
                    <div class="menu">
                        <nav>
                            <a href="" class="item item1">Tokensale</a>
                            <a href="" class="item item2">Кошелек</a>
                            <a href="" class="item item3">Whitepaper</a>
                        </nav>
                        <div class="btn_groups">
                            <button class="registration">Регистрация</button>
                            <button class="enter">Вход</button>
                        </div>
                        <div class="menu_close menu_toggle"></div>
                    </div>
                </header>
                <div class="main_text">
                    <div class="name">
                        Экосистема развития
                        <br> сельского хозяйства
                    </div>
                    <div class="undertext">
                        с применением
                        <span>технологии</span> блокчейн
                    </div>
                </div>
                <div class="timer_block">
                    <div class="text">
                        ДО КОНЦА PRE-SALE AGRARIUM ОСТАЛОСЬ
                    </div>
                    <div class="timer">
                        <div class="timer_item">
                            <div class="value value_day" id="value_day">00</div>
                            <div class="timer_text">дней</div>
                        </div>
                        <div class="timer_item">
                            <div class="value value_hour" id="value_hour">00</div>
                            <div class="timer_text">часов</div>
                        </div>
                        <div class="timer_item">
                            <div class="value value_min" id="value_min">00</div>
                            <div class="timer_text">минут</div>
                        </div>
                        <div class="timer_item">
                            <div class="value value_sec" id="value_sec">00</div>
                            <div class="timer_text">секунд</div>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <button class="whitepaper">whitepaper</button>
                    <button class="buy_tokens">Купить токены</button>
                </div>
            </div>
        </div>
        <div class="bottom_content">
            <div class="cost_block">
                <div class="items">
                    <div class="item item1">
                        <div class="value">0.01$</div>
                        <div class="text">ЦЕНА НА PRE-ICO</div>
                    </div>
                    <div class="item item2">
                        <div class="value">0.05$</div>
                        <div class="text">ЦЕНА ICO ЭТАП 1</div>
                    </div>
                    <div class="item item3">
                        <div class="value">0.1$</div>
                        <div class="text">ЦЕНА ICO ЭТАП 1</div>
                    </div>
                </div>
                <div class="range_block">
                    <div class="range"></div>
                </div>
                <div class="targets">
                    <div class="item">цель 1</div>
                    <div class="item">цель 2</div>
                    <div class="item">цель 3</div>
                </div>
            </div>
            <div class="how_work">
                <div class="title">Как работает Аграриум?</div>
                <div class="undertext">Посмотрите видео</div>
                <div class="video_wrap">
                    <img src="img/video_img.png" alt="" class="video_preview">

                    <button class="play_btn"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="triggers_block">
        <div class="items">
            <div class="item item1">
                <div class="title">Без посредников</div>
                <div class="text">
                    Нивелируется цепочка перекупщиков на рынке, завышающих начальные цены фермеров на 40-60%
                </div>
            </div>
            <div class="item item2">
                <div class="title">Увеличение КПД</div>
                <div class="text">
                    Часть денег идет на разработку инновационных решений в сфере сельского хозяйства, которые позволят добиться еще большей отдачи от вложений
                </div>
            </div>
            <div class="item item3">
                <div class="title">Прозрачность</div>
                <div class="text">
                    Обеспечивается прозрачная экосистема производителей для конечного пользователя: составы, происхождение, время создания продукта регистрируется в blockchain и не поддается изменению
                </div>
            </div>
            <div class="item item4">
                <div class="title">Мировая площадка</div>
                <div class="text">
                    Помимо дохода для инвесторов Agrarium создает мировую площадку экологичных и недорогих продуктов - это и является конечным продуктом и нашей миссией
                </div>
            </div>
        </div>
    </div>
    <div class="decor_wrap">
        <div class="road_map_block">
            <div class="title">Дорожная карта</div>
            <div class="years_items">
                <div class="item item1" data-toggle="tab" data-target="item1">
                    <div class="year_number">2015</div>
                    <div class="number_wrap"></div>
                    <div class="number_around"></div>
                    <div class="number pulse">1</div>
                </div>
                <div class="item item2" data-toggle="tab" data-target="item2">
                    <div class="year_number">2016</div>
                    <div class="number_wrap"></div>
                    <div class="number_around"></div>
                    <div class="number pulse">2</div>
                </div>
                <div class="item item3 active" data-toggle="tab" data-target="item3">
                    <div class="year_number">2017</div>
                    <div class="number_wrap"></div>
                    <div class="number_around"></div>
                    <div class="number pulse">3</div>
                </div>
                <div class="item item4" data-toggle="tab" data-target="item4">
                    <div class="year_number">2018</div>
                    <div class="number_wrap"></div>
                    <div class="number_around"></div>
                    <div class="number pulse">4</div>
                </div>
            </div>
        </div>
        <div class="card_slide_block" data-type="tab" data-tab="item1">
            <div class="card_slide_wrap swiper-wrapper" id="card_slide_wrap1">
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 1</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Организация сообщества</div>
                    <div class="info">
                        Создан международный потребительский кооператив Цифровая Артель «Аграриум»
                    </div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮЛЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Тестирование идеи</div>
                    <div class="info">
                        Тестирование идеи для развития
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">1 АВГУСТА</div>
                    <div class="name">Создание рабочей группы</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">НОЯБРЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Баунти программа
                    </div>
                    <div class="info">
                        Организация работы волонтеров
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 1</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 1</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
            </div>
        </div>
        <div class="card_slide_block" data-type="tab" data-tab="item2">
            <div class="card_slide_wrap swiper-wrapper" id="card_slide_wrap2">
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 2</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Организация сообщества</div>
                    <div class="info">
                        Создан международный потребительский кооператив Цифровая Артель «Аграриум»
                    </div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮЛЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Тестирование идеи</div>
                    <div class="info">
                        Тестирование идеи для развития
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">1 АВГУСТА</div>
                    <div class="name">Создание рабочей группы</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">НОЯБРЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Баунти программа
                    </div>
                    <div class="info">
                        Организация работы волонтеров
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 2</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 2</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
            </div>
        </div>
        <div class="card_slide_block active" data-type="tab" data-tab="item3">
            <div class="card_slide_wrap swiper-wrapper" id="card_slide_wrap3">
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 3</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Организация сообщества</div>
                    <div class="info">
                        Создан международный потребительский кооператив Цифровая Артель «Аграриум»
                    </div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮЛЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Тестирование идеи</div>
                    <div class="info">
                        Тестирование идеи для развития
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">1 АВГУСТА</div>
                    <div class="name">Создание рабочей группы</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">НОЯБРЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Баунти программа
                    </div>
                    <div class="info">
                        Организация работы волонтеров
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 3</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 3</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
            </div>
        </div>
        <div class="card_slide_block" data-type="tab" data-tab="item4">
            <div class="card_slide_wrap swiper-wrapper" id="card_slide_wrap4">
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 4</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Организация сообщества</div>
                    <div class="info">
                        Создан международный потребительский кооператив Цифровая Артель «Аграриум»
                    </div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮЛЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Тестирование идеи</div>
                    <div class="info">
                        Тестирование идеи для развития
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">1 АВГУСТА</div>
                    <div class="name">Создание рабочей группы</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">НОЯБРЬ - ПО НАШЕ ВРЕМЯ</div>
                    <div class="name">Баунти программа
                    </div>
                    <div class="info">
                        Организация работы волонтеров
                    </div>
                    <div class="status inproc">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 4</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
                <div class="card swiper-slide">
                    <div class="month">ИЮНЬ</div>
                    <div class="name">Разработка идеи 4</div>
                    <div class="info"></div>
                    <div class="status done">ВЫПОЛНЕНО</div>
                </div>
            </div>
        </div>
        <div class="econom_model">
            <div class="statistic">
                <div class="imgs_block">
                    <img src="img/diagramm.png" alt="">
                    <img src="img/agrarium.png" alt="" class="agrarium">
                </div>
                <div class="info_block">
                    <div class="title">Экономическая модель</div>
                    <div class="undertext">Общая эмиссия — 993 800 000</div>
                    <div class="item">
                        <span class="procent">43%</span>
                        <span class="circle darkblue"></span>
                        <span>426 200 000 — Маркетинг и развитие</span>
                    </div>
                    <div class="item">
                        <span class="procent">29%</span>
                        <span class="circle red"></span>
                        <span>290 500 000 — ICO</span>
                    </div>
                    <div class="item">
                        <span class="procent">12%</span>
                        <span class="circle green"></span>
                        <span>116 000 000 — Исследование и разработка</span>
                    </div>
                    <div class="item">
                        <span class="procent">7%</span>
                        <span class="circle yel"></span>
                        <span>71 600 000 — Команда и расходы</span>
                    </div>
                    <div class="item">
                        <span class="procent">6%</span>
                        <span class="circle orange"></span>
                        <span>59 500 000 — На Pre-ICO —</span>
                        <span class="discount">40% скидка</span>
                    </div>
                    <div class="item">
                        <span class="procent">3%</span>
                        <span class="circle blue"></span>
                        <span>30 000 000 — Bounty</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="forecast_block">
        <div class="absolute_block">
            <div class="item item1">
                <div class="procent">102%</div>
                <div class="text">В год на этапе Pre-ICO</div>
            </div>
            <div class="item item2">
                <div class="procent">62%</div>
                <div class="text">В ГОД НА ЭТАПЕ ICO</div>
            </div>
            <div class="garant_text">Гарантированная доходность</div>
        </div>
        <div class="forecast_title">Прогнозируемая цена AGR</div>
        <div class="graf">
            <img src="img/dashed.png" alt="" class="graph_img">
            <div class="axisY"></div>
            <div class="axisX"></div>
            <div class="lineX "></div>
            <div class="axisY_label">Цена AGR</div>
            <div class="lineX line2"></div>
            <div class="lineX line3"></div>

            <i class="arrow_right"></i>
            <i class="arrow_up"></i>

            <div class="point_label">
                <div class="label_wrap">
                    <div class="circle_type3">
                        <div class="circle_type2">
                            <div class="circle_type1"></div>
                        </div>
                    </div>
                    <div class="label_year">2017</div>
                    <div class="label_desc">Pre-ICO</div>
                </div>
            </div>

            <div class="point_label label2">
                <div class="label_wrap">
                    <div class="circle_type3">
                        <div class="circle_type2">
                            <div class="circle_type1"></div>
                        </div>
                    </div>
                    <div class="label_year">2018</div>
                    <div class="label_desc">Молоко из золота</div>
                </div>
            </div>

            <div class="point_label label3">
                <div class="label_wrap">
                    <div class="circle_type3">
                        <div class="circle_type2">
                            <div class="circle_type1"></div>
                        </div>
                    </div>
                    <div class="label_year">2019</div>
                    <div class="label_desc">Теломеризация</div>
                </div>
            </div>

            <div class="point_label_mobile pt1">
                <div class="mobile_circle_type3 pt1_3">
                    <div class="mobile_circle_type2 pt1_2">
                        <div class="mobile_circle_type1 pt1_1"></div>
                    </div>
                </div>
            </div>

            <div class="point_label_mobile pt2">
                <div class="mobile_circle_type3 pt2_3">
                    <div class="mobile_circle_type2 pt2_2">
                        <div class="mobile_circle_type1 pt2_1"></div>
                    </div>
                </div>
            </div>

            <div class="point_label_mobile pt3">
                <div class="mobile_circle_type3 pt3_3">
                    <div class="mobile_circle_type2 pt3_2">
                        <div class="mobile_circle_type1 pt3_1"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mobile_label">
            <div class="label_row">
                <div class="label_year">2017</div>
                <div class="circle_type1 mobile"></div>
                <div class="label_desc">Pre-ICO</div>
            </div>
            <div class="label_row">
                <div class="label_year">2018</div>
                <div class="circle_type1 mobile2"></div>
                <div class="label_desc">Молоко из золота</div>
            </div>
            <div class="label_row">
                <div class="label_year">2019</div>
                <div class="circle_type1 mobile3"></div>
                <div class="label_desc">Теломеризация</div>
            </div>
        </div>

        <div class="team_block">
            <div class="title_block">
                <img src="img/structure.svg" alt="">
                <div class="title">Команда проекта</div>
            </div>
            <div class="team_people swiper-wrapper" id="team_people">
                <div class="people_card swiper-slide">
                    <div class="position">Идеолог проекта</div>
                    <div class="name">Рустам Давлетбаев</div>
                    <div class="photo">
                        <img src="img/people_card1.png" alt="">
                    </div>
                    <div class="achievements">
                        Член Евразийского
                        <br> эконом. клуба ученых
                    </div>
                    <div class="achievements">
                        В настоящее время работает
                        <br> в «Университет Иннополис»
                    </div>
                </div>
                <div class="people_card swiper-slide">
                    <div class="position">СEO</div>
                    <div class="name">Динар Шакирзянов</div>
                    <div class="photo">
                        <img src="img/people_card2.png" alt="">
                    </div>
                    <div class="achievements">
                        Руководитель проекта
                        <br> Цифровая Артель «AGRARIUM»
                    </div>
                    <div class="achievements">
                        Основатель ИТ-компаний,
                        <br> таких как agro.ai, aidainvest.ru,
                        <br> agrarium-invest.ru
                    </div>
                </div>
                <div class="people_card swiper-slide">
                    <div class="position">CIO</div>
                    <div class="name">Евгений Кривов</div>
                    <div class="photo">
                        <img src="img/people_card3.png" alt="">
                    </div>
                    <div class="achievements">
                        Руководитель консалтинговой
                        <br> компании Talp.group
                    </div>
                    <div class="achievements">
                        Кандидат экономических наук
                    </div>
                    <div class="achievements">
                        С января 2017 года руководит
                        <br> разработкой собственной
                        <br> блокчейн-платформы.
                    </div>
                </div>
            </div>
        </div>
        <div class="consultants_block_wrap">
            <div class="consultants_block">
                <div class="title_block">
                    <img src="img/seo.svg" alt="">
                    <div class="title">Консультанты</div>
                </div>
                <div class="consultants_cards swiper-wrapper" id="consultants_cards">
                    <div class="cons_card swiper-slide">
                        <div class="name">Артур Липатов</div>
                        <div class="photo">
                            <img src="img/cons_card1.png" alt="">
                        </div>
                        <div class="info">
                            Руководитель компании «Лаборатория Блокчейн-Технологий»
                        </div>
                        <div class="info">
                            Более 20 ICO проектов по миру
                        </div>
                    </div>
                    <div class="cons_card swiper-slide">
                        <div class="name">Руслан Гайнанов</div>
                        <div class="photo">
                            <img src="img/cons_card2.png" alt="">
                        </div>
                        <div class="info">
                            Основатель компании ТИМ ФОРС
                        </div>
                        <div class="info">
                            Партнёр SkillsCloud Inc.
                        </div>
                    </div>
                    <div class="cons_card swiper-slide">
                        <div class="name">Александр Ткачев</div>
                        <div class="photo">
                            <img src="img/cons_card3.png" alt="">
                        </div>
                        <div class="info">
                            Директор по закупкам Камаз-металлургия с 2005 по 2013
                        </div>
                        <div class="info">
                            Собственник IQ300.ru
                        </div>
                    </div>
                    <div class="cons_card swiper-slide">
                        <div class="name">Рамиль Яруллин</div>
                        <div class="photo">
                            <img src="img/cons_card4.png" alt="">
                        </div>
                        <div class="info">
                            Основатель федерального проекта «Бизнес нация»
                        </div>
                        <div class="info">
                            Является руководителем Казанского завода экстрактов
                        </div>
                    </div>
                    <div class="cons_card swiper-slide">
                        <div class="name">Радик Мифтахов</div>
                        <div class="photo">
                            <img src="img/cons_card5.png" alt="">
                        </div>
                        <div class="info">
                            Председатель Совета Директоров группы компаний «ТАТАГРОХОЛДИНГ»
                        </div>
                        <div class="info">
                            Член Совета Цифровая Артель «AGRARIUM»
                        </div>
                    </div>
                    <div class="cons_card swiper-slide">
                        <div class="name">Артур Липатов</div>
                        <div class="photo">
                            <img src="img/cons_card1.png" alt="">
                        </div>
                        <div class="info">
                            Руководитель компании «Лаборатория Блокчейн-Технологий»
                        </div>
                        <div class="info">
                            Более 20 ICO проектов по миру
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <a href="#" class="logo">
                <img src="img/logo.png" alt="">
            </a>
            <div class="comp_info">
                Цифровая артель "Аграриум" +7 (963) 123-61-04
                <br> 420074, Республика Татарстан, г. Казань, ул. Петербургская, д. 52, 3 этаж, офис 43
            </div>
            <div class="social">
                <a href="" class="soc_icon">
                    <img src="img/soc_icons/twitter-logo-button.svg" alt="">
                </a>
                <a href="" class="soc_icon">
                    <img src="img/soc_icons/facebook-logo-button.svg" alt="">
                </a>
                <a href="" class="soc_icon">
                    <img src="img/soc_icons/vk-social-logotype.svg" alt="">
                </a>
                <a href="" class="soc_icon">
                    <img src="img/soc_icons/reddit-social-logo-character.svg" alt="">
                </a>
                <a href="" class="soc_icon">
                    <img src="img/soc_icons/checked.svg" alt="">
                </a>
                <a href="" class="soc_icon">
                    <img src="img/soc_icons/bitcoin.svg" alt="">
                </a>
            </div>
        </footer>
    </div>