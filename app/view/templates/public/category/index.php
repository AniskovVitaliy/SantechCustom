<!doctype html>
<html lang="en">
<head>
    <!--Кодировка-->
    <meta charset="UTF-8">
    <!--Адаптиный размер экрана содержимое подстраивается под разрешение экрана-->
    <!--<meta name="viewport" content="width=1170"> такой вариант будет уменьшать содержимое страницы после 1170px-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--Отключает форматирование ссылки у номера телефона на IOS-->
    <meta name="format-detection" content="telephone=no">

    <!-- SEO -->
    <!--Описание страницы-->
    <meta name="description" content="Описание страницы">
    <!--Ключевые слова-->
    <meta name="keywords" content="магазин сантехники, сантехника, магазин, смесители, душевые">
    <!--Поисковые роботы-->
    <meta name="robots" content="">
    <!--Адрес-->
    <meta name="Address" content="Пушкина 12">
    <!--Перезагрузка страницы через n секунд на указанный url-->
    <!--<meta http-equiv="refresh" content="0; url=">-->
    <!-- ./SEO -->

    <!-- Для социальных сетей -->
    <!--Facebook-->
    <!--Что бы настроить вид нашей страницы в посте мы пишем следующие мета теги:-->
    <!-- локализация сайта, для русскоязычного сайта ru_RU -->
    <meta property="og:locale" content="ru_RU">
    <!-- тип контента, по умолчанию используется article -->
    <meta property="og:type" content="article">
    <!-- заголовок страницы, который будет выводится в записи социальной сети -->
    <meta property="og:title" content="META теги">
    <!-- описание страницы -->
    <meta property="og:description" content="Описание страницы про META теги">
    <!-- ссылка на изображение, которое будет публиковаться в записи -->
    <meta property="og:image" content="http://mysite/img/bg.jpg">
    <!-- ссылка на текущую страницу -->
    <meta property="og:url" content="http://mysite">
    <!-- название сайта -->
    <meta property="og:site_name" content="Дом и Дача">
    <!--Проверить разметку можно в валидаторе от Facebook https://developers.facebook.com/tools/debug/sharing/-->

    <!-- Тип карты, по умолчанию используется summary -->
    <meta name="twitter:card" content="summary">
    <!-- Имя/логин автора -->
    <meta name="twitter:site" content="Виталий">
    <!-- Название страницы -->
    <meta name="twitter:title" content="META теги">
    <!-- Описание страницы -->
    <meta name="twitter:description" content="про META теги">
    <!-- Cсылка на изображение -->
    <meta name="twitter:image" content="http://mysite/bg.jpg">
    <!-- ./Для социальных сетей -->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дом и Дача</title>

    <link rel="shortcut icon" href="/app/view/asset/icon/ico/shower.ico">

    <!--jquery-->
    <script src="/app/view/asset/library/jq/jquery-3.6.4.min.js"></script>

    <!--bootstrap-->
    <!--<link rel="stylesheet" href="/app/view/asset/library/bootstrap/dist/css/bootstrap.css">-->

    <!--slick slider-->
<!--    <link rel="stylesheet" type="text/css" href="/app/view/asset/library/slick-1.8.1/slick/slick.css"/>-->
<!--    <link rel="stylesheet" type="text/css" href="/app/view/asset/library/slick-1.8.1/slick/slick-theme.css">-->

    <!--fontawesome.com-->
    <link href="/app/view/asset/icon/fontawesome/css/all.css" rel="stylesheet">
    <link href="/app/view/asset/icon/fontawesome/css/brands.css" rel="stylesheet">
    <link href="/app/view/asset/icon/fontawesome/css/solid.css" rel="stylesheet">
    <!--./fontawesome.com-->

    <!--icomoon-->
    <link href="/app/view/asset/icon/icomoon/custom/style.css" rel="stylesheet">
    <link href="/app/view/asset/icon/icomoon/google/style.css" rel="stylesheet">
    <!--./icomoon-->

    <!--main css-->
    <link rel="stylesheet" href="/app/view/asset/css/public/category.css">
    <!--./main css-->
