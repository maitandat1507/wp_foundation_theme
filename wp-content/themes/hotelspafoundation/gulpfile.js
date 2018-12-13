'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass({
      includePaths: sassPaths
    }).on('error', sass.logError))
    // .pipe($.autoprefixer({
    //   browsers: ['last 2 versions', 'ie >= 9']
    // }))
    .pipe(gulp.dest('css'));
});

// gulp.task('default', ['sass'], function() {
//   gulp.watch(['scss/**/*.scss'], ['sass']);
// });

gulp.task('default', gulp.series(gulp.parallel('sass'), function() {
  gulp.watch('./scss/**/*.scss', gulp.task('sass'));
}));

// gulp.task('sass:watch', function () {
//   gulp.watch('./sass/**/*.scss', gulp.task('sass'));
// });
