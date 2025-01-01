import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Використовуємо клас для темної теми
    screens:{
        'xs': '350px',
        ...defaultTheme.screens,
    },
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', // Шаблони пагінації Laravel
        './storage/framework/views/*.php', // Збережені файли шаблонів Laravel
        './resources/**/*.blade.php', // Blade шаблони
        './resources/**/*.js', // JS файли
        './resources/**/*.vue', // Vue файли
    ],
    theme: {
        extend: {
            colors: {
                // Додавайте свої кольори тут
            },
            fontFamily: {
                'montserrat': ['Montserrat', 'sans-serif'],
                'poppins': ['Poppins', 'sans-serif'],
            },
            fontSize: {
                'xxs': '.65rem', // Додаємо розмір шрифту xxs
            },
        },
    },
    plugins: [],
};
