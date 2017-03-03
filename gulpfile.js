'use strict';

var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var babel = require('gulp-babel');
var jshint = require('gulp-jshint');
var notify = require("gulp-notify");

var errNotification = {
  title: "JSHint Failed",
  message: function(file){
    if (file.jshint.success) {
      return false;
    }

    var errors = file.jshint.results.map(function (data) {
      if (data.error) {
        return "(" + data.error.line + ':' + data.error.character + ') ' + data.error.reason;
      }
    }).join("\n");
    return "\n" + file.relative + " (" + file.jshint.results.length + " errors)\n" + errors;
  }
};

gulp.task('lint', function() {
  gulp.src('./assets/js/*.js')
});

gulp.task('scripts', function() {
  gulp.src('./assets/js/*.js')
    .pipe(jshint({ esversion: 6 }))
    .pipe(notify(errNotification))
    .pipe(babel({
      presets: ['es2015']
    }))
    .pipe(concat('core.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./'))
});
 
gulp.task('sass', function () {
  return gulp.src('./assets/sass/style.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('default', function () {
  gulp.watch('./assets/sass/**/*.scss', ['sass']);
  gulp.watch('./assets/js/**/*.js', [ 'scripts']);
});

