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
                "avant": ["AvantGardeCTT", "sans-serif"],
            },
            colors: {
                "darkblue": "#010624",
                "lightblue": "#1b1e30",
                "grey-inactive": "#6E6E6E",
                "yellow-main": "#FFEC00",
                "yellow-shadow": "#FFB200"
            },
            boxShadow: {
                'thick-inner': 'inset -2px -6px 25px 4px rgba(255, 178, 0, 0.6)'
            }
        },
    },
    plugins: [],
};
