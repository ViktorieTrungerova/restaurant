
var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var concat = require('gulp-concat');
var watch = require('gulp-watch');
var gulpCopy = require('gulp-copy');

gulp.task('sass', function(){
    return gulp.src('www/assets/css/style.scss')
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest('www/assets/css/'))
});


gulp.task('cssmin', function () {
    gulp.src('www/assets/css/style.css')
        .pipe(cssmin())
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest('www/assets/css'));
});

gulp.task('watch',function () {
    gulp.watch('www/assets/css/**/*.scss', ['sass']);
    gulp.watch('www/assets/css/*.css', ['cssmin']);
});


