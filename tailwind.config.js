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
          500:'#200769',
          600:'#100335'
        },
        secondary: {
          500: '#f4b328',
          600: '#c18d1f'
        },
      },
    },
  },
  plugins: [],
}

