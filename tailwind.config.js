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
          300: '#360bb5',
          400: '#2b098f',
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

