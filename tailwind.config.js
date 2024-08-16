/** @type {import('tailwindcss').Config} */
export default {
  content: {
    relative: true,
    transform: (content) => content.replace(/taos:/g, ''),
    files: [
      './src/*.{html,js}',
      './resources/**/*.blade.php',
      './resources/**/*.js'
    ],
  },
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'primary': '#DBC69D',
      'secondary': 'rgb(28, 28, 28, 0.9)',
      'bg--dark': '#000000',
      'text--dark': '#ffffff',
      'bg--light': '#ffffff',
      'text--light': '#000000',
      'black-light': '#101010',
      'light-second': '#F3F3F3',
      'light-third': '#E7E7E7',
      'third': '#1C1C1C',
      'white-transparent': 'rgba(255, 255, 255, 0.3)',
      'white': '#ffffff',
      'black': '#000000'
    },
    extend: {
        backgroundImage: {
        'gradient--primary': 'linear-gradient(270deg, #DBC69D 0%, #FCECD0 94.12%)',
      },
      aspectRatio: {
        '2/1': '2 / 1',
        '3/1': '3 / 1',
      },
      spacing: {
        'x1/2': '-50%',
      },
      height: {
        '200': '800px',
      },
      width: {
        '30': '30%',
      },
      borderRadius: {
        '5xl': '3rem',
        '6xl': '3.75rem',
        '7xl': '4.5rem',
        '8xl': '6rem',
        '9xl': '8rem'
      }
    },
  },
  plugins: [
    require('taos/plugin')
  ],
  darkMode: 'class',
  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))'
  ],
}

