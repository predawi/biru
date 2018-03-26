/*Load all plugin define in package.json*/
var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();

function getTask(task) {
	return require('./src/assets/tasks/' + task)(gulp, plugins);
}

//Styles
gulp.task('sass', getTask('sass'));

// On default task, just compile on demand
gulp.task('default', ['sass'], function () {
	gulp.watch(['./src/assets/css/*.scss', './src/assets/css/**/*.scss'], ['sass']);
});