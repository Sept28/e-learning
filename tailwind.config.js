module.exports = {
  purge: [
    './resources/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '280px',
      // => @media (min-width: 640px) { ... }

      'md': '640px',
      // => @media (min-width: 640px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
    extend: {
      spacing: {
        '445px': '445px',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}