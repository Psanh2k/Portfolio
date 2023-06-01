const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
            primary: "Playfair Display",
            body: "work Sans"
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                lg: '3rem',
            }
        },
        extend: {
            colors: {
                "light-primary": "#F9FBE7",
                "light-secondary": "#F0EDD4",
                "light-tail-100": "#ECCDB4",
                "light-tail-500": "#FEA1A1",
                "dark-primary": "#000000",
                "dark-secondary": "#262A56",
                "dark-navy-tail-100": "#B8621B",
                "dark-navy-tail-500": "#E3CCAE",
            },
            accent: {
                DEFAULT: '#ac6b34',
                hover: '#925a2b'
            },
            paragraph: '#878e99',
            blue: colors.blue,
            indigo: colors.indigo,
            green: colors.green,
            red: colors.red,
        }
    },
    plugins: [require('@tailwindcss/forms')],
};
