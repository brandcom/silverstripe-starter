const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

let config = {
    entry: {
        app: './public_src/app.js',
    },
    resolve: {
        extensions: ['.js'],
    },
    output: {
        path: __dirname + '/public',
        filename: 'js/[name].min.js',
        publicPath: '/',
    },
    module: {
        rules: [
            {
                test: /\.scss$/i,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
            },
        ],
    },
    optimization: {
        minimizer: [new CssMinimizerPlugin()],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].min.css',
        }),
    ],
    devServer: {
        host: '0.0.0.0',
        port: 8000,
        open: false,
        watchFiles: ['./app/templates/**/*.ss'],
        proxy: {
            context: () => true,
            target: 'http://web',
            onError(err) {
                console.log('Suppressing WDS proxy upgrade error:', err);
            },
        },
    },
};

module.exports = (env, argv) => {
    if (argv.mode === 'development') {
        config.devtool = 'source-map';
    }

    return config;
};
