/** @type {Plugin} */
const plugin = require("tailwindcss/plugin");
export default {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.antlers.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./content/**/*.md",
    ],
    theme: {
        screens: {
            "3xs": "22.5rem", // 360px
            "2xs": "25rem", // 400px
            xs: "30rem", // 480px
            sm: "40rem", // 640px
            md: "48rem", // 768px
            lg: "64rem", // 1024px
            xl: "80rem", // 1280px
            "2xl": "96rem", // 1536px
        },
        extend: {
            colors: {
                blue: {
                    serenity: "#2D588A",
                },
                teal: {
                    serenity: "#2d868a",
                },
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        plugin(function ({ matchUtilities, theme }) {
            matchUtilities(
                {
                    "grid-area": (value) => ({
                        gridArea: value,
                    }),
                },
                { values: theme("gridArea") },
            );
        }),
    ],
};
