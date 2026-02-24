<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Искусство создания AI-ботов</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIxNiIgY3k9IjE2IiByPSI1IiBmaWxsPSIjMDBEMkZGIi8+PHBhdGggZD0iTTE2IDJDMTUuMjY1MyAxNiAxNiAxNiAyNiAxNiIgc3Ryb2tlPSIjMDBEMkZGIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjxwYXRoIGQ9Ik0xNiAyQzE2LjczNDcgMTYgMTYgMTYgNiAxNiIgc3Ryb2tlPSIjM0UyNzIzIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1vcGFjaXR5PSIwLjMiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjxwYXRoIGQ9Ik0xNiAzMEMxNi43MzQ3IDE2IDE2IDE2IDYgMTYiIHN0cm9rZS1vcGFjaXR5PSIwLjMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjM0UyNzIzIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz48cGF0aCBkPSJNMTYgMzBDMTUuMjY1MyAxNiAxNiAxNiAyNiAxNiIgc3Ryb2tlPSIjMDBEMkZGIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjwvc3ZnPg=="> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#process" class="nav__link">Процесс</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary header__btn">
                Связаться
            </a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="badge">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии в рамках нашей передовой цифровой инфраструктуры.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                    Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия 
                    и предпочтения (например, язык, настройки региона Франция и другие параметры) 
                    в течение определенного времени.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют безопасно перемещаться по страницам <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш блог про AI-инструменты.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта при изучении материалов по разработке ботов.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для доставки предложений, соответствующих вашим интересам в сфере автоматизации.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и безопасной работы платформы.</li>
                    <li>Анализ пользовательского поведения для оптимизации контента блога.</li>
                    <li>Персонализация интерфейса для пользователей в Европе.</li>
                    <li>Предоставление экспертной поддержки и релевантных материалов.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Настройка в нашем <strong>Cookie Popup</strong> сохраняет ваш выбор локально. Вы также можете в любой момент изменить настройки в браузере. Однако, обратите внимание: отключение строго необходимых cookie может привести к некорректной работе некоторых функций.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах мы используем внешние сервисы, такие как библиотеки визуализации и аналитические инструменты. Мы рекомендуем ознакомиться с их политиками конфиденциальности. Предложение и доступ к платформе открыты согласно нормам ЕС.
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+33189480764">+33 1 89 48 07 64</a></li>
                        <li><strong>Адрес:</strong> 12 Rue de la Paix, 75002 Paris, France</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__icon"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__desc">
                    Инновационная технология разработки AI-ассистентов, которая меняет правила игры в бизнесе.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#tech">Технологии</a></li>
                    <li><a href="./#process">Процесс</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone" class="icon-sm"></i>
                        <a href="tel:+33189480764">+33 1 89 48 07 64</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-sm"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <span>12 Rue de la Paix, 75002 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.</p>
        </div>
    </footer>
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu__inner">
            <button class="mobile-menu__close" id="menu-close"><i data-lucide="x"></i></button>
            <nav class="mobile-nav">
                <ul class="mobile-nav__list">
                    <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
                    <li><a href="./#tech" class="mobile-nav__link">Технологии</a></li>
                    <li><a href="./#process" class="mobile-nav__link">Процесс</a></li>
                    <li><a href="./#cases" class="mobile-nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="mobile-nav__link">Блог</a></li>
                    <li><a href="./#contact" class="mobile-nav__link mobile-nav__link--cta">Связаться</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>