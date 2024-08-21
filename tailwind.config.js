import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.jsx",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/flowbite-react/**/*.{js,jsx,ts,tsx}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#434738",
                "primary-hover": "#5e654b",
                "primary-focus": "#798161",
                "nav-bg": "#f4f4f1",
                "button-on": "#b3d086",
                "button-on-hover": "#97bc5f",
                "button-off": "#fda4a6",
                "button-off-hover": "#fa6f72",
                "red-primary": "#de2428",
                "red-primary-hover": "#f14246",
                "primary-text": "#353535",
            },
            backgroundImage: {
                "login-bg": "url('/img/login-bg.png')",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};