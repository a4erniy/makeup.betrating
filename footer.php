<footer>
    <div class="container">
        <div class="footer">
            <div class="footer-row footer-row-one">
                <div class="logo">
                    <img src="assets/image/logo/betrating-grey.png" alt="betrating">
                </div>
                <div class="menu">
                    <ul>
                        <li class=""><a href="/news.php">Новости</a></li>
                        <li class=""><a href="#">Рейтинг БК</a></li>
                        <li class=""><a href="/forecasts.php">Прогнозы</a></li>
                        <li class=""><a href="#">Школа ставок</a></li>
                        <li class=""><a href="/bonuses.php">Бонусы</a></li>
                        <li class="premium">
                            <svg><use xlink:href="/assets/image/svg-symbols.svg#crown"></use></svg>
                            <a href="forecasts-premium.php">Премиум</a>
                        </li>
                    </ul>
                    <div class="pages">
                        <a href="#">Прогнозы на РПЛ</a>
                        <a href="#">Прогнозы на Лигу чемпионов</a>
                        <a href="#">Прогнозы на Лигу Европы</a>
                    </div>
                </div>
                <div class="social">
                    <a href="#" class="social-item vk"><i class="ico"><svg><use xlink:href="/assets/image/svg-symbols.svg#vk"></use></svg></i></a>
                    <a href="#" class="social-item tw"><i class="ico"><svg><use xlink:href="/assets/image/svg-symbols.svg#twitter"></use></svg></i></a>
                    <span class="social-item age">18+</span>
                </div>
            </div>
            <div class="footer-row footer-row-two">
                <div class="services">
                    Сетевое издание «Рейтинг букмекерских контор» зарегистрировано в Федеральной службе
                    по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор)
                    1 ноября 2017 года. Свидетельство о регистрации ЭЛ № ФС 77 - 71481
                </div>
                <div class="services">
                    Учредитель: ООО "Ленинград Медиа"<br>
                    Главный редактор: Точилин Д.Н.<br>
                    Электронная почта редакции: <a href="#">smi@betrating.ru</a>
                </div>
            </div>
            <div class="footer-row footer-row-three">
                <div class="services" style="margin-right: 10px;"><a href="#">Пользовательское соглашение</a></div>
                <div class="services" style="margin-right: 68px;"><a href="#">Политика приватности</a></div>
                <div class="services">© 2015 - 2018 независимый рейтинг букмекеров от betrating.ru</div>
                <div class="services">Designed by <a href="#">Flatstudio</a></div>
            </div>
        </div>
    </div>
</footer>

<div class="backdrop" id="backdrop"></div>

<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="resetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mask"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Сброс пароля</h5>
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <svg><use xlink:href="/assets/image/svg-symbols.svg#clear"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="attention text">
                    Чтобы сбросить пароль укажите свой<br>
                    логин или пароль
                </div>
                <div class="form">
                    <form action="">
                        <div class="form-field">
                            <input type="text" name="login" placeholder="Ваш E-mail или логин">
                        </div>
                        <div class="form-field">
                            <input type="submit" name="submit" value="Сбросить пароль">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mask"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Вход</h5>
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <svg><use xlink:href="/assets/image/svg-symbols.svg#clear"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="">
                        <div class="form-field">
                            <input type="text" name="login" placeholder="Ваш E-mail или логин">
                        </div>
                        <div class="form-field">
                            <input type="text" name="pass" placeholder="Пароль">
                            <a href="javascript:void(0);" class="notif" data-dismiss="modal" data-toggle="modal" data-target="#resetModal">Забыли?</a>
                        </div>
                        <div class="form-field">
                            <input type="submit" name="submit" value="войти">
                        </div>
                    </form>
                </div>
                <div class="attention text">
                    Или войдите через социальные сети
                </div>
                <div class="modal-social">
                    <a href="#"><svg><use xlink:href="/assets/image/svg-symbols.svg#facebook"></use></svg>facebook</a>
                    <a href="#"><svg><use xlink:href="/assets/image/svg-symbols.svg#vk"></use></svg>vkontakte</a>
                </div>
            </div>
            <div class="modal-footer text">
                Еще нет аккаунта? <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#successModal">Зарегистрироваться <svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_forward"></use></svg></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mask"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="regModalLabel">Регистрация</h5>
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <svg><use xlink:href="/assets/image/svg-symbols.svg#clear"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="">
                        <div class="form-field">
                            <input type="text" name="login" placeholder="Логин">
                        </div>
                        <div class="form-field">
                            <input type="text" name="name" placeholder="Имя">
                        </div>
                        <div class="form-field">
                            <input type="text" name="fam" placeholder="Фамилия">
                        </div>
                        <div class="form-field">
                            <input type="text" name="pass" placeholder="Пароль">
                        </div>
                        <div class="form-field">
                            <input type="submit" name="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
                <div class="attention text">
                    Создавая аккакунт вы соглашаетесь с нашей<br>
                    <a href="#" target="_blank">Политикой приватности</a>
                </div>
            </div>
            <div class="modal-footer text">
                Уже есть аккаунт? <a href="#">Войти <svg><use xlink:href="/assets/image/svg-symbols.svg#arrow_forward"></use></svg></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mask"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Готово!</h5>
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <svg><use xlink:href="/assets/image/svg-symbols.svg#clear"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="attention text black">
                    Проверьте ваш почтовый ящик, чтобы получить доступ к новому паролю
                </div>
                <div class="">
                    <a href="#" class="button button-green">Вернуться ко входу</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/popper.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="/assets/js/scripts.js?4"></script>

</body>
</html>
