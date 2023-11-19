/** @type {import('tailwindcss').Config} */

const plugin = require("tailwindcss/plugin")

const Myclass = plugin(function ({ addUtilities }) {
  addUtilities({
    ".my-rotate-y-180": {
      transform: "rotateY(180deg)",
    },
    ".preserve-3d": {
      transformStyle: "preserve-3d",
    },
    ".perspective": {
      perspective: "1000px",
    },
    ".backface-hidden": {
      backfaceVisibility: "hidden",
    },
  });
});

module.exports = {
  content: [
    './templates/**/*.html.twig',
    './node-modules/tw-elements/dist/js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        "blue": '#0065fc',
        "light-gray": '#f2f2f2'
      },
    },
  },
  plugins: [Myclass, require('tw-elements/dist/plugin')]
}

