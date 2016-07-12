var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect-php'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    stripCssComments = require('gulp-strip-css-comments'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch');

gulp.task('serve', ['copyfonts', 'copylibrary', 'copyplugins', 'sass'], function() {
    connect.server({}, function() {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch([
        'site/**/*.php',
        'site/blueprints/*.yml'
    ]).on('change', browserSync.reload);
});

gulp.task('copyfonts', function() {
    gulp.src('./bower_components/font-awesome/fonts/**/*')
    .pipe(gulp.dest('assets/fonts'));
});

gulp.task('copylibrary', function() {
    return gulp.src('./bower_components/jquery/dist/jquery.js')
    .pipe(uglify())
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest('assets/js/vendor'));
});

gulp.task('copyplugins', function() {
    return gulp.src([
        './bower_components/modernizer/modernizer.js',
        './bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
        './bower_components/ekko-lightbox/dist/ekko-lightbox.js'
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('plugins.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('../../maps'))
    .pipe(gulp.dest('assets/js/vendor'));
});

gulp.task('sass', function() {
    return gulp.src('assets/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(sourcemaps.write('../maps'))
    .pipe(stripCssComments({
        preserve: false
    }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
