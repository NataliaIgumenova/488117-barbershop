<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Барбершоп каталог</title>
  </head>
  <body>
    <header class="header-page">
        <nav class="header-nav">
            <div class="header-top">
                <a class="header-logo" href="index.html">
                    <img src="http://placehold.it/150x100" alt="logo" width="111" height="24">
                </a>
                <ul class="header-nav">
                    <li><a href="barbershop-info.html">Информация</a></li>
                    <li><a href="barbershop-news.html">Новости</a></li>
                    <li><a href="barbershop-price.html">Прайс лист</a></li>
                    <li class="navigation-nav"><a href="barbershop-shop.html">Магазин</a></li>
                    <li><a href="barbershop-contact.html">Контакты</a></li>
                </ul>
                <ul class="header-login">
                    <li><a href="barbershop-login.html">Вход</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="main-content">
        
        <h1 class="page-title">Средства для ухода</h1>
        <ul class="breadcrumbs">
            <li><a href="index.html">Главная</a></li>
            <li><a href="barbershop-shop.html">Магазин</a></li>
            <li class="navigation-main">Средства для ухода</li>
        </ul>

        <section class="filters">
            <h2 class="invisible-headline">Фильтр товара</h2>
            <form class="filter" method="get" action="https://echo.htmlacademia.ru">
                <fieldset>
                    <legend>Производители:</legend>
                    <ul>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-checkbox" type="checkbox" name="baxter" checked>
                             Baxter of California
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-checkbox" type="checkbox" name="mr-natty">
                            Mr Natty
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-checkbox" type="checkbox" name="suavecito" checked>
                            Suavecito
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-checkbox" type="checkbox" name="malin-goetz">
                            Malin+Goetz
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-checkbox" type="checkbox" name="murray's">
                            Murray's
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-checkbox" type="checkbox" name="american-crew" checked>
                            American Crew
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>Группы товаров:</legend>
                    <ul>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-radio" type="radio" name="product-group" value="shaving">
                            Бритвенные принадлежности
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-radio" type="radio" name="product-group" value="hair-care" checked>
                            Средства для ухода
                        </li>
                        <li class="filter-option">
                            <input class="visually-hidden filter-input filter-input-radio" type="radio" name="product-group" value="accessories">
                            Аксессуары
                        </li>
                    </ul>
                </fieldset>
                <button class="button filter-button" type="submit">Показать</button>
            </form>
        </section>

        <section class="catalog">
            <h2 class="invisible-headline">Список средств для ухода</h2>
            <ul class="catalog-list">
                <li class="catalog-item">
                    <h3>
                        <a href="catalog-item.html">
                            <span class="catalog-category">Набор для путешествий</span>
                            <span class="catalog-item-title">"Baxter of California"</span>
                        </a>
                    </h3>
                    <p class="catalog-item-image">
                        <a href="catalog-item.html">
                            <img src="img/product-1.jpg" width="220" height="165" alt="Набор для путешествий "Baxter of California"">
                        </a>
                    </p>
                    <p>
                        <b>2 900 &#8381;</b>
                        <a class="button" href="#">Купить</a>
                    </p>  
                </li>

                <li class="catalog-item">
                    <h3>
                        <a href="catalog-item.html">
                            <span class="catalog-category">Увлажняющий кондиционер</span>
                            <span class="catalog-item-title">"Baxter of California"</span>
                        </a>
                    </h3>
                    <p class="catalog-item-image">
                        <a href="catalog-item.html">
                            <img src="img/product-2.jpg" width="220" height="165" alt="Увлажняющий кондиционер "Baxter of California"">
                        </a>
                    </p>
                    <p>
                        <b>750 &#8381;</b>
                        <a class="button" href="#">Купить</a>
                    </p>  
                </li>

                <li class="catalog-item">
                    <h3>
                        <a href="catalog-item.html">
                            <span class="catalog-category">Гель для волос</span>
                            <span class="catalog-item-title">"Suavecito"</span>
                        </a>
                    </h3>
                    <p class="catalog-item-image">
                        <a href="catalog-item.html">
                            <img src="img/product-3.jpg" width="220" height="165" alt="Гель для волос "Suavecito"">
                        </a>
                    </p>
                    <p>
                        <b>290 &#8381;</b>
                        <a class="button" href="#">Купить</a>
                    </p>  
                </li>

                <li class="catalog-item">
                    <h3>
                        <a href="catalog-item.html">
                            <span class="catalog-category">Глина для укладки волос</span>
                            <span class="catalog-item-title">"American Crew"</span>
                        </a>
                    </h3>
                    <p class="catalog-item-image">
                        <a href="catalog-item.html">
                            <img src="img/product-4.jpg" width="220" height="165" alt="Глина для укладки волос "American Crew"">
                        </a>
                    </p>
                    <p>
                        <b>500 &#8381;</b>
                        <a class="button" href="#">Купить</a>
                    </p>  
                </li>

                <li class="catalog-item">
                    <h3>
                        <a href="catalog-item.html">
                            <span class="catalog-category">Гель для волос</span>
                            <span class="catalog-item-title">"American Crew"</span>
                        </a>
                    </h3>
                    <p class="catalog-item-image">
                        <a href="catalog-item.html">
                            <img src="img/product-5.jpg" width="220" height="165" alt="Гель для волос "American Crew"">
                        </a>
                    </p>
                    <p>
                        <b>300 &#8381;</b>
                        <a class="button" href="#">Купить</a>
                    </p>  
                </li>

                <li class="catalog-item">
                    <h3>
                        <a href="catalog-item.html">
                            <span class="catalog-category">Набор для бритья</span>
                            <span class="catalog-item-title">"Baxter of California"</span>
                        </a>
                    </h3>
                    <p class="catalog-item-image">
                        <a href="catalog-item.html">
                            <img src="img/product-5.jpg" width="220" height="165" alt="Набор для бритья "Baxter of California"">
                        </a>
                    </p>
                    <p>
                        <b>3 900 &#8381;</b>
                        <a class="button" href="#">Купить</a>
                    </p>  
                </li>
            </ul>

            <ul class="pagination-list">
                <li class="pagination-item"><a href="#">1</a></li>
                <li class="pagination-item pagination-item-carrent"><a>2</a></li>
                <li class="pagination-item"><a href="#">3</a></li>
                <li class="pagination-item"><a href="#">4</a></li>
            </ul>
        </section>
    </main>
    
    <footer>
        <p>
            Барбершоп "Бородинский"<br>
            Адрес: г.Санкт-Петербург, ул. Б. Конюшенная, д. 9/18 <br>
            <a href="map.html">Как найти нас?</a><br>
            Телефон: +7(495)666-02-66
        </p>
        <div class="footer-social">
            <b>Давайте жружить</b>
            <ul>
                <li><a href="social-battom" href="#">Вконтакте</a></li>
                <li><a href="social-battom" href="#">Фэйсбук</a></li>
                <li><a href="social-battom" href="#">Инстаграм</a></li>
            </ul>
        </div>
        <p class="footer-copiright">
            <b>Разработано:</b><a class="batton" href="https://echo.htmlacademia.ru">HTML Academi</a>
        </p>
    </footer>

    <section class="modal madal-login">
        <h2>Личный кабинет</h2>
        <p>Введите свой логин и пароль</p>
        <form class="login-form" action="https://echo.htmlacademia.ru" method="post">
            <p>
               <input class="login-icon-user" type="text" name="login" placeholder="Логин">
            </p>
            <p>
               <input class="login-icon-password" type="password" name="password" placeholder="Пароль">
            </p>
            <p class="login-password-info">
                <input class="visually-hidden0" type="checkbox" name="remember">
                Запомните меня
                <a class="restore" href="#">Я забыл пароль!</a>
            </p>
            <button class="button" type="submit">Войти</button>
        </form>
        <span class="modal-close">x</span>
    </section>
  </body>
</html>
