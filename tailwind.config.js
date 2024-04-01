/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,css}"],
  theme: {
    colors: {
      creme: '#FAEBD7'
    },
    extend: {
      fontFamily: {
        'nunito': ['nunito', 'sans-serif'],
        'josefin': ['josefin', 'sans-serif'],
        'playfair': ['playfair', 'display'],
        'crismon': ['crimson', 'text'],
      },
      stroke: ['hover', 'focus'],
      fontSize: {
        '2xl': '100px',
        'xl': '50px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

