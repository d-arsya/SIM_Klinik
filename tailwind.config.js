/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        klinikBlue: '#036CA1',
        hovWhite: 'rgba(255, 255, 255, 0.3)',
        greenProfile: '#17C653',
        txtgray: '#78829D',
        txtblack: '#071437',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

