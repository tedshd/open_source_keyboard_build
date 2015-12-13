/**
 *
 * @authors Ted Shiu (tedshd@gmail.com)
 * @date    2015-11-16 02:18:01
 * @version $Id$
 */

var gulp = require('gulp');
var cssnext = require("gulp-cssnext");
var browserSync = require('browser-sync').create();

gulp.task('default', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    gulp.run('css');

    gulp.watch(['./dev/**', './*.html'], function(event) {
        console.log(event.path.search('css'));
        if (event.path.search('css') !== -1) {
            gulp.run('css');
        }
        if (event.path.search('html') !== -1) {
            browserSync.reload();
        }
    });
});

gulp.task("css", ['liveload'], function() {
  gulp.src("./dev/css/*.css")
    .pipe(cssnext({
        compress: true
    }))
    .pipe(gulp.dest("./css/"));
});

gulp.task("liveload", function() {
    browserSync.reload();
});
