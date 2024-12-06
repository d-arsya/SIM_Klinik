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
        hovBlue: 'rgba(3, 108, 161, 0.9)',
        greenProfile: '#17C653',
        txtgray: '#99A2B7',
        txtblack: '#071437',
        borderGrey: '#DBDFE9',
        bgGreenSuccess: 'rgba(23, 198, 83, 0.2)',
        txtGreenSuccess: '#17C653',
        alert: '#D81A48',
        hovAlert: '#F01E51',
        bgAlert: 'rgba(248, 40, 90, 0.2)',
        bgRawat: 'rgba(211, 158, 0, 0.33)',
        bulkStroke: 'rgba(27, 132, 255, 0.2)',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

