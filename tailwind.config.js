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
