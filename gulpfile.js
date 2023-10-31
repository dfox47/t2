const fs            = require('fs');
const concat        = require('gulp-concat')
const config        = JSON.parse(fs.readFileSync('../config.json'))
const cssMinify     = require('gulp-csso')
const ftp           = require('vinyl-ftp')
const gulp          = require('gulp')
const gutil         = require('gulp-util')
const rename        = require('gulp-rename')
const sass          = require('gulp-sass')(require('sass'))
const uglify        = require('gulp-uglify')

// FTP config
const host          = config.host
const password      = config.password
const port          = config.port
const user          = config.user

const remoteFolder          = '/foxartbox.com/public_html/t2/'
const remoteCss             = remoteFolder + 'css/'
const remoteJs              = remoteFolder + 'js/'
const remoteTemplateParts   = remoteFolder + 'template-parts/'

const localFolder           = ''
const localCss              = localFolder + 'css/'
const localJs               = localFolder + 'js/'
const localTemplateParts    = localFolder + 'template-parts/'



function getFtpConnection() {
	return ftp.create({
		host:           host,
		log:            gutil.log,
		password:       password,
		parallel:       3,
		port:           port,
		user:           user
	})
}

let conn = getFtpConnection()



gulp.task('css', function () {
	return gulp.src(localCss + '_styles.scss')
		.pipe(sass())
		.pipe(cssMinify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('copy_css', function () {
	return gulp.src(localCss + '**/*')
		.pipe(conn.dest(remoteFolderCss))
})

gulp.task('copy_html', function () {
	return gulp.src(localFolder + '*.php')
		.pipe(conn.dest(remoteFolder))
})

gulp.task('copy_template_parts', function () {
	return gulp.src(localTemplateParts + '**/*')
		.pipe(conn.dest(remoteFolderTemplateParts))
})

gulp.task('copy_js', function () {
	return gulp.src(localJs + '**/*.js')
		.pipe(conn.dest(remoteFolderJs))
})

gulp.task('js', function () {
	return gulp.src([
			localJs + 'jquery.3.2.1.js',
			localJs + 'owl.carousel.js',
			localJs + 'jspdf.min.js',
			localJs + '**/*.js'
		])
		.pipe(concat('all.js'))
		// .pipe(uglify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('watch', function() {
	gulp.watch(localFolder + '*.php',           gulp.series('copy_html'))
	gulp.watch(localCss + '**/*',               gulp.series('css', 'copy_css'))
	gulp.watch(localJs + '**/*.js',             gulp.series('js', 'copy_js'))
	gulp.watch(localTemplateParts + '**/*',     gulp.series('copy_template_parts'))
})

gulp.task('default', gulp.series('watch'))