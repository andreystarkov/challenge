module.exports = function(grunt) {

// var optipng = require('imagemin-optipng');
//  var jpegtran = require('imagemin-jpegtran');

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "src/libs/_/css/styles.css": "src/libs/_/css/styles.less"
        }
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'src/css/all.css': [
          'src/libs/_/css/font-awesome.css',
          'src/libs/animate.css/animate.min.css',
          'src/libs/_/css/styles.css',
          'src/libs/_/css/fonts.css',
          'src/libs/_/css/normalize.css',
          'src/libs/_/css/helper.css',
          'src/libs/_/css/modals.css',
          'src/libs/tooltipster/css/tooltipster.css',
          'src/libs/owl-carousel2/assets/owl.carousel.css',
          'src/libs/owl-carousel/owl-carousel/owl.transitions.css',
          'src/libs/video-js/dist/video-js/video-js.css'
          ]
        }
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> | im@andreystarkov.ru */\n',
        mangle: true
      },
      build: {
        files: {
          'src/js/all.js': [
            'src/libs/jquery/dist/jquery.min.js',
            'src/libs/skel/src/skel.js',
            'src/libs/jquery.transit/jquery.transit.js',
            'src/libs/tooltipster/js/jquery.tooltipster.min.js',
            'src/libs/owl-carousel2/owl.carousel.js',
            'src/libs/skidding--dragdealer/src/dragdealer.js',
            'src/libs/video-js/dist/video-js/video.js',
            'src/libs/jquery-validation/dist/jquery.validate.js',
            'src/libs/_/js/classie.js',
            'src/libs/_/js/engine.js',
            'src/libs/_/js/modal.js',
            'src/libs/_/js/main.js',
            'src/libs/_/js/ajax.js'
          ]
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
//  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('default', ['less', 'cssmin', 'uglify',]);

};