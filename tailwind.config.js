
const defaultColors  = require('tailwindcss/colors')

const colors = {
    ...defaultColors,
    ...{
        "phe": {
            DEFAULT: '#C75155',
            '50': '#F4DCDD',
            '100': '#EFCCCE',
            '200': '#E5AEAF',
            '300': '#DB8F91',
            '400': '#D17073',
            '500': '#C75155',
            '600': '#A9373A',
            '700': '#7F292C',
            '800': '#551B1D',
            '900': '#2A0E0F'
        },
    },
}

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                danger: colors.red,
                primary: colors.phe,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
