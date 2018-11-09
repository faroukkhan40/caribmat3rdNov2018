/*
//gulp.src - point to files and folders
//gulp dest- where to place the compiele files
//gulp tast- defie a task
//gulp watch - watches files and folders
//gulp rowser sync - b
*/


var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync= require('browser-sync').create();
var reload = browserSync.reload;

// start browserSync sync
gulp.task('browserSync', function() {
	browserSync.init({ 
		
        proxy: 'http://localhost/wordpress/',
        
                  });
	});

// compiling sass to the style.css
    gulp.task('sass', function() {   
        gulp.src('caribmat3rdNov2018/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('caribmat3rdNov2018'))
        .pipe(browserSync.stream());
});

// Watch everything
gulp.task('watch',['browserSync','sass'], function() {
	
    gulp.watch('caribmat3rdNov2018/sass/**/*.scss',['sass']);
    gulp.watch(root + '**/*').on('change', browserSync.reload);
	
});

// Watch everything
gulp.task('default',['browserSync','sass','watch']);

