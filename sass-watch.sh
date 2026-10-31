echo Launching SASS in Development mode...

#touch the main SCSS file, forcing SASS to do a rebuild on startup
touch scss/*.scss

sass --watch scss:css
