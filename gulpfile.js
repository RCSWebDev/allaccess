'use strict';

var gulp          = require('gulp');
var Fiber         = require('fibers')
var maps    			= require('gulp-sourcemaps');
var squish				= require('gulp-concat');
var sass          = require('gulp-sass')(require('sass'));
var bourbon				= require('bourbon').includePaths;
var postcss       = require('gulp-postcss');
var autoprefixer  = require('autoprefixer');
var jshint        = require('gulp-jshint');
var uglify        = require('gulp-uglify');
var browsersync   = require('browser-sync').create();

function sync(done) {
	var f = [
		'./assets/styles/**/*.scss',
		'./assets/scripts/*.js'
	];
	
	browsersync.init({
		proxy: 'http://localhost:8888/allaccess/',
		files: f
	});
	
	done();
}

function reloaded(done) {
	browsersync.reload();
	done();
}

function styles() {
	return gulp.src([
							'./assets/styles/**/*.scss',
							'./node_modules/normalize.css/normalize.css'
						 ])
						 .pipe(maps.init())
						 .pipe(sass({
							 fibers: Fiber,
							 includePaths: ['styles'].concat(bourbon)
						 }).on('error', sass.logError))
						 .pipe(postcss([autoprefixer()]))
						 .pipe(squish('style.css'))
						 .pipe(maps.write('./'))
						 .pipe(gulp.dest('./'))
						 .pipe(browsersync.stream());
}

function scripts() {
	return gulp.src('./assets/scripts/*.js')
						 .pipe(maps.init())
						 .pipe(jshint())
						 .pipe(jshint.reporter('default'))
						 .pipe(uglify())
						 .pipe(maps.write('./'))
						 .pipe(gulp.dest('./assets/scripts/min'))
						 .pipe(browsersync.stream());
}

function check() {
	gulp.watch('./assets/styles/**/*.scss',  gulp.series(styles, reloaded));
	gulp.watch('./assets/scripts/*.js',  gulp.series(scripts, reloaded));
}

const build = gulp.series(styles, scripts);
const server = gulp.series(sync, gulp.parallel(check, build));

exports.sass      = styles;
exports.compress  = scripts;
exports.build     = build;
exports.server    = server;