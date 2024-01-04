<?php
/*
Template Name: contacts-ru
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

    <title>FTXsolution | Свяжитесь с нами</title>

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
                    <li><a href="contacts">en</a></li>
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

    <div class="contact_main-banner">
        <div class="container">
            <div class="wrapper">
                <div class="main_banner-descr">
                    <h1 class="title">Свяжитесь с нашей командой, чтобы узнать больше</h1>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Map.webp" alt="world map">
                    <div class="descr_adress">
                        <h5 class="descr_title">Чехия</h5>
                        <p>Roháčova 145/14, Praha 3, 130 00</p>
                    </div>
                </div>
                <ul class="banner_contacts">
                    <li>
                        <h4>Почта</h4>
                        <p>Наша команда всегда готова помочь.</p>
                        <a href="mailto:info@ftxconsult.com ">info@ftxconsult.com </a>
                    </li>
                    <li>
                        <h4>Адрес</h4>
                        <p>Roháčova 145/14, Praha 3, 130 00</p>
                    </li>
                    <li>
                        <h4>Телефон</h4>
                        <p>Мы доступны для звонков с 9:00 до 18:00</p>
                        <a href="tel:+420774327233"> +420 774 327 233 </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="contact_form">
        <div class="container">
            <div class="wrapper">
                <div class="form">
                    <form method="POST" action="sendmail.php" id="contact-form" class="form__body">
                        <h2>Готовы начать?</h2>


                        <!-- <fieldset>
                            <legend>Modules</legend>

                            <input type="checkbox" id="core_module" name="modules[]" value="core_module" class="_req">
                            <label for="core_module" class="checkbox-button">Core Module</label>

                            <input type="checkbox" id="crypto_module" name="modules[]" value="crypto_module"
                                class="_req">
                            <label for="crypto_module" class="checkbox-button">Crypto Module</label>

                            <input type="checkbox" id="transfers_module" name="modules[]" value="transfers_module"
                                class="_req">
                            <label for="transfers_module" class="checkbox-button">Payments and Transfers Module</label>

                            <input type="checkbox" id="remittance_module" name="modules[]" value="remittance_module"
                                class="_req">
                            <label for="remittance_module" class="checkbox-button">Money Remittance Module</label>

                            <input type="checkbox" id="compliance_module" name="modules[]" value="compliance_module"
                                class="_req">
                            <label for="compliance_module" class="checkbox-button">Compliance Module</label>
                        </fieldset>

                        <div class="input_wrapper">
                            <div class="form-group">
                                <label for="formName">First name*</label>
                                <input id="formName" type="text" name="name" class="form_input _req"
                                    placeholder="Your first name">
                            </div>

                            <div class="form-group">
                                <label for="formSurname">Last Name*</label>
                                <input id="formSurname" type="text" name="surname" class="form_input _req"
                                    placeholder="Your last name">
                            </div>
                        </div>

                        <div class="input_wrapper">
                            <div class="form-group">
                                <label for="formEmail">Email*</label>
                                <input id="formEmail" type="text" name="email" class="form_input _req _email"
                                    placeholder="Your working email">
                            </div>

                            <div class="form-group">
                                <label for="formNumber">Phone*</label>
                                <input id="formNumber" type="number" name="phone" class="form_input _number"
                                    placeholder="Your phone number">
                            </div>
                        </div>

                        <div class="form-group txt">
                            <label for="formMessage">Additional Details</label>
                            <textarea id="formMessage" name="message" class="form_input"
                                placeholder="Your message"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="form_button btn" style="border: none;">Contact Us</button>
                        </div> -->

                        <?php echo do_shortcode('[contact-form-7 id="c51dc36" title="Контактная форма"]') ?>

                    </form>
                </div>
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
            <li><a href="contacts">en</a></li>
        </ul>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>

</body>

</html>