// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync');

var reload = browserSync.reload;

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed',
    includePaths: ['bower_components/foundation-sites/scss', 'bower_components/motion-ui/src']
};

// Set the proxy.
gulp.task('browser-sync', function () {
    browserSync({
        proxy: "localhost:8000/AABC2wp.dev/"
    });
    gulp.watch("./*/**/*.php").on("change", reload);
    gulp.watch("./*.php").on("chnage", reload);
});


// Lint Task
gulp.task('lint', function() {
    return gulp.src('js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Sass file to CSS, and reload browser(s).
gulp.task('sass', function() {
    return gulp.src('assets/scss/*.scss')
        .pipe(sass(sassOptions))
        .pipe(gulp.dest('assets/css'))
        .pipe(reload({stream:true}));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
      gulp.src('assets/js/*.js')
        .pipe(concat('app.js'))
        .pipe(gulp.dest('assets/js/min'))
        // .pipe(rename('app.min.js'))
        // .pipe(uglify())
        .pipe(gulp.dest('assets/js/min'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    // gulp.watch('/*php', ['php']);
});

// Default Task
gulp.task('default', ['browser-sync', 'lint', 'sass', 'scripts', 'watch']);
