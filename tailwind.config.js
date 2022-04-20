module.exports = {
  darkMode: 'class',
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      aspectRatio: {
        '3/4': '3 / 4',
      },
    },

  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    require("daisyui"),

  ],
  daisyui: {
    themes: [
      {
      myDark: {
        "primary": '#66cc8a',
        'secondary': '#377cfb',
        "accent": "#ea5234",
        "neutral": "#191d24",
        "base-100": "#2a303c",
        "base-200": "#1f242d",
        "info": "#3ABFF8",
        "success": "#36D399",
        "warning": "#FBBD23",
        "error": "#F87272",
      },
      'emerald':{
      ...require('daisyui/src/colors/themes')["[data-theme=emerald]"],
        'base-200':'#f3f4f6',
    },
    },
    
  ],

  },
}