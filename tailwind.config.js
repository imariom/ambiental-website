module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'lato': ['Lato']
      },
      colors: {
        'light-gray': '#F9F9F9',
        'medium-gray': '#F1F4F4',
        'primary': '#164036',
        'secondary': '#2F80ED'
      },
      spacing: {
        '128': '28rem'
      },
      backgroundImage: {
        'header-texture-0': "url('../images/ross-s-3uTGaHtWCxg-unsplash.jpg')",
        'header-texture-1': "url('../images/andrew-haimerl-mms2ZeTvdM4-unsplash.jpg')",
        'header-texture-2': "url('../images/ocg-saving-the-ocean-DtbOD4_bHA4-unsplash.jpg')",
        'header-texture-3': "url('../images/ocg-saving-the-ocean-rXjzIsQAQ-w-unsplash.jpg')",

        'service-header-texture-0': "url('../images/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg')"
      }
    },
  },
  variants: {
    extend: {
      grayscale: ['hover', 'focus']
    },
  },
  plugins: [],
}
