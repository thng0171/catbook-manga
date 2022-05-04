module.exports = {
  
  content: ["./**/*.{php,js}"],
  theme: {
    extend: {
      aspectRatio: {
        truyen: "5 / 7",
      },
    },
  },
  plugins: [require("@tailwindcss/line-clamp"), require("daisyui")],
  daisyui: {
    themes: [
      {
        myDark: {
          primary: "#66cc8a",
          secondary: "#377cfb",
          accent: "#ea5234",
          neutral: "#191d24",
          "base-100": "#2a303c",
          "base-200": "#1f242d",
          info: "#3ABFF8",
          success: "#36D399",
          warning: "#FBBD23",
          error: "#F87272",
        },
        emerald: {
          ...require("daisyui/src/colors/themes")["[data-theme=emerald]"],
          "base-200": "#f3f4f6",
        },
      },
    ],
  },
};
