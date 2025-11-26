/** @type {import('tailwindcss').Config} */

module.exports = {
  content: require('fast-glob').sync([
    "./theme/**/*.{php,js}",
  ]),
  theme: {
    // screens: {
    //   'xs': '480px',
    //   'sm': '640px',
    //   'md': '768px',
    //   'lg': '1024px',
    //   'xl': '1280px',
    //   '2xl': '1700px',
    //   '3xl': '2920px',
    // },
    colors: {
      'black': '#000',
      'dark': '#1C1C1C',
      'light': '#F4F4F4',
      'white': '#fff',
    },
    extend: {
      fontFamily: {
        'manr': ['"Manrope"', 'sans-serif'],
      },
      container: {
        padding: {
          DEFAULT: '1.5rem',
          'xl': '2rem',
        },
        screens: {
          'xs': '1000px',
          'sm': '1000px',
          'md': '968px',
          'lg': '1224px',
          'xl': '1340px',
          '2xl': '1550px',
          '3xl': '1800px',
        },
      },
    },
  },
  safelist: [
    'bg-white',
    'bg-light',
    'bg-dark',
  ],
  plugins: [],
}

