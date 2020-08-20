const path = require('path');

module.exports = {
    entry: [
        './app/assets/js/main.js',
    ],
    output: {
        filename: './js/bundle.js'
    },
    devtool: "source-map",
    module: {
        rules: [{
            test: /\.js$/,
            include: path.resolve(__dirname, '/app/assets/js/main.js'),
            use: {
                loader: 'babel-loader',
                options: {
                    presets: 'env'
                }
            }
        },
        ]
    },
    plugins: [
    ]
};