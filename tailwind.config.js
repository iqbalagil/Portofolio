/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        backgroundImage : {
            'contact' : "url('/Users/iqbal/Documents/Portofolio Iqbal/portoiqbal/public/asset/bgcontact.svg')",
        },
      fontFamily: {
        poppins: ['Poppins']
      }
    },
  },
  plugins: [
    require('tailwind-scrollbar'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-animated'),
    require('flowbite/plugin')
  ],
}

