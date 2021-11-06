module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors : {
        'custom-gray' : '#f9f9fc',
      }
    },
    fontFamily : {
      'poppins' : ["Poppins", 'sans-serif'] 
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
