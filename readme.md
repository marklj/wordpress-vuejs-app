# Wordpress VueJS Application Bundle

An integrated VueJS 2.0 and Wordpress application built on Composer and Webpack.

## Requirements
- Composer
- Node JS (Yarn works great too!)

## Installation
- Within the project root, install wordpress from Composer using `composer install`.
- Navigate to http://yoursite.dev/wp and install Wordpress.
- Navigate to http://yoursite.dev/wp/wp-admin/options-general.php and set the WordPress Address (URL) to http://yoursite.dev/wp and the Site Address (URL) to http://yoursite.dev.
- In your terminal, go to the public/app directory and run `npm install`.
- Still in the public/app directory, run `npm run build prod` to bundle the Javascript app to the Wordpress web root.
- In your browser, navigate to http://yoursite.dev to view your VueJS / Wordpress site!

## VueJS Development
Rather than running `npm run build prod` after every change, a more productive approach can be to run `npm run dev` within the public/app directory. You will then have an auto-reloading dev environment at http://localhost:8080.

## Development Server
This project was tested using Laravel Valet as the development server environment. Other environments will most likely work just fine, but still may need some tinkering.