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
        '128': '28rem',
        '144': '32rem'
      },
      backgroundImage: {
        'header-texture-0': "url('/static/images/ross-s-3uTGaHtWCxg-unsplash.jpg')",
        'header-texture-1': "url('/static/images/andrew-haimerl-mms2ZeTvdM4-unsplash.jpg')",
        'header-texture-2': "url('/static/images/ocg-saving-the-ocean-DtbOD4_bHA4-unsplash.jpg')",
        'header-texture-3': "url('/static/images/ocg-saving-the-ocean-rXjzIsQAQ-w-unsplash.jpg')",

        'service-header-texture-0': "url('/static/images/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg')"
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
