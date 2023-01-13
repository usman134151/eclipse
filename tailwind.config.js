const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        colors: {
          'brand-primary': '#0A1E46',
          'brand-secondary': '#204387',
          'brand-tertiary': '#213969',
          'ep-blue': '#023DB0',
          'gray-600': '#6C757D',
          green: colors.emerald,
        }
      },
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ]
}

