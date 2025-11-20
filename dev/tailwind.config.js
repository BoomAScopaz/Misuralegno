/** @type {import('tailwindcss').Config} */

module.exports = {
  content: require('fast-glob').sync([
    "./theme/**/*.{php,js}",
  ]),
  theme: {
    screens: {
      'xs': '480px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1920px',
    },
    colors: {
      'black': '#000',
      'white': '#fff',
    },
    extend: {
      fontFamily: {
        'nimbus': ['"nimbus"', 'sans-serif'],
        'courier': ['"Courier Prime"', 'serif'],
      },
      container: {
        padding: {
          DEFAULT: '1.5rem',
          'xl': '2rem',
        },
        screens: {
          'sm': '600px',
          'md': '768px',
          'lg': '1024px',
          'xl': '1250px',
          '2xl': '1340px',
          '3xl': '1500px',
        },
      },
    },
  },
  plugins: [],
}

