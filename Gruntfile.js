module.exports = function(grunt) {

    
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
        
    }); 

grunt.loadNpmTasks('grunt-contrib-sass');    
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-cssmin');

grunt.registerTask('default', ['sass', 'uglify', 'cssmin', 'watch']);
 
    
};