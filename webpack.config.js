const path = require('path');

module.exports = {
    mode: "production",
    entry: [
        './app/assets/js/main.js',
    ],
    output: {
        filename: './js/bundle.js'
    },
    plugins: [
    ]
};