## provided sql file the root


## installation
    Create a database locally named tasks (utf8_general_ci)
    Download composer https://getcomposer.org/download/
    check the .env file is present or rename env.example -> .env.
    Open the console and cd your project root directory
    Run composer install or php composer.phar install
    Run php artisan key:generate         //generate unique key

    Run php artisan migrate --seed  //to run seeders(User table) & migrate
    Run php artisan serve