const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#00BFB3',
                'regal-blue': '#243c5a',
                footer: '#042E52',
                'footer-text': '#D3DAE6',
                'background-page': '#FAFBFD',
                'plan-title': '#06447A',
                'footer-navigation': '#F5F7FA',
                secondary: '#343741',
                greyish: 'rgba(28, 55, 90, 0.16)',
                mail: '#3B8ED6',
                modal: 'rgba(250, 251, 253, 0.5)',
                'blank-blue': 'rgba(0, 191, 179, 0.03)',
                'darkish-blue': '#085BA3',
                'plan-info': '#69707D',
                'plan-button-text': '#ABB4C4',
                'plan-button-background': '#FAFBFB',
                'plan-label': '#0A72CC'
            },
            boxShadow: {
                card: '2px 3px 0px #000000',
            }
        },   
        screens: {
            'md': {'min': '1023px'},
            'lg': {'max': '1024px'},
        },
        borderRadius: {
            DEFAULT: '10px'
        },
        fontFamily: {
            monty: ['Montserrat'],
            'sans-pro': ['"Source Sans Pro"'],
            'poppy': ['Poppins']
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
