var gulp = require('gulp');
var del = require('del');
var run = require('gulp-run');

gulp.task('default', ['clean_dist', 'build']);

gulp.task('clean_dist', function(cb){
  del([
    'dist',
  ], cb);  
});

gulp.task('build', ['clean_dist'], function() {
    gulp.src('*.php')
        .pipe(gulp.dest('dist'));
    gulp.src('*.ico')
        .pipe(gulp.dest('dist'));
    gulp.src('common/*.php')
        .pipe(gulp.dest('dist/common'));
    gulp.src('css/*.css')
        .pipe(gulp.dest('dist/css'));
    gulp.src('js/*.js')
        .pipe(gulp.dest('dist/js'));
    gulp.src('img/*.*')
        .pipe(gulp.dest('dist/img'));
    gulp.src('fonts/*.*')
        .pipe(gulp.dest('dist/fonts'));
    
});

gulp.task('deploy', function () {
  run('/usr/bin/sudo /home/ubuntu/dev/TandKCreations/deploytandk.sh').exec();
});