</head>
<body class="_column-start">

<nav class="search-list _hide">
    <ul class="search-list__container _container">
        <li class="search-list__item"><a href="" class="search-list__link">Product 1</a></li>
        <li class="search-list__item"><a href="" class="search-list__link">Product 1</a></li>
        <li class="search-list__item"><a href="" class="search-list__link">Product 1</a></li>
        <li class="search-list__item"><a href="" class="search-list__link">Product 1</a></li>
        <li class="search-list__item"><a href="" class="search-list__link">Product 1</a></li>
    </ul>
</nav>

<header class="header _box-shadow-l">
    <!-- TOP PART OF HEADER -->
    <div class="header__block _container">
        <div class="header__content _row-between _item-center">

            <!-- LOGO -->
            <div class="logo">
                <div class="logo__title _text-xxl"><a href="/">Дом и Дача</a></div>
                <div class="logo__sub-title">магазин товаров для дома</div>
            </div>
            <!-- ./LOGO -->

            <!-- SEARCH -->
            <div class="search _space-auto _hide">
                <form class="search__form _row-between" action="">
                    <input type="search" name="search" value="" placeholder="поиск">
                    <span class="google_icon-close close_search icon"></span>
                </form>
            </div>
            <!-- ./SEARCH -->

            <div class="icons _row-left">
                <div class="icons__item search_btn _row-center _item-center">
                    <span class="google_icon-search icon"></span>
                </div>
                <div class="icons__item _row-between _item-center">
                    <div class="icons__item-icon">
                        <span class="google_icon-shopping icon"></span>
                    </div>
                    <div class="icons__item-price _text-md">
                        000.00 руб.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./TOP PART OF HEADER -->
    <div class="line"></div>
    <!-- BLOCK MENU -->
    <div class="main-menu _container">
        <div class="main-menu__blocks _row-left">
            <div class="main-menu__top _row-between _hide">
                <div class="main-menu__top-button-back btn_back _space-auto"><span class="google_icon-arrow_back_1 icon"></span></div>
                <div class="main-menu__top-title _text-xl">Категории</div>
                <div class="main-menu__top-close _space-auto _row-right"><span class="google_icon-close icon"></span></div>
            </div>
            <div class="main-menu__middle _text-lg">
                <nav class="menu">
                    <ul class="menu__list">
                        <li><a href="#" class="menu__link">Семена</a></li>
                        <li><a href="#" class="menu__link">Батарейки</a></li>
                        <li>
                            <a href="catalog.html" class="menu__link">Сантехника</a>
                            <span class="menu__arrow arrow"></span>
                            <ul class="sub-menu__list">
                                <li><a href="#" class="sub-menu__link">Пункт 3.1</a></li>
                                <li>
                                    <a href="#" class="sub-menu__link">Пункт 3.2</a>
                                    <span class="sub-menu__arrow arrow"></span>
                                    <ul class="sub-sub-menu__list">
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.2.1</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.2.2</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.2.3</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.2.4</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.2.5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="sub-menu__link">Пункт 3.3</a></li>
                                <li>
                                    <a href="#" class="sub-menu__link">Пункт 3.4</a>
                                    <span class="sub-menu__arrow arrow"></span>
                                    <ul class="sub-sub-menu__list">
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.4.1</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.4.2</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.4.3</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.4.4</a></li>
                                        <li><a href="#" class="sub-sub-menu__link">Пункт 3.4.5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="sub-menu__link">Пункт 3.5</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__link">Товары для дачи</a></li>
                        <li>
                            <a href="#" class="menu__link">Фурнитура</a>
                            <span class="menu__arrow arrow"></span>
                            <ul class="sub-menu__list">
                                <li><a href="#" class="sub-menu__link">Пункт 5.1</a></li>
                                <li><a href="#" class="sub-menu__link">Пункт 5.2</a></li>
                                <li><a href="#" class="sub-menu__link">Пункт 5.3</a></li>
                                <li><a href="#" class="sub-menu__link">Пункт 5.4</a></li>
                                <li><a href="#" class="sub-menu__link">Пункт 5.5</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="main-menu__bottom">

            </div>
        </div>
    </div>
    <!-- ./BLOCK MENU -->
