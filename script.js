document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    lucide.createIcons();

    // 2. Мобильное меню
    const burger = document.getElementById('burger');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = (state) => {
        mobileMenu.classList.toggle('active', state);
        document.body.style.overflow = state ? 'hidden' : '';
    };

    burger.addEventListener('click', () => toggleMenu(true));
    menuClose.addEventListener('click', () => toggleMenu(false));
    mobileLinks.forEach(link => link.addEventListener('click', () => toggleMenu(false)));

    // 3. Капча (Математический пример)
    const captchaQuestion = document.getElementById('captcha-question');
    const captchaInput = document.getElementById('captcha-input');
    let captchaResult;

    const generateCaptcha = () => {
        const a = Math.floor(Math.random() * 10) + 1;
        const b = Math.floor(Math.random() * 10) + 1;
        captchaResult = a + b;
        captchaQuestion.textContent = `${a} + ${b} =`;
    };
    generateCaptcha();

    // 4. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phone-input');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^\d+]/g, '');
    });

    // 5. Обработка формы (AJAX Simulation)
    const contactForm = document.getElementById('contact-form');
    const formStatus = document.getElementById('form-status');

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Проверка капчи
        if (parseInt(captchaInput.value) !== captchaResult) {
            alert('Неверный ответ на капчу!');
            generateCaptcha();
            return;
        }

        const submitBtn = contactForm.querySelector('button');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Отправка...';

        // Имитация AJAX
        setTimeout(() => {
            contactForm.reset();
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Запросить доступ <i data-lucide="send" class="ml-2 icon-sm"></i>';
            lucide.createIcons();
            
            formStatus.textContent = 'Спасибо! Ваша заявка принята. Платформа уже доступна для вас.';
            formStatus.classList.add('form__message--success');
            
            generateCaptcha();

            setTimeout(() => {
                formStatus.classList.remove('form__message--success');
                formStatus.textContent = '';
            }, 5000);
        }, 1500);
    });

    // 6. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // 7. Параллакс для Hero (GSAP)
    document.addEventListener('mousemove', (e) => {
        const x = (e.clientX - window.innerWidth / 2) / 50;
        const y = (e.clientY - window.innerHeight / 2) / 50;
        gsap.to('.ai-core', { duration: 1, x: x, y: y, ease: "power2.out" });
    });

    // 8. Плавное появление секций
    gsap.registerPlugin(ScrollTrigger);
    document.querySelectorAll('.section').forEach(section => {
        gsap.from(section.querySelectorAll('.container > *'), {
            scrollTrigger: {
                trigger: section,
                start: "top 85%",
            },
            duration: 1,
            y: 40,
            opacity: 0,
            stagger: 0.15,
            ease: "power2.out"
        });
    });
});