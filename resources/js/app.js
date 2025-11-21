import './bootstrap';

/* ========================================
   MOBILE MENU TOGGLE
   ======================================== */
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('[data-mobile-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function () {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    }
});

/* ========================================
   NAVBAR SCROLL EFFECT
   ======================================== */
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    }
});

/* ========================================
   SCROLL REVEAL ANIMATIONS
   ======================================== */
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.addEventListener('DOMContentLoaded', function () {
    const revealElements = document.querySelectorAll('.reveal, .animate-on-scroll');
    revealElements.forEach(el => observer.observe(el));
});

/* ========================================
   SMOOTH SCROLL FOR ANCHOR LINKS
   ======================================== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '#!') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - navbarHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }
    });
});

/* ========================================
   PASSWORD STRENGTH METER
   ======================================== */
const passwordInput = document.querySelector('input[name="password"]');
if (passwordInput) {
    const strengthBar = document.querySelector('[data-strength-bar]');
    const strengthText = document.querySelector('[data-strength-text]');

    passwordInput.addEventListener('input', function () {
        const password = this.value;
        let strength = 0;

        if (password.length >= 8) strength++;
        if (password.length >= 12) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;

        const percentage = (strength / 5) * 100;
        const levels = ['Muito Fraca', 'Fraca', 'Média', 'Boa', 'Forte'];
        const colors = ['#dc2626', '#f59e0b', '#eab308', '#84cc16', '#22c55e'];

        if (strengthBar && strengthText) {
            strengthBar.style.width = percentage + '%';
            strengthBar.style.backgroundColor = colors[strength - 1] || colors[0];
            strengthText.textContent = levels[strength - 1] || levels[0];
        }
    });
}

/* ========================================
   FORM VALIDATION FEEDBACK
   ======================================== */
const emailInput = document.querySelector('input[type="email"]');
if (emailInput) {
    emailInput.addEventListener('blur', function () {
        const email = this.value;
        const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

        if (email && !isValid) {
            this.classList.add('border-red-500');
            this.classList.remove('border-gray-300');
        } else {
            this.classList.remove('border-red-500');
            this.classList.add('border-gray-300');
        }
    });
}

const passwordConfirmInput = document.querySelector('input[name="password_confirmation"]');
if (passwordConfirmInput && passwordInput) {
    passwordConfirmInput.addEventListener('input', function () {
        if (this.value && this.value !== passwordInput.value) {
            this.classList.add('border-red-500');
            this.classList.remove('border-gray-300');
        } else {
            this.classList.remove('border-red-500');
            this.classList.add('border-gray-300');
        }
    });
}

// ========================================
// EXPORT FOR MODULE USAGE
// ========================================
export { };

