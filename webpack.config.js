const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

let config = {
    entry: {
        app: "./public_src/app.js",
        admin: "./public_src/admin.js",
    },
    resolve: {
        extensions: [".js"],
    },
    output: {
        clean: true,
        filename: "[name].min.js",
        path: __dirname + "/public/build",
        publicPath: "/build/",
    },
    module: {
        rules: [
            {
                test: /\.s?css$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    {
                        loader: "postcss-loader",
                        options: { postcssOptions: { plugins: ["autoprefixer"] } },
                    },
                    "sass-loader",
                ],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: "asset/resource",
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: "asset/resource",
            },
        ],
    },
    optimization: {
        minimizer: [`...`, new CssMinimizerPlugin()],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].min.css",
        }),
    ],
    devServer: {
        open: true,
        watchFiles: ["./app/templates/**/*.ss"],
        proxy: [
            {
                context: () => true,
                target: "https://silverstripe-starter.local", // enter your local dev url here
                secure: false,
                changeOrigin: true,
                onError(err) {
                    console.log("Suppressing WDS proxy upgrade error:", err);
                },
            },
        ],
        port: 3000,
        hot: true,
        host: "0.0.0.0",
        server: "https",
    },
};

module.exports = (env, argv) => {
    if (argv.mode === "development") {
        config.devtool = "source-map";
    }

    return config;
};
