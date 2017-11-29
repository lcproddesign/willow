var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');

gulp.task('minify-css', () => {
	gulp.src('site/css/main_dev.css')
		.pipe(cleanCSS())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./site/css/')),
	gulp.src('site/css/main.css')
		.pipe(cleanCSS())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('./site/css/'))
});

gulp.task('styles', function() {
    gulp.src('site/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./site/css/'))
});

//Watch task
gulp.task('default',function() {
    gulp.watch('site/scss/**/*.scss',['styles']);
    gulp.watch('site/css/main*.css',['minify-css']);
});