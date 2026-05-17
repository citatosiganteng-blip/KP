/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#3b1d6b',      // royal purple
                    foreground: '#fafafa',
                    glow: '#6b3fa8',
                    50:  '#f5f1fb',
                    100: '#ebe1f6',
                    600: '#3b1d6b',
                    700: '#2e1654',
                    900: '#1a0c33',
                },
                accent: {
                    DEFAULT: '#f5c542',      // gold
                    foreground: '#3b1d6b',
                    soft: '#fde8a8',
                },
            },
            fontFamily: {
                sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            backgroundImage: {
                'gradient-hero': 'linear-gradient(135deg,#3b1d6b 0%,#5a2c8f 60%,#7b4cb8 100%)',
                'gradient-accent': 'linear-gradient(135deg,#f5c542,#fbe28a)',
            },
            boxShadow: {
                soft: '0 4px 20px -4px rgba(59,29,107,0.15)',
                elegant: '0 20px 50px -20px rgba(59,29,107,0.4)',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
