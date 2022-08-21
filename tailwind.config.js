module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx}",   
    "./components/**/*.{js,ts,jsx,tsx}", 
  ],
  theme: {
    extend: {
      colors: {
        primary: '#7562E0',
        secondary: '#1A1A29',
        tertiary: '#848191',
        darken: '#181824',
        lighten: '#31313F'
      },
    },
  },
  darkMode: 'class',
  plugins: [],
}
