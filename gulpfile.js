var gulp = require('gulp'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  simplevars = require('postcss-simple-vars'),
  nested = require('postcss-nested'),
  cssImports = require('postcss-import'),
  browserSync = require('browser-sync'),
  mixins = require('postcss-mixins'),
  watch = require('gulp-watch'),
  browserSync = require('browser-sync').create();

gulp.task('default', function() {

  browserSync.init({notify: false, proxy: 'localhost/PCA'});

  watch('./**/*.php', function() {
    browserSync.reload();
  });

  watch('./dev-styles/*.css', function() {
    // gulp.start('css');
    gulp.start('cssInject');

  });

});

gulp.task('watchtask', function() {



});

gulp.task('cssInject',['css'], function() {
  return gulp.src('./styles/*.css').pipe(browserSync.stream());
});

gulp.task('css', function() {

  return gulp.src('./dev-styles/styles.css')
  .pipe(postcss([cssImports, simplevars, nested, autoprefixer]))
  .pipe(gulp.dest('./styles/'));

  console.log('Worthless test');

});
