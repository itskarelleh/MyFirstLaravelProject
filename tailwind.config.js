/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
          sans: ['Sora']
        },
        extend: {
            fontSize: {
                xxs: '0.66rem',
            },
        },
    },
    plugins: [],
}
