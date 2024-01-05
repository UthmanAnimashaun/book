/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        'darkMode: media',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

    ],
    theme: {
        extend: {},
    },
    plugins: [
        // require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
}