// ========================================
// ANIMATIONS MODULE
// Advanced animations and interactions
// ========================================

/**
 * Scroll Reveal Animation
 * Reveals elements as they enter the viewport
 */
export function initScrollReveal(selector = '.animate-on-scroll', options = {}) {
    const defaultOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px',
        ...options
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');

                // Add stagger delay based on index
                const delay = entry.target.dataset.delay || 0;
                entry.target.style.transitionDelay = `${delay}ms`;

                // Unobserve after animation
                observer.unobserve(entry.target);
            }
        });
    }, defaultOptions);

    document.querySelectorAll(selector).forEach(el => observer.observe(el));
}

/**
 * Parallax Scroll Effect
 * Creates depth by moving elements at different speeds
 */
export function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    function updateParallax() {
        const scrolled = window.pageYOffset;

        parallaxElements.forEach(element => {
            const speed = parseFloat(element.dataset.parallax) || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translate3d(0, ${yPos}px, 0)`;
        });
    }

    window.addEventListener('scroll', updateParallax, { passive: true });
    updateParallax(); // Initial call
}

/**
 * Hover Tilt Effect
 * 3D tilt effect on mouse hover
 */
export function initHoverTilt(selector = '.hover-tilt') {
    const elements = document.querySelectorAll(selector);

    elements.forEach(element => {
        element.addEventListener('mousemove', (e) => {
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            element.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
        });

        element.addEventListener('mouseleave', () => {
            element.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });
}

/**
 * Magnetic Button Effect
 * Buttons that follow the cursor
 */
export function initMagneticButtons(selector = '.btn-magnetic') {
    const buttons = document.querySelectorAll(selector);

    buttons.forEach(button => {
        button.addEventListener('mousemove', (e) => {
            const rect = button.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            button.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });

        button.addEventListener('mouseleave', () => {
            button.style.transform = 'translate(0, 0)';
        });
    });
}

/**
 * Typing Animation Effect
 * Simulates typing text
 */
export function typeWriter(element, text, speed = 50) {
    let i = 0;
    element.textContent = '';

    function type() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }

    type();
}

/**
 * Counter Animation
 * Animates numbers counting up
 */
export function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

/**
 * Ripple Effect on Click
 * Material design ripple effect
 */
export function initRippleEffect(selector = '.ripple') {
    const elements = document.querySelectorAll(selector);

    elements.forEach(element => {
        element.addEventListener('click', function (e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple-effect');

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });
}

/**
 * Smooth Page Transitions
 * Fade in/out effect between page loads
 */
export function initPageTransitions() {
    document.body.classList.add('fade-in');

    document.querySelectorAll('a:not([target="_blank"])').forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            if (href && !href.startsWith('#') && !href.startsWith('javascript:')) {
                e.preventDefault();
                document.body.classList.add('fade-out');

                setTimeout(() => {
                    window.location.href = href;
                }, 300);
            }
        });
    });
}

/**
 * Initialize all animations
 */
export function initAllAnimations() {
    initScrollReveal();
    initParallax();
    initHoverTilt();
    initMagneticButtons();
    initRippleEffect();
    initPageTransitions();
}

// Auto-initialize on DOM ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAllAnimations);
} else {
    initAllAnimations();
}
