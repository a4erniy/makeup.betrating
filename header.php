<?php

$body_class = '';
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $body_class = 'page-main';
        break;
    case '/forecast.php':
        $body_class = 'page-single-forecast';
        $body_class .= ' grey-lightest';
        break;
    case '/forecast-premium.php':
        $body_class = 'page-single-forecast';
        $body_class .= ' grey-lightest';
        break;
    case '/bonus.php':
        $body_class = 'page-single';
        $body_class .= ' grey-lightest';
        break;
    case '/news-single.php':
        $body_class = 'page-single';
        $body_class .= ' grey-lightest';
        break;
    case '/company.php':
        $body_class = 'page-single-company';
        $body_class .= ' grey-lightest';
        break;
    case '/company-list.php':
        $body_class = 'page-archive-company';
        $body_class .= ' grey-lightest';
        break;
    case '/bonuses.php':
        $body_class = 'page-archive-bonuses';
        break;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/slick/slick.css">
    <link rel="stylesheet" href="/assets/css/style.css?3">
    <title>Betrating.ru</title>
</head>
<body class="<?php echo $body_class; ?>">

<div class="fullwidth-bg fullwidth-bg-betting-center"></div>

<header>
    <div class="container">
        <div class="header">
            <div class="burger" id="menu_mob"><span></span></div>
            <div class="logo">
                <a href="/">
                    <img src="assets/image/logo/betrating.png" alt="betrating">
                </a>
            </div>
            <div class="menu" id="menu_header">
                <ul>
                    <li class="active"><a href="/news.php">Новости</a></li>
                    <li class="">
                        <a href="#">Рейтинг БК</a>
                        <span class="arrow"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_down"></use></svg></span>
                        <ul class="sub-menu bubble">
                            <li><a href="#">Легальные БК</a></li>
                            <li><a href="#">БК с бонусами</a></li>
                            <li><a href="#">БК на iOS</a></li>
                            <li><a href="#">БК на Android</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="/forecasts.php">Прогнозы</a>
                        <span class="arrow"><svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_down"></use></svg></span>
                        <ul class="sub-menu bubble">
                            <li><a href="#">Прогнозы на РПЛ</a></li>
                            <li><a href="#">Прогнозы на Лигу чемпионов</a></li>
                            <li><a href="#">Прогнозы на Лигу Европы</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="#">Школа ставок</a></li>
                    <li class=""><a href="/bonuses.php">Бонусы</a></li>
                    <li class="premium active">
                        <svg><use xlink:href="/assets/image/svg-symbols.svg#crown"></use></svg>
                        <a href="/forecasts-premium.php">Премиум</a>
                    </li>
                </ul>
            </div>
<!--            <div class="search-bar"></div>-->
<!--            <div class="search">-->
<!--                <a href="javascript:void(0);" class="search-button" id="search_button">-->
<!--                    <span class="loop"><img src="assets/image/svg/action/search_24px.svg"></span>-->
<!--                    <span class="cross"><img src="assets/image/svg/content/clear_24px.svg"></span>-->
<!--                </a>-->
<!--            </div>-->
            <div class="login">
                <a href="javascript:void(0);" class="login-button button button-green dropdown-toggle" id="login_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg><use xlink:href="/assets/image/svg-symbols.svg#userpic"></use></svg>
                    <span>Вход</span>
                </a>
                <div class="login-bubble bubble dropdown-menu dropdown-menu-right" id="login_button_bubble" aria-labelledby="login_button">
                    <ul>
                        <li><a href="javascript:void(0);" class="in" data-toggle="modal" data-target="#loginModal">Войти в аккаунт</a></li>
                        <li><a href="javascript:void(0);" class="reg" data-toggle="modal" data-target="#regModal">Зарегистрироваться</a></li>
                    </ul>
                </div>
                <div style="display: none" class="login-profile" id="login_profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="image"><img src="content/userpic.jpg" alt=""></div>
                    <svg class="down"><use xlink:href="/assets/image/svg-symbols.svg#arrow_down"></use></svg>
                    <svg class="up"><use xlink:href="/assets/image/svg-symbols.svg#arrow_up"></use></svg>
                </div>
                <div style="display: none" class="login-bubble bubble" id="login_profile_bubble" aria-labelledby="login_profile">
                    <ul>
                        <li><a href="#" class="out"><svg><use xlink:href="/assets/image/svg-symbols.svg#off"></use></svg>Выход</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
