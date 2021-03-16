# Getting started (Windows 10 x64)

It is necessary that the environment has **postgresql version 10 and Wampserver** installed to generate the database and Wampserver that will run the website.

# Installing wampserver (if you don't have wampserver installed)

Access the link: https://www.wampserver.com/en/#wampserver-64-bits-php-5-6-25-php-7

Follow all the steps step by step

# Installing laravel on the wampserver

Usually the Wampserver is installed in `c:\wamp64`, access the terminal and run the command `cd c:/wamp64/www`

After that run the following command: `composer create-project laravel / laravel = 8.0 www --prefer-dist`

# Preparing the environment

With the laravel installed, access the link below to download the Crud `.zip`:

`https://github.com/GuilhermeViana16/Teste_Guilherme/archive/main.zip`

After that, copy all the folders from the `.zip` and paste in the project created in `c:/wamp64/www`

# Run the site

Still in the same directory `cd c:/wamp64/www` execute the command `php artisan serve`

Then in another terminal in the same directory `cd c:/wamp64/www` execute the command `php artisan migrate`

Para acessar o site [http://localhost:8000/documentos](http://localhost:8000/documentos)