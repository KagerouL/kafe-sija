/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'kopi1': "url('/img/icons/coffee.png')",
        'logo': "url('/img/icons/logokafe.png')"
      }
    },
  },
  plugins: [],

  theme: {
    colors: {
      amber: '#CAB67F',
      white: '#ffffff',
      black: '#000000',
      emerald: {
        900: '#10261D',
        800: '#182D22'
      }
    },
    },


}

