/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        backgroundImage: {
            hero: "url('resources/assets/pictures/hero.jpg')",
        },
    },
    plugins: [],
};
