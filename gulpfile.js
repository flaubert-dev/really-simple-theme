/*
* GULP VERSION: really-simple
*/

const gulp          = require('gulp');
const sass          = require('gulp-sass');
const browserSync   = require('browser-sync').create();

function compilaSass() {
  return gulp
  .src('sass/**/*.scss')
  .pipe(sass({
    outputStyle: 'expanded'
  }))
  .pipe(gulp.dest('./'))
  .pipe(browserSync.stream());
}

function browser() {
  browserSync.init({
    proxy: "localhost/_0-tst-pesquisas/" 
  });
}

function watch() {
  gulp.watch('sass/**/*.scss', compilaSass);
  gulp.watch(['*.html', './**/*.html', '*.php', './**/*.php']).on('change', browserSync.reload); 
}

exports.compilaSass   = compilaSass;
exports.browser       = browser;
exports.watch         = watch;
exports.default       = gulp.parallel(browser, watch, compilaSass);