</header>

<main class="main _space-auto">
    <div class="_container">

        <!-- BREADCRUMBS -->
        <nav class="breadcrumbs _row-left _item-center">
            <ul class="breadcrumbs__items _row-left">
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Главная</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Сантехника</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Смесители</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Для кухни</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">frap 512</a>
                </li>
            </ul>
        </nav>
        <!-- ./BREADCRUMBS -->

        <!-- CATEGORIES CARDS -->
        <div class="cards">
            <div class="cards__title _text-lg">Категории</div>
            <div class="line"></div>
            <div class="cards__item _row-between-wrap">

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта Название продукта Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/2.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/3.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/4.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

            </div>
        </div>
        <!-- ./CATEGORIES CARDS -->

        <!-- PRODUCT CARDS -->
        <div class="cards">
            <div class="cards__title _text-lg">Продукты</div>
            <div class="line"></div>

                <!-- SORT -->
                <div class="sort-block _row-left _text-sm">
                    <h3>Сортировка: </h3>
                    <nav class="sort">
                        <ul class="sort__list">
                            <li>
                                <a href="" class="sort__link no-click">Популярность</a>
                                <ul class="sort__dropdown-list">
                                    <li><a href="" class="sort__dropdown-link">Убывание цены</a></li>
                                    <li><a href="" class="sort__dropdown-link">Возрастание цены</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- ./SORT -->

            <div class="line"></div>
            <div class="cards__item _row-between-wrap">

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта Название продукта Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/2.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/3.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/4.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта Название продукта Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/2.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/3.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/4.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="/app/view/asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

            </div>

            <div class="line"></div>

        </div>
        <!-- ./PRODUCT CARDS -->

        <!-- PAGINATION -->
        <div class="pagination-block _row-around">
            <nav class="pagination">
                <ul class="pagination__list _row-left _text-sm">
                    <li class="pagination__link _radius"><span class="google_icon-double_arrow"></span></li>
                    <li class="pagination__link _radius active"><a href="#">1</a></li>
                    <li class="pagination__link _radius"><a href="#">2</a></li>
                    <li class="pagination__link _radius"><a href="#">3</a></li>
                    <li class="pagination__link _radius"><a href="#">4</a></li>
                    <li class="pagination__link _radius"><a href="#">5</a></li>
                    <li class="pagination__link _radius no-click"><a href="#">...</a></li>
                    <li class="pagination__link _radius"><a href="#">10</a></li>
                    <li class="pagination__link _radius"><span class="google_icon-double_arrow"></span></li>
                </ul>
            </nav>
        </div>
        <!-- ./PAGINATION -->

    </div>
</main>

<footer class="footer">
    <div class="footer__container _container _text-md">
        <div class="footer__mobile _row-around _item-center">
            <div class="footer__mobile-search search_btn _row-center _item-center"><span class="google_icon-search icon"></span></div>
            <div class="footer__mobile-basket _row-center _item-center"><span class="google_icon-shopping icon"></span></div>
            <div class="footer__mobile-menu _row-center _item-center btn_menu"><span class="google_icon-menu_FILL0 icon btn_menu"></span></div>
        </div>
        <div class="footer__pc _row-left _item-end">
            <span>Все права защищены</span>
        </div>
    </div>
</footer>

<!--bootstrap-->
<!--<script src="/app/view/asset/library/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!--<script src="/app/view/asset/library/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->
<!--<script src="/app/view/asset/library/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!--slick slider-->

<script type="text/javascript" src="/app/view/asset/library/slick-1.8.1/slick/slick.min.js"></script>

<script src="/app/view/asset/js/app.js" type="module"></script>
</body>
</html>