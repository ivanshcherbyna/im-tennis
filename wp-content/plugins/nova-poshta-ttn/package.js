{
	"name": "morkvanp-plugin",
	"version": "1.0.0",
	"description": "Awesome starter plugin example",
	"author": "Demian Kostelny <demiankost2@gmail.com>",
	"repository": {
		"type": "git",
		"url": ""
	},
	"keywords": [
		"wordpress",
		"plugin",
		"PHP",
		"composer",
		"gulp",
		"es6",
		"scss"
	],
	"devDependencies": {
		"babel-core": "^6.26.0",
		"babel-preset-env": "^1.6.1",
		"babelify": "^8.0.0",
		"browser-sync": "^2.18.13",
		"browserify": "^14.5.0",
		"browserify-shim": "^3.8.14",
		"gulp": "^3.9.1",
		"gulp-autoprefixer": "^4.0.0",
		"gulp-concat": "^2.5.2",
		"gulp-if": "^2.0.2",
		"gulp-notify": "^3.0.0",
		"gulp-options": "^1.1.1",
		"gulp-plumber": "^1.1.0",
		"gulp-rename": "^1.2.0",
		"gulp-sass": "^3.1.0",
		"gulp-sourcemaps": "^2.6.1",
		"gulp-strip-debug": "^1.1.0",
		"gulp-uglify": "^3.0.0",
		"gulp-uglifycss": "^1.0.9",
		"vinyl-buffer": "^1.0.0",
		"vinyl-source-stream": "^1.1.0"
	},
	"babel": {
		"presets": [
			"env"
		]
	},
	"browserify": {
		"transform": [
			"browserify-shim"
		]
	},
	"browser": {
		"jquery": "./node_modules/jquery/dist/jquery.js"
	},
	"browserify-shim": {
		"jquery": "$"
	},
	"license": "GPL-3.0"
}