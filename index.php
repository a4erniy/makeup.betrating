<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/slick/slick.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Betrating.ru</title>
</head>
<body>

<header>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="/">
                    <img src="assets/image/logo.png" alt="">
                </a>
            </div>
            <div class="general-menu">
                <ul>
                    <li class="active"><a href="#">Новости</a></li>
                    <li class=""><a href="#">Рейтинг БК<i class="ico"><svg width="12px" height="8px"><use xlink:href="/assets/image/svg-symbols.svg#expand_more_24px"></use></svg></object></i></a></li>
                    <li class=""><a href="#">Прогнозы<i class="ico"><svg width="12px" height="8px"><use xlink:href="/assets/image/svg-symbols.svg#expand_more_24px"></use></svg></i></a></a></li>
                    <li class=""><a href="#">Школа ставок</a></li>
                    <li class=""><a href="#">Бонусы</a></li>
                    <li class="premium"><a href="#"><i class="ico"><svg width="16px" height="11px"><use xlink:href="/assets/image/svg-symbols.svg#crown_24px"></use></svg></i>Премиум</a></li>
                </ul>
            </div>
            <div class="search-bar"></div>
            <div class="search">
                <a href="javascript:void(0);" class="search-button" id="search_button">
                    <span class="loop"><img src="assets/image/svg/action/search_24px.svg"></span>
                    <span class="cross"><img src="assets/image/svg/content/clear_24px.svg"></span>
                </a>
            </div>
            <div class="login">
                <div class="login-button button" id="login_button">Вход</div>
                <div class="logged" id="logged" style="display: none"><img src="" class="userpic"></div>
            </div>
        </div>
    </div>
</header>

<section class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <?php include_once 'parts/forecast-slider.php'; ?>
                <?php include_once 'parts/company-slider.php'; ?>
            </div>
            <div class="col-4">
                <?php include_once 'parts/betting-center.php'; ?>
            </div>
        </div>
    </div>
</section>
<section class="forecast-area">
    <div class="container">
        <div class="section-header">
            <div class="section-title">Прогнозы на спорт</div>
            <ul class="forecast-sport tabs-list">
                <li class="tabs-item">
                    <a href="#" class="active"><span class="ico"><img src="assets/image/svg/action/view_headline_24px.svg"></span>Все</a>
                </li>
                <li class="tabs-item">
                    <a href="#"><span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>Футбол</a>
                </li>
                <li class="tabs-item">
                    <a href="#"><span class="ico"><img src="assets/image/svg/16x16/Sports/basketball.svg"></span>Баскетбол</a>
                </li>
                <li class="tabs-item">
                    <a href="#"><span class="ico"><img src="assets/image/svg/16x16/Sports/tennis.svg"></span>Теннис</a>
                </li>
                <li class="tabs-item">
                    <a href="#"><span class="ico"><img src="assets/image/svg/16x16/Sports/hockey.svg"></span>Хоккей</a>
                </li>
            </ul>
        </div>
        <div class="forecast-table">
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card premium">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card premium">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
            <a href="#" class="forecast-card">
                <div class="bg"></div>
                <div class="league">
                    <span class="ico"><img src="assets/image/svg/16x16/Sports/football.svg"></span>
                    <span class="name">Лига чемпионов</span>
                </div>
                <div class="team team-first">
                    <span class="name">Краснодар</span>
                    <span class="logo"><img src="content/team/logo-1.png"></span>
                </div>
                <div class="match">
                    <div class="date">23 Окт</div>
                    <div class="time">17:00</div>
                </div>
                <div class="team">
                    <span class="logo"><img src="content/team/logo-2.png"></span>
                    <span class="name">Интер</span>
                </div>
                <div class="company"><span class="logo"><img src="content/company/leon.png"></span></div>
                <div class="value"><span class="mask">1.95</span></div>
            </a>
        </div>
        <div class="section-more">
            <a href="#" class="button button-grey">Все прогнозы</a>
        </div>
    </div>
</section>
<section class="school-area"></section>
<section class="school-area"></section>
<section class="news-area"></section>
<section class="bonuses-area"></section>
<section class="stavkatv-area"></section>

<footer></footer>

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/popper.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="/assets/js/scripts.js"></script>

</body>
</html>
