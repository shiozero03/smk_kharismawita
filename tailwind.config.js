/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      textColor: {
        'home': '#292377',
        'white': '#ffffff',
        'icon' : '#db261c',
        'black' : '#000000',
        'red' : '#ff675b',
        'home-2' : '#f5f5f5'
      },
      colors: {
        'home': '#292377',
        'white': '#ffffff',
        'icon' : '#db261c',
        'black' : '#000000',
        'red' : '#ff675b',
        'home-2' : '#f5f5f5'
      },
      borderColor: {
        'home': '#292377',
        'white': '#ffffff',
        'icon' : '#db261c',
        'black' : '#000000',
        'red' : '#ff675b',
        'home-2' : '#f5f5f5'
      },
    },
  },
  plugins: [],
}