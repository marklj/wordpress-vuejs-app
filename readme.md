# Wordpress VueJS Application Bundle

An integrated VueJS 2.0 and Wordpress application built on Composer and Webpack.

## Requirements
- Composer
- Node (Yarn works great too!)

## Installation
- Within the project root, install Wordpress from Composer using `composer install`.
- Change the name of your `example.env` file to `.env`.
- Navigate to http://yoursite.dev/wp and install Wordpress.
- Navigate to http://yoursite.dev/wp/wp-admin/options-general.php and set the Wordpress Address (URL) to http://yoursite.dev/wp and the Site Address (URL) to http://yoursite.dev.
- In your terminal, go to the public/app directory and run `npm install`.
- Still in the public/app directory, run `npm run dev` to bundle the Javascript app to the Wordpress web root. The webpack hot-reload dev server will load in a browser window.
- In your browser, navigate to http://yoursite.dev to view your VueJS / Wordpress site!

## VueJS Development
Rather than running `npm run build prod` after every change, a more productive approach can be to run `npm run dev` within the public/app directory. You will then have an auto-reloading dev environment at http://localhost:8080.

The app is set up with a central Vuex data store, which is located in the public/app/src/store directory. For more information on how to use Vuex, visit: https://vuex.vuejs.org.

## Development Server
This project was tested using Laravel Valet as the development server environment. Other environments will most likely work just fine, but still may need some tinkering.

## Production
This project should be run on production at your own risk since there has been very little real-world testing on it. If you would like to try it out in a "production-like" environment, there are a couple steps to take:
- Follow the installation instructions above. The only difference is to run `npm run build prod` instead of `npm run dev`.
- Change your .env file's `APP_ENV` parameter to `production`.

## References
- https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory
- https://roots.io/using-composer-with-wordpress/
- https://github.com/bstavroulakis/vue-wordpress-pwa
- https://developer.wordpress.org/rest-api/