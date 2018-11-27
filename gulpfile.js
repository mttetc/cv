var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');
var cleancss = require('gulp-clean-css');
var sass = require('gulp-sass');

gulp.task('fonts', function (text) {
    gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'));
});

gulp.task('images', function () {
    gulp.src('src/images/**/*')
        .pipe(cache(imagemin({optimizationLevel: 3, progressive: true, interlaced: true})))
        .pipe(gulp.dest('dist/img/'));
});

gulp.task('styles', function () {
    gulp.src(['src/scss/**/*.scss'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }
        }))
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('dist/styles/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cleancss())
        .pipe(gulp.dest('dist/styles/'))
});

gulp.task('scripts', function () {
    return gulp.src('src/js/global.js')
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }
        }))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/scripts/'))
        .pipe(rename({suffix: '.min'}))
        // .pipe(uglify())
        .pipe(gulp.dest('dist/scripts/'))
});

gulp.task('watch', function () {
    gulp.watch("src/scss/**/*.scss", ['styles']);
    gulp.watch("src/js/**/*.js", ['scripts']);
    gulp.watch("src/fonts/**/*", ['fonts']);
});

gulp.task('clean', require('del').bind(null, ['dist']));

gulp.task('default', ['clean'], function () {
    gulp.start('styles');
    gulp.start('scripts');
    gulp.start('fonts');
    gulp.start('images');
});