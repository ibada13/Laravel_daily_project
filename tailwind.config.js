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
        text: '#dfd1fe',
        back: '#0a011b',
        secback: '#110627',
        thrback:'#170128',
        primary:'#966bfa',
        secondory: '#86059b',
        accent: '#f716f8',
        gr: '#66ff00',
        ar:'#ff033e'
      }
    },
  },
  plugins: [],
}

