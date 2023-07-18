/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
            sgreen:'#7EAF00',
            sdarkgreen: '#435A33',
            slgray: '#F5F5F5',
            sgray: '#B4C5C5'
        },

        fontFamily: {
            sans: ['"Source Sans 3"', 'sans-serif'],
            icon: ['shop']
        },
      },
    },
    plugins: [

    ],
  }
