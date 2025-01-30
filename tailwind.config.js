import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                jakarta: ["Plus+Jakarta+Sans", 'serif'],
            },
            colors: {
                'Neutral/01': '#ffffff',
                'Neutral/02': '#F5F4EF',
                'Neutral/03': '#AA7474',
                'Neutral/04': '#E4E4E4',
                'Neutral/05': '#F6894C',
                'Neutral/06': '#828282',
                'Neutral/07': '#3E2C2C',
                'Neutral/08': '#525252',
                'Neutral/09': '#797575',
                'Neutral/10': '#AA7474',
                'Neutral/11': '#F5F5F5',
                'Neutral/12': '#444444',
                'Neutral/13': '#F5F4EF',
                'Neutral/14': '#B43127',
                'Neutral/15': '#E4E4E4',
              },
            backgroundImage: {
                'hero-pattern': "url('/img/background.png')",
            },
        },
    },
    plugins: [],
};
