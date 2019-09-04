Website to support TheTimesCenter event space. http://thetimescenter.com/

# Folder structure

## /src/

Source files: Sass and JS

### /src/scripts/
#### /src/scripts/app

Custom JS (not third-party libraries) for the application. All `.js` files in this directory will be combined into a single file for distribution: `/dist/assets/js/app.min.js`.

### /src/sass/

The `style.scss` file in this directory is used to combine all the styles for the site into a single file for distribution: `/dist/assets/css/style.css`.

## /dist/

Distribution files.

This is treated as the server root. For local development, point your server (such as MAMP) to this directory.

# Building from source

## Running tasks with Gulp

To build from the source files, in a terminal window, navigate to the project root folder (containing `gulpfile.js`) and run the command:

`gulp`

For local development, run the command with a `--dev` flag:

`gulp --dev`

This will output the CSS and JS unminified, so it is easier to read.
