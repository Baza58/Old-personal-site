module.exports = function(grunt) {
    var mozjpeg = require('imagemin-mozjpeg');
    
    grunt.initConfig({
        sass: {
            dist: {
                files: {
                    'assets/css/style.css' : 'assets/css/style.sass'
                }
            }
        
        },
        watch: {
            css: {
                files: ['assets/css/*.sass'],
                tasks: ['sass']
            },
            uglify: {
                files: ['assets/js/js.js'],
                tasks: ['uglify']
            },
            cssmin: {
                files: ['assets/css/style.css'],
                tasks: ['cssmin']
            }
        },
        uglify: {
            my_target: {
                files: {
                    'assets/js/js.min.js' : 'assets/js/js.js'
                }
                
            }
        },
        cssmin: {
            target: {
                files: {
                    'assets/css/style.min.css' : 'assets/css/style.css'
                }
            }
        },
        imagemin: {                          // Task 
            static: {                          // Target 
                options: {                       // Target options 
                    optimizationLevel: 3,
                    svgoPlugins: [{ removeViewBox: false }],
                    use: [mozjpeg()]
                    },
                files: {                         // Dictionary of files 
                    'assets/compress/*.png': 'assets/img/*.png', // 'destination': 'source' 
                    'assets/compress/*.jpg': 'assets/img/*.jpg',
                    'assets/compress/*.gif': 'assets/img/*.gif'
      }
    },
        }
    }); 

grunt.loadNpmTasks('grunt-contrib-sass');    
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-imagemin');
grunt.registerTask('default', ['sass', 'uglify', 'cssmin', 'watch']);
 
    
};