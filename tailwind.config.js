/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // Carmesim/Sangue - Estilo iPhone 17
                crimson: {
                    50: '#fff1f2',
                    100: '#ffe1e4',
                    200: '#ffc7ce',
                    300: '#ff9eab',
                    400: '#ff6b7f',
                    500: '#f83f5a',
                    600: '#e61e42',
                    700: '#c2122f',
                    800: '#a1132d',
                    900: '#87142c',
                },
                // Blood Red - Tom de sangue profundo
                blood: {
                    50: '#fef2f2',
                    100: '#fee2e2',
                    200: '#fecaca',
                    300: '#fca5a5',
                    400: '#f87171',
                    500: '#ef4444',
                    600: '#dc2626',
                    700: '#b91c1c',
                    800: '#991b1b',
                    900: '#7f1d1d',
                },
                // Accent - Vermelho carmesim vibrante
                accent: {
                    DEFAULT: '#e61e42',
                    light: '#ff6b7f',
                    dark: '#c2122f',
                    glow: '#ff9eab',
                },
                // Dourado - Luz divina
                gold: {
                    50: '#fffbeb',
                    100: '#fef3c7',
                    200: '#fde68a',
                    300: '#fcd34d',
                    400: '#fbbf24',
                    500: '#f59e0b',
                    600: '#d97706',
                },
                // Lavanda - Espiritual
                lavender: {
                    50: '#faf5ff',
                    100: '#f3e8ff',
                    200: '#e9d5ff',
                    300: '#d8b4fe',
                    400: '#c084fc',
                    500: '#a855f7',
                    600: '#9333ea',
                },
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                display: ['Playfair Display', 'Georgia', 'serif'],
                body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            animation: {
                blob: "blob 7s infinite",
                'fade-in': 'fadeIn 0.6s ease-out',
                'fade-in-up': 'fadeInUp 0.6s ease-out',
                'slide-up': 'slideUp 0.5s ease-out',
                'slide-down': 'slideDown 0.5s ease-out',
                'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                'float': 'float 3s ease-in-out infinite',
            },
            keyframes: {
                blob: {
                    "0%": { transform: "translate(0px, 0px) scale(1)" },
                    "33%": { transform: "translate(30px, -50px) scale(1.1)" },
                    "66%": { transform: "translate(-20px, 20px) scale(0.9)" },
                    "100%": { transform: "translate(0px, 0px) scale(1)" },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(100%)' },
                    '100%': { transform: 'translateY(0)' },
                },
                slideDown: {
                    '0%': { transform: 'translateY(-100%)' },
                    '100%': { transform: 'translateY(0)' },
                },
                pulseGlow: {
                    '0%, 100%': { boxShadow: '0 0 20px rgba(220, 38, 38, 0.5)' },
                    '50%': { boxShadow: '0 0 40px rgba(220, 38, 38, 0.8)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
            },
            boxShadow: {
                'glow-sm': '0 0 10px rgba(230, 30, 66, 0.4)',
                'glow': '0 0 20px rgba(230, 30, 66, 0.5)',
                'glow-lg': '0 0 30px rgba(230, 30, 66, 0.6)',
                'glow-xl': '0 0 40px rgba(230, 30, 66, 0.7)',
                'crimson': '0 4px 20px rgba(230, 30, 66, 0.25)',
                'blood': '0 8px 32px rgba(220, 38, 38, 0.3)',
                'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.15)',
                'purple-glow': '0 0 20px rgba(168, 85, 247, 0.6)',
                'gold-glow': '0 0 20px rgba(245, 158, 11, 0.6)',
            },
        },
    },
    plugins: [],
};
