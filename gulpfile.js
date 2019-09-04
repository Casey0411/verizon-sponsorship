/* global require */
/* jslint node: true */
'use strict';
// Settings
var gulp = require('gulp'),
	cssNanoConfig = require('./gulp-cssnano-config'),
	browserSync = require('browser-sync').create(),
	debugOptions = { title: 'Output:', minimal: true },
	autoprefixerOptions = { /* Ignore @supports */ supports: false },
	// Load plugins at runtime, instead of manually requiring each one
	$ = require('gulp-load-plugins')({
		pattern: [
			'gulp-*',
			'gulp.*',
			'autoprefixer',
			'postcss-*',
			'css-*',
			'cssnano',
			'perfectionist',
			'stylefmt',
			'browser-sync',
			'pump',
			'minimist'
		]
	}),
	paths = {
		source: 'src/',
		dest: 'dist/'
	},
	globs = {
		css: '**/*.css',
		sass: '**/*.scss',
		html: '**/*.html',
		php: '**/*.php',
		js: '**/*.js',
		img: '**/*.{jpg,jpeg,gif,png,svg}'
	},
	// PostCSS plugins
	postCssProcessors = [
		$.autoprefixer(autoprefixerOptions),
		$.postcssDiscardDuplicates
		// ,$.cssMqpacker({ sort: true })
	],
	// PostCSS plugins (production)
	postCssProcessorsProd = [$.cssnano(cssNanoConfig.options)],
	sassIncludePaths = [
		paths.source,
		paths.source + 'sass/',
		paths.source + 'sass/modules/',
		paths.source + 'sass/vendor/'
	],
	argv = $.minimist(process.argv.slice(2))

// Sass => CSS
gulp.task('style', function() {
	return (
		gulp
			.src([paths.source + 'sass/' + globs.sass], { base: '.' })
			// Begin recording sourcemaps
			.pipe($.sourcemaps.init())
			// Compile Sass
			.pipe(
				$.sass({
					includePaths: sassIncludePaths,
					outputStyle: 'nested'
				})
			)
			// Catch errors
			.on('error', $.sass.logError)
			// Switch from source dir to destination dir
			.pipe(
				$.rename(function(path) {
					path.dirname = path.dirname.replace(
						paths.source + 'sass',
						paths.dest + 'assets/css'
					);
				})
			)
			// CSS post-processing
			.pipe($.postcss(postCssProcessors))
			.pipe($.if( typeof argv.dev === 'undefined', $.postcss(postCssProcessorsProd)))
			// Replace 'content' unicode with hex code, after sass compile
			.pipe($.sassUnicode())
			// Output sourcemap
			.pipe($.if( typeof argv.dev === 'undefined', $.sourcemaps.write('.'), $.sourcemaps.write()))
			// Output production CSS
			.pipe(gulp.dest('.'))
			// Don't pass sourcemap files to next steps
			.pipe($.filter(['**/*.css']))
			// Log files to console
			.pipe($.debug(debugOptions))
			// Update Browser Sync
			.pipe(browserSync.stream())
			.on('end', function() {
				$.util.log($.util.colors.green('Sass processing complete ✔'));
			})
	);
});
// Browsersync
gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: 'http://localhost:8888/',
		directory: true
	});
	gulp
		.watch([
			paths.source + 'sass/' + globs.sass,
			'./**.*.html',
			'./**.*.css'
		])
		.on('change', browserSync.reload);
});
// Combine and compress application JS
gulp.task('app-js', function(callback) {
	var uglifyOptions = {
		parse: {},
		compress: {
			keep_fnames: true,
			drop_console: true
		},
		mangle: {
			keep_fnames: true
		},
		output: {},
		keep_fnames: true,
		warnings: false
	};
	$.pump(
		[
			// Get app JS
			gulp.src(paths.source + 'scripts/app/*.js'),
			$.sourcemaps.init(),
			// Concatenate
			$.concat('app.js'),
			// Wrap in IIFE
			$.iife({
				useStrict: true,
				trimCode: true,
				prependSemicolon: false,
				bindThis: false,
				params: ['root', '$', 'window', 'document', 'undefined'],
				args: ['this', 'jQuery', 'window', 'document']
			}),
			// Compress
			$.if( typeof argv.dev === 'undefined', $.uglify(uglifyOptions)),
			// Output
			$.rename({ suffix: '.min' }),
			$.sourcemaps.write('.'),
			gulp.dest(paths.dest + 'assets/js/'),
			$.filter(['**/*.js']),
			// Report
			$.debug(debugOptions)

		],
		callback
	);
});
// File watcher
gulp.task('watch', function(callback) {
	// Sass
	gulp.watch([paths.source + 'sass/' + globs.sass], gulp.parallel(['style']));
	// Scripts
	gulp.watch(paths.source + 'scripts/app/*.js', gulp.parallel(['app-js']));
});
// Default
gulp.task('default', gulp.parallel('style', 'app-js', 'browser-sync', 'watch'));
