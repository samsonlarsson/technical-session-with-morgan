# Technical Session with Morgan

Making use of the Firebase Tools, write a basic web based application, that allows you to do the following:
- Allows a user to authenticate with an email and password and stores the data in firebase realtime database.
- Allows the user to sign in and signout.
- Allows the user to send a limited 140 character message
- Alerts an existing user every time a new user posts a new limited message


## Running the app

1. Install composer from https://getcomposer.org/.
2. Run `cp .env.example .env` to copy the environent file, and populate firebase values with your own project keys
3. Run `composer update`
4. Run `php artisan key:generate`
5. Start the development server with `php artisan serve` and navigate to http://localhost:8000 and away you go!


