'use strict';

module.exports = function(grunt) {
  // Unified Watch Object
  var watchFiles = {
    serverViews: ['app/views/**/*.html'],
    serverJS:    ['gruntfile.js', 'server.js', 'config/**/*.js', 'app/**/*.js', 'app/assets/js/*.js'],
    serverSCSS:  ['app/assets/scss/**/*.scss'],
    clientJS:    ['public/js/*.js'],
    clientCSS:   ['public/css/*.css'],
    language:    ['app/lang/**/*.json'],
  };

  var uglifyFiles = {
    "public/js/main.min.js": "app/assets/js/main.js"
  };

  // Project Configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      serverViews: {
        files: watchFiles.serverViews,
        options: {
          livereload: true
        }
      },
      serverJS: {
        files: watchFiles.serverJS,
        tasks: ['uglify'],
        options: {
          livereload: true
        }
      },
      serverSCSS: {
        files: watchFiles.serverSCSS,
        tasks: ['compass', 'postcss']
      },
      clientJS: {
        files: watchFiles.clientJS,
        options: {
          livereload: true
        }
      },
      clientCSS: {
        files: watchFiles.clientCSS,
        options: {
          livereload: true
        }
      },
      language: {
        files: watchFiles.language,
        options: {
          livereload: true
        }
      }
    },
    uglify: {
      production: {
        options: {
          mangle: false
        },
        files: uglifyFiles
      }
    },
    compass: {
      dist: {
        options: {
          sassDir: 'app/assets/scss',
          cssDir: 'public/_/css',
          environment: 'production'
        }
      },
      dev: {
        options: {
          sassDir: 'app/assets/scss',
          cssDir: 'public/_/css',
        }
      }
    },
    nodemon: {
      dev: {
        script: 'server.js',
        options: {
          nodeArgs: ['--debug'],
          ext: 'js,html',
          watch: watchFiles.serverViews.concat(watchFiles.serverJS)
        }
      }
    },
    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer-core')({
            browsers: 'last 5 version'
          }).postcss,
          require('csswring').postcss
        ]
      },
      dist: {
        src: 'public/_/css/*.css',
        dest: 'public/css/main.min.css'

      }
    },
    concurrent: {
      default: ['nodemon', 'watch'],
      debug: ['nodemon', 'watch'],
      options: {
        logConcurrentOutput: true,
        limit: 10
      }
    }
  });

  // Load NPM tasks
  require('load-grunt-tasks')(grunt);

  // Making grunt default to force in order not to break the project.
  grunt.option('force', true);

  // A Task for loading the configuration object
  // grunt.task.registerTask('loadConfig', 'Task that loads the config into a grunt option.', function() {});

  // Default task(s).
  grunt.registerTask('default', ['concurrent:default']);
};
