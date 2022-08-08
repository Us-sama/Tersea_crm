# Tersea technical assignment



> ### ce README fichier est détaillé sur la façon de configurer le projet, afin qu'il puisse être testé sans problème.



----------

# Getting started

## Installation


Clone the repository

    git clone -b master https://github.com/Us-sama/Tersea_crm.git folder_name

acceder au fichier

    cd folder_name

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Database seeding

Run the database seeder and you're done

    php artisan db:seed



admin: flahioussama1@gmail.com
tous les mots de passes sont : Oussama123
    
    
***Note*** : créer un compte sur mailtrap.io et configurer le dans le fichier .env pour une experience fluide pour tester les emails.
i hope you like the work and i can always  do better.
Thanks a lot for your time :)   
