
'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var runSequence = require('run-sequence');
gulp.task('sass', function () {
   return gulp.src('./assets/sass/components/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css/'));
});  
 
gulp.task('convert',['sass'], function () {
  
    return gulp.src('./assets/sass/components/combined/style.scss')
      .pipe(sass.sync().on('error', sass.logError))
      .pipe(gulp.dest('./assets/css/'));
  });

gulp.task('run',function(){
  gulp.start('sass');
  gulp.start('convert');
});
gulp.task('watch', function(){
  // gulp.watch('./assets/sass/components/*.scss', ['sass']); 
  gulp.watch('./assets/sass/components/*.scss', ['sass']); 
});


gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
});

//Watch task
gulp.task('default',function() {
  gulp.watch('./assets/sass/components/*.scss',['sass']);
});