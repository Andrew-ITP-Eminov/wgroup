const gulp = require('gulp');
const concat = require('gulp-concat');
// const debug = require('gulp-debug');
const uglify = require('gulp-uglify-es').default;
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");


gulp.task('css-compress', function () {
    gulp.src(['styles/**/*.css', 'js/**/*.css'])
        .pipe(concat('style.min.css'))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('.'));

});
gulp.task('css-resp-compress', function () {
    gulp.src('styles-resp/**/*.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest(function(file){
            return file.base;
        }));
});
gulp.task('js-compress', function () {
    gulp.src('js/*.js')
        .pipe(concat('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('.'));

    gulp.src('js/slide-out-menu-css3-jquery/script.js')
        .pipe(rename('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(function(file){
            return file.base;
        }));
});


gulp.task('default', ['js-compress', 'css-compress', 'css-resp-compress']);