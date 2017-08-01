var gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    simplevars = require('postcss-simple-vars'),
    nested = require('postcss-nested'),
    cssImports = require('postcss-import'),
    browserSync = require('browser-sync'),
    mixins = require('postcss-mixins'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();;

gulp.task('default', function(){

console.log('Worthless text of life');


});


gulp.task('watchtask', function(){

    browserSync.init({
    notify: false,
    proxy:'localhost/PCA'
  });

watch('./**/*.php', function() {
    browserSync.reload();
  });

  watch('./**/*.css', function() {
gulp.start('test');
    gulp.start('cssInject');
	
  });

});

gulp.task('cssInject',  function() {
  return gulp.src('./**/*.css')
    .pipe(browserSync.stream());
});




gulp.task('test', function(){

return gulp.src('./styles/rawstyle.css')
.pipe(postcss([cssImports, simplevars, nested, autoprefixer]))
.pipe(gulp.dest('./modified-styles/'));


console.log('Worthless test');

});
