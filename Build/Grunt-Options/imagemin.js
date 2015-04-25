/**
 * Grunt-Contrib-Imagemin
 * @description Minify PNG, JPEG and GIF images
 * @docs https://github.com/gruntjs/grunt-contrib-imagemin
 */

var config = require('../Config');

module.exports = {
	images : {
		options : {
			optimizationLevel: config.Images.optimizationLevel
		},
		files: [{
			expand: true,
			cwd: config.Images.paths.tempDir,
			src: ['**/*.{png,jpg,gif}'],
			dest: config.Images.paths.distDir
		}]
	}
};
