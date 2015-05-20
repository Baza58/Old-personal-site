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
            }
        }
    
    }); 

grunt.loadNpmTasks('grunt-contrib-sass');    
grunt.loadNpmTasks('grunt-contrib-watch');
    
};