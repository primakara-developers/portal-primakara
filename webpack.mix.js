let mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default
const CopyWebpackPlugin = require('copy-webpack-plugin')
const imageminMozjpeg = require('imagemin-mozjpeg')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')

mix.js('resources/assets/js/navigation-bar.js', 'public/js')
mix.js('resources/assets/js/copy-to-clipboard.js', 'public/js')

if (mix.inProduction()) {
    // Compress images
    mix.webpackConfig({
        plugins: [
            new CopyWebpackPlugin([{
                from: 'resources/assets/images',
                to: 'images'
            }]),
            new ImageminPlugin({
                test: /\.(jpe?g|png|gif|svg)$/i,
                pngquant: {
                    quality: '65-80'
                },
                plugins: [
                    imageminMozjpeg({
                        quality: 65,
                        //Set the maximum memory to use in kbytes
                        maxMemory: 1000 * 512
                    })
                ]
            })
        ]
    })

    // Cache busting
    mix.version()
} else {
    mix.copyDirectory('resources/assets/images', 'public/images')
    mix.sourceMaps()
}
