<?php
/*
Template Name: remittance-module-ru
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Получите собственную платежную платформу, объединяющую возможности банков и платежных систем.">
    <meta name="keywords"
        content="SaaS финансы, Бизнес SaaS, Финансовое программное обеспечение, Цифровые финансы, Управление предприятием, Облачные решения, Эффективное управление, SaaS для бухгалтерии, Финансовые технологии, Инновации в финансах, Облачные приложения, Экономическое планирование, Прогнозирование бюджета, Облачная аналитика, Управление расходами, Интегрированные решения, Финансовая оптимизация, Инновационные решения, Электронная отчетность, Анализ данных">
    <meta name="author" content="FTXsolution">

    <meta property="og:title" content="Финансовые интеграции и управление">
    <meta property="og:description"
        content="Получите собственную платежную платформу, объединяющую возможности банков и платежных систем.">
    <meta property="og:url" content="http://www.ftxsolution.com/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-32x32.png" type="image/x-icon">

    <?php wp_head(); ?>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/calendly.css"> -->
</head>

<body>
    <header>
        <div class="container">
            <div class="wrapper">
                <ul class="menu_list">
                    <li><a href="home-ru">Главная</a></li>
                    <li class="sub_menu-btn">
                        Наши Модули
                        <box-icon name='chevron-down' color="#fff" size="20px" class="sub_menu-btn arrow"></box-icon>

                        <ul class="sub_menu">
                            <li>
                                <a href="core-module-ru">
                                    <span>
                                        <box-icon name='cog' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Основной Модуль</p>
                                </a>
                            </li>
                            <li>
                                <a href="payment-module-ru">
                                    <span>
                                        <box-icon name='transfer-alt' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Модуль Платежи и Переводы</p>
                                </a>
                            </li>
                            <li>
                                <a href="crypto-module-ru">
                                    <span>
                                        <box-icon name='bitcoin' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Модуль “Крипто”</p>
                                </a>
                            </li>
                            <li>
                                <a href="remittance-module-ru">
                                    <span>
                                        <box-icon name='credit-card' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Модуль Денежные переводы</p>
                                </a>
                            </li>
                            <li>
                                <a href="compliance-module-ru">
                                    <span>
                                        <box-icon name='shape-square' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Соблюдение норм и предписаний</p>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </li>
                    <li><a href="partners-ru">Интеграции и партнеры </a></li>
                    <li><a href="contacts-ru">Свяжитесь с нами</a></li>
                    <li><a href="remittance-module">en</a></li>
                </ul>


                <a href="" class="btn uncolored"
                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">Записаться
                    онлайн</a>
                <div class="burger__menu">
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="main_banner">
        <div class="container">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/Ellipse1.png" alt="elipse" class="elipse right">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/Ellipse2.png" alt="elipse" class="elipse left">

            <div class="wrapper">
                <div class="main_banner-descr">
                    <h1 class="title">Денежные переводы</h1>
                    <ul>
                        <li>Модуль "Денежные переводы" предназначен для управления и обработки международных денежных
                            переводов и ремиттансов. Этот модуль предлагает комплексные решения для отправки и выплаты
                            денежных переводов через агентскую сеть. А также подключение к международным системам
                            денежных переводов.</li>
                    </ul>
                    <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                </div>
                <div class="main_banner-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/money.webp" alt="Payments and Transfers"
                        class="payments">
                </div>
            </div>

        </div>
    </div>

    <div class="remittance-module">
        <div class="container">
            <div class="breadscrump">
                <a href="home-ru">Главная /</a> Денежные переводы
            </div>
            <div class="wrapper">
                <ul>
                    <li class="module_item">
                        <div class="item_text">
                            <h3 class="item_title">Механизм денежных переводов </h3>
                            <p class="item_descr">Ядро системы денежных переводов, обеспечивающее быстрое и безопасное
                                выполнение международных переводов. Этот движок поддерживает различные виды переводов,
                                включая онлайн-переводы и транзакции через агентов с выдачей или оплатой наличными,
                                зачислением на платежные счета и банковские карты.</p>
                            <div class="item_btns">
                                <a href="" class="btn uncolored"
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">Запись
                                    онлайн</a>
                                <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="item_images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/core.webp"
                                alt=">Money Transfer Engine" class="transfer">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shape1.png" alt="background shape"
                                class="shape">
                        </div>
                    </li>

                    <li class="module_item reverse">
                        <div class="item_text">
                            <h3 class="item_title">Менеджер денежных переводов для агентов</h3>
                            <p class="item_descr">Предоставляет вашим агентам функционал для управления переводами,
                                включая прием и выплату денег. Это улучшает обслуживание клиентов и расширяет сеть
                                обслуживания.</p>
                            <div class="item_btns">
                                <a href="" class="btn uncolored"
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">Запись
                                    онлайн</a>
                                <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="item_images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/agent-remittance.png"
                                alt="Remittance Management" class="remmitance">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shape2.png" alt="background shape"
                                class="shape">
                        </div>
                    </li>

                    <li class="module_item">
                        <div class="item_text">
                            <h3 class="item_title">Проверка Личности</h3>
                            <p class="item_descr">Верификация личности отправителя и получателя для обеспечения
                                соответствия нормативным требованиям и предотвращения мошенничества.</p>
                            <div class="item_btns">
                                <a href="" class="btn uncolored"
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">Запись
                                    онлайн</a>
                                <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="item_images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/id-verification.webp"
                                alt="ID Verification" class="verification">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shape3.png" alt="background shape"
                                class="shape">
                        </div>
                    </li>

                    <li class="module_item reverse">
                        <div class="item_text">
                            <h3 class="item_title"> Гибкое управление комиссиями и сборами</h3>
                            <p class="item_descr">Гибкое управление комиссиями и сборами, позволяющее устанавливать
                                различные тарифы в зависимости от типа перевода, направления, провайдера, суммы и других
                                факторов. </p>
                            <div class="item_btns">
                                <a href="" class="btn uncolored"
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">Запись
                                    онлайн</a>
                                <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="item_images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/fees.webp" alt="Fees Management"
                                class="fees">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shape2.png" alt="background shape"
                                class="shape">
                        </div>
                    </li>

                    <li class="module_item">
                        <div class="item_text">
                            <h3 class="item_title"> Управление обменными курсами и оперативное обновление</h3>
                            <p class="item_descr">Управление обменными курсами и их актуализация в реальном времени, что
                                обеспечивает конкурентоспособные условия для международных переводов, а также
                                дополнительную возможность заработка на курсовой коррекции.</p>
                            <div class="item_btns">
                                <a href="index#appointment_section" class="btn uncolored">Запись онлайн</a>
                                <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="item_images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/fx.webp" alt="FX Rates Management"
                                class="fx-rate">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shape1.png" alt="background shape"
                                class="shape">
                        </div>
                    </li>

                    <li class="module_item reverse">
                        <div class="item_text">
                            <h3 class="item_title">Оплата картами</h3>
                            <p class="item_descr">Поддержка отправки на карты, позволяющая клиентам осуществлять
                                переводы с использованием банковских карт.</p>
                            <div class="item_btns">
                                <a href="" class="btn uncolored"
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">Запись
                                    онлайн</a>
                                <a href="contacts-ru" class="btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="item_images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/card-payment-new.webp"
                                alt="Card Payments" class="payment">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shape2.png" alt="background shape"
                                class="shape">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="wrapper">
                <div class="footer_links">
                    <ul>
                        <li class="title">Наши Модули</li>
                        <li><a href="core-module-ru">Основной модуль</a></li>
                        <li><a href="crypto-module-ru">Крипто</a></li>
                        <li><a href="remittance-module-ru">Денежные переводы</a></li>
                        <li><a href="compliance-module-ru">Соблюдение законодательных норм и предписаний</a></li>
                        <li><a href="payment-module-ru">Платежи и переводы</a></li>
                    </ul>

                    <ul>
                        <li class="title">Продукт</li>
                        <li><a href="partners-ru">Интеграции и Партнеры</a></li>
                        <li><a href="contacts-ru">Свяжитесь с нами</a></li>
                    </ul>

                    <ul>
                        <li class="title">Контакты</li>
                        <li><a href="mailto:info@ftxconsult.com ">info@ftxconsult.com </a></li>
                        <li><a href="tel:+420774327233"> +420 774 327 233 </a></li>
                    </ul>

                    <ul>
                        <li class="title">Адрес</li>
                        <li>Roháčova 145/14, Praha 3, 130 00</li>
                    </ul>
                    <ul>
                        <li class="title">Социальные сети</li>
                        <li>
                            <a href="https://t.me/ftx_consult">
                                <box-icon type='logo' name='telegram' color="#f6f7f8" size="25px"></box-icon>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="copyright">
                    <p>FTXsolution разрабатывает и управляет веб-сайтом и мобильным приложением FTXsolution.</p>
                    <br>
                    <p>FTXsolution - зарегистрированный товарный знак FTXsolution LTD и не может быть использован
                        или воспроизведен без согласия владельца.</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile_menu">
        <ul class="menu_list">
            <li><a href="home-ru">Главная</a></li>
            <li class="sub_menu-btn">
                Наши Модули
                <box-icon name='chevron-down' color="#000" size="20px" class="sub_menu-btn mob"></box-icon>

                <ul class="sub_menu">
                    <li>
                        <a href="core-module-ru">
                            <span>
                                <box-icon name='cog' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Основной Модуль</p>
                        </a>
                    </li>
                    <li>
                        <a href="payment-module-ru">
                            <span>
                                <box-icon name='transfer-alt' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Модуль Платежи и Переводы</p>
                        </a>
                    </li>
                    <li>
                        <a href="crypto-module-ru">
                            <span>
                                <box-icon name='bitcoin' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Модуль “Крипто”</p>
                        </a>
                    </li>
                    <li>
                        <a href="remittance-module-ru">
                            <span>
                                <box-icon name='credit-card' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Модуль Денежные переводы</p>
                        </a>
                    </li>
                    <li>
                        <a href="compliance-module-ru">
                            <span>
                                <box-icon name='shape-square' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Модуль Соблюдение норм и предписаний</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="partners-ru">Интеграции и партнеры </a></li>
            <li><a href="contacts-ru">Свяжитесь с нами</a></li>
            <li><a href="remittance-module">en</a></li>
        </ul>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>

</body>

</html>