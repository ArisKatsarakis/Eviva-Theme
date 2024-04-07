/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,css}"],
  theme: {
    extend: {
      fontFamily: {
        'nunito': ['nunito', 'sans-serif'],
        'josefin': ['josefin', 'sans-serif'],
        'playfair': ['playfair', 'display'],
        'crismon': ['crimson', 'text'],
      },
      stroke: ['hover', 'focus'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

