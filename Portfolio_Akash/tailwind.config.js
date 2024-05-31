import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'caribbean-green': {
                    '50': '#effef9',
                    '100': '#c9feef',
                    '200': '#93fce0',
                    '300': '#55f3ce',
                    '400': '#20dfb9',
                    '500': '#09c3a1',
                    '600': '#049d84',
                    '700': '#087d6b',
                    '800': '#0c6358',
                    '900': '#0f5248',
                    '950': '#01322d',
                },
            }
        },
    },

    plugins: [forms],
};
