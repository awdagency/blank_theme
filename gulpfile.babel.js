import { src, dest, watch, series, parallel } from 'gulp';
import webpack from 'webpack-stream';
import del from 'del';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
const PRODUCTION = yargs.argv.prod;

export const styles = () => {
  return src('src/scss/bundle.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer({ grid: true, overrideBrowserslist: ['last 2 versions', 'ie 6-8', 'Firefox > 20'] }) ])))
    // .pipe(postcss([ autoprefixer({ grid: true, overrideBrowserslist: ['last 2 versions', 'ie 6-8', 'Firefox > 20'] }) ]))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('dist/css'));
}

export const copy = () => {
  return src(['src/**/*','!src/{js,scss}','!src/{js,scss}/**/*'])
    .pipe(dest('dist'));
}

export const clean = () => del(['dist']);

export const scripts = () => {
  return src('src/js/bundle.js')
  .pipe(webpack({
    module: {
      rules: [
        {
          test: /\.js$/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: []
            }
          }
        }
      ]
    },
    mode: PRODUCTION ? 'production' : 'development',
    devtool: !PRODUCTION ? 'inline-source-map' : false,
    output: {
      filename: 'bundle.js'
    },
    externals: {
      jquery: 'jQuery'
    },
  }))
  .pipe(dest('dist/js'));
};

export const watchForChanges = () => {
  watch('src/scss/**/*.scss',styles);
  watch(['src/**/*','!src/{js,scss}','!src/{js,scss}/**/*'], copy);
  watch('src/js/**/*.js', scripts);
}

export const dev = series(clean, parallel(styles, copy, scripts), watchForChanges)
export const build = series(clean, parallel(styles, copy, scripts))
export default dev;
