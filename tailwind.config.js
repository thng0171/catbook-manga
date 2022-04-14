module.exports = {
  darkMode: 'class',
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: '#2A9D8F',
        secondary: '#264653',
        'c-yellow': '#E9C46A',
        'c-orange': '#F4A261',
        'c-red': '#E76F51',
        "info": "#3ABFF8",
        "success": "#36D399",
        "warning": "#FBBD23",
        "error": "#F87272",
      },
    },

  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    require('flowbite/plugin')
  ],
}