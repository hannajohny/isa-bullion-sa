var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var browserSync = require('browser-sync').create();

gulp.task('watch', () => {
  browserSync.init(null, {
    proxy: 'localhost:8888/isa-bullion', // 'dev.site.com' in your example
    port: 5000,
  });
  gulp.watch('**/*.php').on('change', () => {
    browserSync.reload();
  });
  gulp.watch('**/*.js').on('change', () => {
    browserSync.reload;
  });
  gulp.watch('./src/sass/**/*.scss', gulp.series(styles));
});

function styles() {
  return gulp
    .src('./src/sass/**/*.scss')
    .pipe(
      sass({
        outputStyle: 'compressed',
      })
    )
    .pipe(gulp.dest('./dist/css'))
    .pipe(browserSync.stream());
}

gulp.task('default', gulp.series('watch'));
