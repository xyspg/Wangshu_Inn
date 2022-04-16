module.exports = {
purge: [
    './index.html',
    './src/**/*.{vue.js.ts.jsx.tsx}'
     ],
    darkMode: false, // or 'media' or 'class'
    theme: {
    fontFamily: {
        display: ['HYRunYuan-55W'],
    },
  extend: {},
},
variants: {},
plugins: [
    require("daisyui")
],
    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
    },
}