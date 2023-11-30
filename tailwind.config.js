/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './pages/**/*.{html,js,php}',
    './components/**/*.{html,js,php}',
    './index.php',
    './about.php',
    './academy.php',
    './experiments.php',
    './fontfacing.php',
    './footer.php',
    './head.php',
    './links.php',
    './nav.php',
    './tattooo.php',
    './work.php',
    './customscripts.js',
  ],
  theme: {
    extend: {
      colors: {
          mint: '#00ab8f',
          lightishblue: '#eff7ff',
          fontfacingblue: '#122f3c',
          tattooblue: '#4285f4',
          tattooalert: '#ff6f6f',
          academyblue: '#2e95e0',
          academygold: '#b89848',
          neutralbg: '#d9d9d9',
      }
    },
  },
  plugins: [],
}