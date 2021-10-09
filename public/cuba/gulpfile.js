const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const pug = require('gulp-pug');
const imagemin = require('gulp-imagemin');
const htmlValidator = require('gulp-w3c-html-validator');
const through2 = require('through2');
const htmlmin = require('gulp-htmlmin');
const browserSync = require('browser-sync').create();

//scss to css
function style() {
  return gulp.src('assets/scss/**/*.scss')
    // .pipe(sourcemaps.init())
    .pipe(sass({
      //outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('assets/css'));
}

// pug to html
function html() {
  return gulp.src('assets/pug/pages/theme/**.pug')
    .pipe(pug({
      pretty: true
    }))
    .on('error', console.error.bind(console))
    .pipe(gulp.dest('theme'))
    .pipe(browserSync.reload({
      stream: true
    }));
}

//Html validator
function validateHtml() {
  function handleFile(file, encoding, callback) {
    callback(null, file);
    if (!file.w3cjs.success)
      throw new Error('HTML validation error(s) found');
  };
  return gulp.src('pages/*.html')
    .pipe(htmlValidator())
    .pipe(through2.obj(handleFile));
}

// minify images
function image() {
  return gulp.src('assets/virtual_images/*.*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/images'));
}

// minify html
function htmlminify() {
  return gulp.src('html/index.html')
    .pipe(htmlmin({
      collapseWhitespace: true
    }))
    .pipe(gulp.dest('html/minify'));
}

// Watch function
function watch() {
  browserSync.init({
    proxy: 'localhost/cuba_git/theme/index.html'
  });
  gulp.watch('assets/scss/**/*.scss', style);
  gulp.watch('assets/pug/pages/theme/**.pug', html);
  gulp.watch('./*.html').on('change', browserSync.reload);
  gulp.watch('assets/css/*.css').on('change', browserSync.reload);
}

exports.style = style;
exports.html = html;
exports.watch = watch;
exports.image = image;
exports.validateHtml = validateHtml;
exports.htmlminify = htmlminify;

const build = gulp.series(watch);
gulp.task('default', build, 'browser-sync');