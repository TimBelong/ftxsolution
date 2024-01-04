<?php
/*
Template Name: contacts
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Acquire your unique payment processing platform that integrates the capabilities of banks and payment systems.">
    <meta name="keywords"
        content="SaaS Finance, Business SaaS, Financial Software, Digital Finance, Enterprise Management, Cloud Solutions, Efficient Management, Accounting SaaS, Financial Technologies, Innovation in Finance, Cloud Applications, Economic Planning, Budget Forecasting, Cloud Analytics, Expense Management, Integrated Solutions, Financial Optimization, Cryptocurrency, Innovative Solutions, Electronic Reporting, Data Analysis">
    <meta name="author" content="FTXsolution">

    <meta property="og:title" content="Contact Us - FTXsolution">
    <meta property="og:description"
        content="Acquire your unique payment processing platform that integrates the capabilities of banks and payment systems.">
    <meta property="og:url" content="url_to_your_contact_page">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-32x32.png" type="image/x-icon">

    <title>FTXsolution | Contact us to initiate collaboration</title>

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
                    <li><a href="/">Home</a></li>
                    <li class="sub_menu-btn">
                        Modules
                        <box-icon name='chevron-down' color="#fff" size="20px" class="sub_menu-btn arrow"></box-icon>

                        <ul class="sub_menu">
                            <li>
                                <a href="core-module">
                                    <span>
                                        <box-icon name='cog' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Core Module</p>
                                </a>
                            </li>
                            <li>
                                <a href="payment-module">
                                    <span>
                                        <box-icon name='transfer-alt' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Payments and Transfers Module</p>
                                </a>
                            </li>
                            <li>
                                <a href="crypto-module">
                                    <span>
                                        <box-icon name='bitcoin' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Crypto Module</p>
                                </a>
                            </li>
                            <li>
                                <a href="remittance-module">
                                    <span>
                                        <box-icon name='credit-card' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Money Remittance Module</p>
                                </a>
                            </li>
                            <li>
                                <a href="compliance-module">
                                    <span>
                                        <box-icon name='shape-square' color="#6c6c6c"></box-icon>
                                    </span>
                                    <p>Compliance Module</p>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </li>
                    <li><a href="partners">Partners and integrations</a></li>
                    <li><a href="contacts">Contact Us</a></li>
                    <li><a href="contacts-ru">ru</a></li>
                </ul>


                <a href="" class="btn uncolored"
                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/ftx_consult/30min'});return false;">make
                    an appointment</a>
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
                    <h1 class="title">Contact our team to find out more</h1>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Map.webp" alt="world map">
                    <div class="descr_adress">
                        <h5 class="descr_title">Czech Republic</h5>
                        <p>Roháčova 145/14, Praha 3, 130 00</p>
                    </div>
                </div>
                <ul class="banner_contacts">
                    <li>
                        <h4>Support</h4>
                        <p>Our friendly team is here to help.</p>
                        <a href="mailto:info@ftxconsult.com ">info@ftxconsult.com </a>
                    </li>
                    <li>
                        <h4>Adress</h4>
                        <p>Roháčova 145/14, Praha 3, 130 00</p>
                    </li>
                    <li>
                        <h4>Phone</h4>
                        <p>We are available for calls from 9:00 AM to 6:00 PM.</p>
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
                        <h2>Ready to get started?</h2>

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

                        <?php echo do_shortcode('[contact-form-7 id="2bf5dde" title="Contact form"]') ?>

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
                        <li class="title">Modules</li>
                        <li><a href="core-module">Core Module</a></li>
                        <li><a href="payment-module">Payment and Transfers</a></li>
                        <li><a href="crypto-module">Crypto Module</a></li>
                        <li><a href="core-module">Money Remittance Midule</a></li>
                        <li><a href="compliance-module">Compliance Module</a></li>
                    </ul>

                    <ul>
                        <li class="title">Product</li>
                        <li><a href="partners">Partners and Integrations</a></li>
                        <li><a href="contacts">Contacts Us</a></li>
                    </ul>

                    <ul>
                        <li class="title">Contacts</li>
                        <li><a href="mailto:info@ftxconsult.com ">info@ftxconsult.com </a></li>
                        <li><a href="tel:+420774327233"> +420 774 327 233 </a></li>
                    </ul>

                    <ul>
                        <li class="title">Adress</li>
                        <li>Roháčova 145/14, Praha 3, 130 00</li>
                    </ul>
                    <ul>
                        <li class="title">Social</li>
                        <li>
                            <a href="https://t.me/ftx_consult">
                                <box-icon type='logo' name='telegram' color="#f6f7f8" size="25px"></box-icon>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="copyright">
                    <p>FTXsolution designs and operates the FTXsolution website and mobile application.</p>
                    <br>
                    <p>TXsolution is a registered trademark of FTXsolution LTD, and may not be used or reproduced
                        without the consent of the owner.</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile_menu">
        <ul class="menu_list">
            <li><a href="/">Home</a></li>
            <li class="sub_menu-btn">
                Modules
                <box-icon name='chevron-down' color="#000" size="20px" class="sub_menu-btn mob"></box-icon>

                <ul class="sub_menu">
                    <li>
                        <a href="core-module">
                            <span>
                                <box-icon name='cog' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Core Module</p>
                        </a>
                    </li>
                    <li>
                        <a href="payment-module">
                            <span>
                                <box-icon name='transfer-alt' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Payments and Transfers Module</p>
                        </a>
                    </li>
                    <li>
                        <a href="crypto-module">
                            <span>
                                <box-icon name='bitcoin' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Crypto Module</p>
                        </a>
                    </li>
                    <li>
                        <a href="remittance-module">
                            <span>
                                <box-icon name='credit-card' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Money Remittance Module</p>
                        </a>
                    </li>
                    <li>
                        <a href="compliance-module">
                            <span>
                                <box-icon name='shape-square' color="#6c6c6c"></box-icon>
                            </span>
                            <p>Compliance Module</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="partners">Partners and integrations</a></li>
            <li><a href="contacts">Contact Us</a></li>
            <li><a href="contacts-ru">ru</a></li>
        </ul>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>


</body>

</html>