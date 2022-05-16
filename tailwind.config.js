module.exports = {
  content: ["./**/*.{php,js}"],
  theme: {
      extend: {
        aspectRatio: {
          '5/7': "5 / 7",
        },
      },
  },
  plugins: [require("@tailwindcss/line-clamp"), require("daisyui")],
  daisyui: {
    themes: [
      {
        emerald: {
          ...require("daisyui/src/colors/themes")["[data-theme=emerald]"],
          "base-200": "#f3f4f6",
        },
      },
    ],
  },
};
