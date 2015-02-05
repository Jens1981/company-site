
var gulp = require('gulp'),
    watch = require('gulp-watch'),
    batch = require('gulp-batch'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    newer = require('gulp-newer'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;


gulp.task('browser-sync', function() {
  browserSync({
    proxy: 'jensen.localhost',
    browser: 'google chrome'
  });
});
  

gulp.task('sass', function() {
  return sass('src/sass', {
      check: true,
      sourcemap: true,
      style: 'expanded'
    })
    .on('error', function (err) {
      console.error('Error!', err.message);
    })
    .pipe(sourcemaps.write())
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('./'))
    .pipe(reload({stream:true}));
});


gulp.task('scripts', function() {
  return gulp.src('src/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('dist/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'));
});


gulp.task('images', function() {
  return gulp.src('src/images/*')
    .pipe(imagemin({ optimazation: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest('dist/images/'));
});


gulp.task('bs-reload', function() {
  browserSync.reload();
});


gulp.task('test', function () {
  console.log('Working!');
});


gulp.task('default', function () {
    watch('src/sass/style.scss', function () {
      console.log('Working!');
    });
});

gulp.task('watch', function () {
    return gulp.src('**/*.js')
        .pipe(watch('**/*.js'))
        .pipe(gulp.dest('./dist/js'));
});







