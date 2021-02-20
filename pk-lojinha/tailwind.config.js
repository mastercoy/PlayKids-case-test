module.exports = {
  purge: [
      ['./resources/js/routes/*.vue']
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
      ///
      require('@tailwindcss/forms'),
  ],
}
