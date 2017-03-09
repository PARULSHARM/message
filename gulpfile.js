var gulp = require('gulp');
var scss = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('gulp', function() {
  console.log("Hello Gulp!");
});

gulp.task('scss', function(){
  return gulp.src('scss/**/*.scss')
    .pipe(scss())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});


// gulp.task('watch', function(){
// gulp.watch('scss/**/*.scss', ['scss']);
// });

gulp.task('browserSync', function() {
  var files = [
    'css/*',
    'scss/*',
    'index.php'
  ]


  browserSync.init(files, {
    proxy: "http://oops.forum"
  })
});


gulp.task('watch', ['browserSync','scss'], function (){
  gulp.watch('scss/**/*.scss', ['scss']);
  // Other watchers
});
