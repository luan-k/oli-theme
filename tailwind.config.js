module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    "./*.php",
    "./inc/**/*.php",
    "./templates/**/*.php",
    "./safelist.txt",
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  purge: false, // ["./**/*.html", "./**/*.js", "./**/*.php"],
  darkMode: "media", // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        oli: {
          primary: {
            orange: "#B22611",
            blue: "#071927",
          },
        },
      },
      fontFamily: {
        montserrat: ["montserrat", "sans-serif"],
        "fira-sans-condensed": ["'Fira Sans Condensed'", "sans-serif"],
      },
      screens: {
        "2xl": "1685px",
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "7%",
        xl: "8%",
        "2xl": "10%",
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ["active"],
    },
  },
  plugins: [],
};
