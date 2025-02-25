const { active } = require("browser-sync");

module.exports = {
  content: ["./**/*.{php,ts,js,twig}"],
  theme: {
    container: {
      center: true,
      padding: "1rem",
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1024px",
        xl: "1148px",
        "2xl": "1148px",
      },
    },
    fontFamily: {
      heading: ['"Plus Jakarta Sans", serif'],
      body: ['"Plus Jakarta Sans", serif'],
      icon: ['"Font Awesome 6 Free"'],
    },
    colors: {
      primary: {
        DEFAULT: "#ff470b",
        hover: "#F03006",
        active: "#C72007",
      },
      font: {
        DEFAULT: "#191919",
        head: "#101828",
        body: "#344054",
        bodyL: "#475467",
        placeholder: "#98A2B3",
      },
      grey: {
        DEFAULT: "#191919",
        darker: "#141414",
      },
      message: {
        DEFAULT: "#f8f8f8",
        darker: "#dedede",
        border: "#ededed",
      },
      succes: {
        DEFAULT: "#3ca355",
        2: "#e0f0e4",
      },
      warning: {
        DEFAULT: "#f4a525",
        2: "#fdf1dc",
      },
      error: {
        DEFAULT: "#c84041",
        2: "#f6e0e1",
      },
      neutral: {
        0: "#FFFFFF",
        100: "#F9FAFB",
        200: "#F2F4F7",
        300: "#D0D5DD",
        400: "#98A2B3",
        500: "#667085",
        600: "#475467",
        700: "#344054",
        800: "#182230",
        900: "#101828",
        950: "#0C111D",
      },
      white: {
        DEFAULT: "#ffffff",
      },
      black: {
        DEFAULT: "#000000",
      },
      head: {
        DEFAULT: "#101828",
      },
      btn: {
        primary: {
          idle: "#FF470B",
          hover: "#F03006",
          active: "#C72007",
        },
        soft: {
          idle: "#FFF4ED",
          hover: "#FFE6D4",
          active: "#FFA370",
        },
        link: {
          idle: "#4A90E2",
          hover: "#3978D7",
          active: "#3063C5",
        },
        cta: {
          idle: "#686D72",
          hover: "#5F6368",
          active: "#4C4F52",
        },
        destructive: {
          idle: "#F04438",
          hover: "#D92D20",
          active: "#B43218",
        },
        succes: {
          50: "#ECFDF3",
          300: "#75E0A7",
          500: "#17B26A",
          600: "#079455",
          700: "#067647",
          900: "#074D31",
        },
        warning: {
          50: "#FFFAEB",
          300: "#FEC84B",
          500: "#F79009",
          600: "#DC6803",
          700: "#B54708",
          900: "#7A2E0E",
        },
        error: {
          50: "#FEF3F2",
          300: "#FDA29B",
          500: "#F04438",
          600: "#D92D20",
          700: "#B43218",
          900: "#7A271A",
        },
      },
      brand1: {
        50: "#FFF4ED",
        200: "#FFE6D4",
        300: "#FFA370",
        500: "#FF470B",
        600: "#F03006",
        700: "#C72007",
        900: "#7F1A0F",
      },
      brand2: {
        50: "#F1F7FD",
        300: "#9ECDF2",
        500: "#4A90E2",
        600: "#3978D7",
        700: "#3063C5",
        900: "#29467F",
      },
      brand3: {
        50: "#F5F6F6",
        300: "#ACB0B4",
        500: "#686D72",
        600: "#5F6368",
        700: "#4C4F52",
        900: "#3B3C3E",
      },
    },
    extend: {
      fontSize: {
        display: [
          "4rem",
          { lineHeight: "1.2", fontWeight: 800, letterSpacing: "-1.2%" },
        ],
        "head-d-h1": [
          "3rem",
          { lineHeight: "1.2", fontWeight: 800, letterSpacing: "-1.2%" },
        ],
        "head-d-h2": [
          "2rem",
          { lineHeight: "1.2", fontWeight: 800, letterSpacing: "-1.2%" },
        ],
        "head-d-h3": [
          "1.5rem",
          { lineHeight: "1.2", fontWeight: 600, letterSpacing: "-1.2%" },
        ],
        "head-d-h4": [
          "1.25rem",
          { lineHeight: "1.2", fontWeight: 600, letterSpacing: "-1.2%" },
        ],
        "head-d-h5": [
          "1.125rem",
          { lineHeight: "1.2", fontWeight: 600, letterSpacing: "-1.2%" },
        ],
        "head-d-h6": [
          "1rem",
          { lineHeight: "1.2", fontWeight: 600, letterSpacing: "-1.2%" },
        ],

        "body-d-pLarge": ["1.25rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "body-d-pBase": ["1rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "body-d-small": ["0.875rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "body-d-xs": ["0.75rem", { lineHeight: "1.5", letterSpacing: "0" }],

        "link-lg": ["1.25rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "link-base": ["1rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "link-s": ["0.875rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "link-xs": ["0.75rem", { lineHeight: "1.5", letterSpacing: "0" }],

        "input-label": [
          "1.25rem",
          { lineHeight: "1.5", fontWeight: 500, letterSpacing: "0" },
        ],
        "input-filled": [
          "1rem",
          { lineHeight: "1.5", fontWeight: 500, letterSpacing: "0" },
        ],
        "input-placeholder": [
          "1rem",
          { lineHeight: "1.5", fontWeight: 500, letterSpacing: "0" },
        ],
        "input-error": [
          "1rem",
          { lineHeight: "1.5", fontWeight: 500, letterSpacing: "0" },
        ],

        "btn-base": ["1rem", { lineHeight: "1.5", fontWeight: 600 }],
        "btn-s": ["0.875rem", { lineHeight: "1.5", fontWeight: 600 }],
        "btn-link": ["1rem", { lineHeight: "1.5", fontWeight: 500 }],

        //mobile
        "head-m-h1": [
          "3rem",
          { lineHeight: "1.2", fontWeight: 800, letterSpacing: "-1.2%" },
        ],
        "head-m-h2": [
          "2",
          { lineHeight: "1.2", fontWeight: 800, letterSpacing: "-1.2%" },
        ],
        "head-m-h3": [
          "1.5",
          { lineHeight: "1.2", fontWeight: 600, letterSpacing: "-1.2%" },
        ],
        "head-m-h4": [
          "1.25rem",
          { lineHeight: "1.2", fontWeight: 600, letterSpacing: "-1.2%" },
        ],

        "body-m-lg": ["1.25rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "body-m-base": ["1rem", { lineHeight: "1.5", letterSpacing: "0" }],
        "body-m-s": ["1.5", { lineHeight: "1.5", letterSpacing: "0" }],
        "body-m-xs": ["0.75rem", { lineHeight: "1.5", letterSpacing: "0" }],
      },

      aspectRatio: {
        "4/3": "4 / 3",
        "3/4": "3 / 4",
      },
    },
  },
};
