/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "../resources/**/*.blade.php",
        "../resources/**/*.js",
        "../resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                golden: '#CDB885',
                accent: '#ACBAC4',
            }
        },
    },
    plugins: [],
}
