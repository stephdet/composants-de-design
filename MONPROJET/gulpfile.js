// Requis
var gulp = require("gulp");
var sass = require("gulp-sass");
// Include plugins
var plugins = require("gulp-load-plugins")();

// tous les plugins de package.json

// Variables de chemins
var source = "./src"; // dossier de travail
var destination = "./dist"; // dossier à livrer

gulp.task("sass", function() {
  return gulp
    .src(source + "/assets/scss/styles.scss")
    .pipe(sass())
    .pipe(gulp.dest(destination + "/assets/css/"));
});
