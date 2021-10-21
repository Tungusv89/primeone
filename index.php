<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php wp_head() ?>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="header-top-lang">
                        <a href="#" class="header-top-lang__item active">EN</a>
                        <a href="#" class="header-top-lang__item">RU</a>
                        <a href="#" class="header-top-lang__item">ESP</a>
                    </div>
                    <a href="#" class="header-top__link">Online ordering</a>
                </div>
                <div class="header-bottom">
                    <div class="header-bottom__column">
                        <nav class="header-bottom-menu">
                        <?php wp_nav_menu([                            
                            'theme_location' => 'menu-left',
                            'menu_class' => 'header-bottom-menu__list',
                            'menu_id' => ' ',
                            'container_class' => ' ',
                        ]) ?>
                            <!-- <ul class="header-bottom-menu__list">
                                    
                            <li>
                                    <a href="" class="header-bottom-menu__link">ABOUT</a>
                                </li>
                                <li>
                                    <a href="" class="header-bottom-menu__link">Menus</a>
                                </li>
                                <li>
                                    <a href="" class="header-bottom-menu__link">Service Info</a>
                                </li>
                            </ul> -->
                        </nav>
                    </div>
                    <div class="header-bottom__column">
                        <a href="" class="header-logo">
                            <span class="header-logo__text">NYC'S</span>
                            <span class="header-logo__image">
                            <?php the_custom_logo( $blog_id ); ?>                                
                            </span>
                            <span class="header-logo__text">Catering</span>
                        </a>
                    </div>
                    <div class="header-bottom__column">
                        <nav class="header-bottom-menu header-bottom-menu--right">
                        <?php wp_nav_menu([
                            'theme_location' => 'menu-right',
                            'menu_class' => 'header-bottom-menu__list',
                            'menu_id' => ' ',
                            'container_class' => ' ',
                        ]) ?>
                            <!-- <ul class="header-bottom-menu__list">
                                <li>
                                    <a href="" class="header-bottom-menu__link">Gallery</a>
                                </li>
                                <li>
                                    <a href="" class="header-bottom-menu__link">Friends</a>
                                </li>
                                <li>
                                    <a href="" class="header-bottom-menu__link">Contact</a>
                                </li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
                <div class="header-menu__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-menu">

                </div>
            </div>
        </header>
        <div class="content">
            <div class="privat">
                <div class="privat__column">
                    <div class="privat__image ibg"><img src="<?php echo get_template_directory_uri() ?>/assets/img/privat/01.jpg" alt="privat"></div>
                </div>
                <div class="privat__column">
                    <div class="privat-body">
                        <div class="privat-body-content">
                            <div class="privat-body__title">Private catering</div>
                            <div class="privat-body__text">Treat your guests to a beautifully plated dinner, hand-crafted canapes or a casual BBQ.</div>
                            <div class="privat-body-buttons">
                                <a class="privat-body-buttons__items btn btn--w" href="#">Get a quote</a>
                                <a class="privat-body-buttons__link" href="#">View menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products">
                <div class="container">
                    <div class="products-body">
                        <div class="products__column">
                            <div class="products-item">
                                <a href="#" class="products-item__image ibg"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/01.jpg" alt="01"></a>
                                <a href="#" class="products-item__title">Corporate catering</a>
                                <div class="products-item__text">We are able to serve events from 2 to 2000 guests and always reasonable prices.</div>
                                <p><a href="#" class="products-item_btn btn">Get a quote</a></p>
                                <p><a href="#" class="products-item__link">View menus</a></p>
                            </div>
                        </div>
                        <div class="products__column">
                            <div class="products-item">
                                <a href="#" class="products-item__image ibg"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/02.jpg" alt="01"></a>
                                <a href="#" class="products-item__title">Private catering</a>
                                <div class="products-item__text">Fresh, seasonal and simple cuisine. Food is our business and our passion.</div>
                                <p><a href="#" class="products-item_btn btn">Get a quote</a></p>
                                <p><a href="#" class="products-item__link">View menus</a></p>
                            </div>
                        </div>
                        <div class="products__column">
                            <div class="products-item">
                                <a href="#" class="products-item__image ibg"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/03.jpg" alt="01"></a>
                                <a href="#" class="products-item__title">Wedding catering</a>
                                <div class="products-item__text">We use only the best organic ingredients and gluten and dairy free cooking.</div>
                                <p><a href="#" class="products-item_btn btn">Get a quote</a></p>
                                <p><a href="#" class="products-item__link">View menus</a></p>
                            </div>
                        </div>
                        <div class="products__column">
                            <div class="products-item">
                                <a href="#" class="products-item__image ibg"><img src="<?php echo get_template_directory_uri() ?>/assets/img/products/04.jpg" alt="01"></a>
                                <a href="#" class="products-item__title">Online Ordering</a>
                                <div class="products-item__text">Successful catering is about organisation, high quality service, and great food.</div>
                                <p><a href="#" class="products-item_btn btn">Get a quote</a></p>
                                <p><a href="#" class="products-item__link">View menus</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why">
                <div class="why-top">
                    <div class="why-top__column">
                        <div class="why-top__text">Why CHOOSE us?</div>
                    </div>
                    <div class="why-top__column">
                        <div class="why-top__image ibg"><img src="<?php echo get_template_directory_uri() ?>/assets/img/why/01.jpg" alt="img"></div>
                    </div>
                </div>
                <div class="why-body">
                    <div class="container">
                        <div class="why-body-row">
                            <div class="why-body__column">
                                <div class="why-body-item">
                                    <div class="why-body-item__icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/why/icons/01.png" alt="01"></div>
                                    <div class="why-body-item-body">
                                        <div class="why-body-item-body__title">Always fresh</div>
                                        <div class="why-body-item-body__text">Fresh, seasonal and simple cuisine. Food is our business and our passion.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="why-body__column">
                                <div class="why-body-item">
                                    <div class="why-body-item__icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/why/icons/02.png" alt="02"></div>
                                    <div class="why-body-item-body">
                                        <div class="why-body-item-body__title">Reliable AND Flawless</div>
                                        <div class="why-body-item-body__text">Successful catering is about organisation, high quality service, and great food.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="why-body__column">
                                <div class="why-body-item">
                                    <div class="why-body-item__icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/why/icons/03.png" alt="03"></div>
                                    <div class="why-body-item-body">
                                        <div class="why-body-item-body__title">Clean and Healthy</div>
                                        <div class="why-body-item-body__text">We use only the best organic ingredients and gluten and dairy free cooking.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="why-body__column">
                                <div class="why-body-item">
                                    <div class="why-body-item__icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/why/icons/04.png" alt="04"></div>
                                    <div class="why-body-item-body">
                                        <div class="why-body-item-body__title">fits any size and budget</div>
                                        <div class="why-body-item-body__text">We are able to serve events from 2 to 2000 guests and always at reasonable prices.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts">
                <div class="contacts-top">
                    <div class="container">
                        <div class="contacts__title">Say hello</div>
                        <div class="contacts-body">
                            <div class="contacts-body__column">
                                <div class="contacts-body__item contacts-body__item--1">45-35 #B 39th St, Sunnyside, NY 11104</div>
                            </div>
                            <div class="contacts-body__column">
                                <a href="mailto:contact@primeone.com" class="contacts-body__item contacts-body__item--2">contact@primeone.com</a>
                            </div>
                            <div class="contacts-body__column">
                                <a href="tel:7187777777" class="contacts-body__item contacts-body__item--3">(718) 777-7777</a>
                            </div>
                            <div class="contacts-body__column">
                                <div class="contacts-social">
                                    <div class="contacts-social__item contacts-social__item--1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/social/01.png" alt=""></div>
                                    <div class="contacts-social__item contacts-social__item--2"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/social/02.png" alt=""></div>
                                    <div class="contacts-social__item contacts-social__item--3"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/social/03.png" alt=""></div>
                                    <div class="contacts-social__item contacts-social__item--4"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/social/04.png" alt=""></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="contacts-content">
                    <div class="contacts-content__column">
                        <?php echo do_shortcode('[wpgmza id="1"]') ?>
                        <!-- <div class="contacts-content__map" id="map"></div> -->
                    </div>
                    <div class="contacts-content__column">
                        <div class="contacts-content-form">
                            <div class="contacts-content-form__title">Get in touch</div>
                            <?php echo do_shortcode('[contact-form-7 id="8" title="Контактная форма 1"]') ?>
                            <!-- <form action="" class="contacts-content-form-body">
                                <div class="contacts-content-form-line">
                                    <input autocomplete="off" type="text" name="form[]" placeholder="Name" class="input" />
                                </div>
                                <div class="contacts-content-form-line">
                                    <input autocomplete="off" type="text" name="form[]" placeholder="E-mail or phone number" class="input" />
                                </div>
                                <div class="contacts-content-form-line">
                                    <textarea autocomplete="off" name="form[]" placeholder="Your message" class="input"></textarea>
                                </div>
                                <div class="contacts-content-form-button">
                                    <button type="submit" class="contacts-content-form__btn btn btn--w">Send message</button>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="footer-body">
                    <div class="footer-body__column">
                        <div class="footer__text">© PrimeOne Catering 2014.<a href="#" target="_blanc">Terms & Conditions</a></div>
                    </div>
                    <div class="footer-body__column">
                        <div class="footer__logo">
                        <?php the_custom_logo( $blog_id ); ?>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/logo.png" alt="logo-footer"> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- <script src="https://maps.google.com/maps/api/js?sensor=false&amp;key="></script> -->
    <!-- <script src="./script.js"></script> -->
	<?php wp_footer(); ?>
</body>

</html>