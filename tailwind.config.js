/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  extend: {
    colors: {
      light: {
        primary: "#FFFFFF", // set your light primary color
        secondary: "#F0F0F0", // set your light secondary color
      },
  plugins: [],
}
  }
}