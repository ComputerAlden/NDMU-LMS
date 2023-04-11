module.exports = {
  content: ["./index.php","./src/*.php","./src/admin/*.php"],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      "#loading-screen": {
        display: "none",
      },
      ".toast": {
        padding: "1rem",
        borderRadius: "0.5rem",
      },
    },
  },
  daisyui: {
    themes: [
      "dark",
      "halloween",
      "forest",
      "black",
      "luxury",
      "dracula",
      "business",
      "lemonade",
      "night",
      "coffee",
    ],
  },
  screens: {
    sm: "480px",
    md: "768px",
    lg: "976px",
    xl: "1440px",
  },
  plugins: [require("daisyui")],
};
