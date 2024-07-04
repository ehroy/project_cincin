/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: "15px",
            },
        },
        fontFamily: {
            primary: "DM Serif Display",
            secondary: "Jost",
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "960px",
            xl: "1200px",
        },
        extend: {
            animation: {
                "infinite-scroll": "infinite-scroll 25s linear infinite",
            },
            keyframes: {
                "infinite-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
            colors: {
                primary: {
                    DEFAULT: "#292f36",
                    hover: "#343e4a",
                },
                secondary: "#4d5053",
                accent: {
                    DEFAULT: "#cda274",
                    secondary: "#f4f0ec",
                    hover: "#b88c5d",
                },
            },
        },
    },
    plugins: [],
};
