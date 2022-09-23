# fullstack-dev-task

## Setup

- GIT clone this repository
- RUN `docker-compose up` inside `./docker` folder
- Add `lmt.local.io` inside `hosts` file
- Run `composer install` in terminal
- Run `yarn` in terminal
- Create `.env` file and copy all contents of `.env.example`
- Run `php artisan key:generate` to generate new `APP_KEY`
- Run `yarn prod` to generate Frontend assets
- Run `https://lmt.local.io` in your browser

In case you want run `Vite` in development mode with HMR support, run `yarn dev`
In case you have blank page you should visit `https://0.0.0.0:5173` and allow to visit this site
This is for Vite development assets, as the SSL certificate is "self-signed"
