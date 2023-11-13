/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          500:'#3c2b71',
          600:'#20173d'
        },
        secondary: {
          500: '#f4ca5c',
          600: '#c19f48'
        },
      },
    },
  },
  plugins: [],
}

