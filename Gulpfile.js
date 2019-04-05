var gulp 		= require( 'gulp' );
var watch 		= require( 'gulp-watch' );
var sass 		= require( 'gulp-sass' );
var sourcemaps 	= require( 'gulp-sourcemaps' );
var rename 		= require("gulp-rename");
var concat 		= require("gulp-concat");
var browserSync = require("browser-sync");
var uglify 		= require('gulp-uglify');

// SASS
var prefixerOptions = {
	browsers: ['last 3 versions']
};
gulp.task( 'sass', function(done) {
	return gulp.src( 'assets/sass/style.scss' )
	.pipe( sourcemaps.init())
	.pipe( sass({outputStyle: 'compressed'}).on('error', sass.logError) )
	.pipe( sourcemaps.write( './assets/maps' ) )
	.pipe( gulp.dest( './' ) );
	done();
} );

//JavaScript
var jsFiles = [
	'assets/js/scripts.js'
];
gulp.task( 'javascript', function(done) {
	return gulp.src( jsFiles )
    .pipe(concat('scripts.js'))
	.pipe(uglify({mangle:false}))
	.pipe(gulp.dest('./'));
	done();
} );

// Default
gulp.task( 'default', gulp.series('sass', 'javascript') );

// Watch
gulp.task('watch', function() {
	gulp.watch( 'assets/sass/**/*.scss', gulp.parallel( ['sass'] ));
    gulp.watch( 'assets/sass/style.scss', gulp.parallel( ['sass'] ));
    gulp.watch( jsFiles, gulp.parallel( ['javascript'] ));
} );
