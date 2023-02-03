const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');


module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            keyframes: {
                leftRight: {
                  '0%,100%': {transform: 'translateX(-20%)'},
                  '50%': { transform: 'translateX(20%)'}
                },
            },

            fontFamily: {
                sans: ['Sans', ...defaultTheme.fontFamily.sans],
                anton: ['anton', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "dark_red":"#8B0000",
                "old_green":"#72775A",
                "old_green_dark":"#000000",
                "old_gold": "#80673A",
                "light-secondary": "#FAEAB1",
                "light-tail-100": "#A9DED2",
                "light-tail-500": "#54BAB9",
                "dark-primary": "#050402",
                "dark-secondary": "#1C1D24",
                "dark-navy-100": "#07567D",
                "dark-navy-500": "#292D42",
            },
        },
    },
    plugins: [require('@tailwindcss/forms')],

    
};
