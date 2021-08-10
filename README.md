# Laravel CRUD APPLICATION
![CSS-CODE](https://img.shields.io/badge/CSS-CODE-orange)
![HTML-CODE](https://img.shields.io/badge/HTML-CODE-blue)
![PHP-CODE](https://img.shields.io/badge/PHP-CODE-9cf)
![MYSQL-CODE](https://img.shields.io/badge/MYSQL-CODE-yellow)
![Laracel-CODE](https://img.shields.io/badge/LARAVEL-CODE-blueviolet)

## This is my fifth project built with Laravel framework.

## CRUD APP features
* See the projects and employees on the data table
* Add new records
* Delete records 
* Edit button that allows change data
* Routing between valid pages
* Log in and Sign up functionality
* Admin and User area for using app (Admin can modify data, Users read only).
### Admin log in information:
* E-mail address: admin@admin.com
* Password: admin 

## Requirements For Installation
* Integrated development environment (IDE) application
* MySQL WorkBench
* AMPPS or XAMMP
* Composer 

## Installation
* Clone repository to AMPPS or XAMPPS root folder 
* Create a new Database
* Open your (IDE) application and open cloned application
* Rename .env.example to .env and fill info about your database name, username, password etc.
* Install Composer if you don't have one [Click here to install](https://getcomposer.org/doc/00-intro.md#installation-windows)
* Find your Composter with code below: 
``` 
php ../composer.phar require laravel/ui
```
* Set application key(generate) if doesn't work use code below(clear) :
```
php artisan key:generate
php artisan config:clear
```
* Copy this code to terminal and create scheme tables and insert admin user into database
```
php artisan migrate:refresh --seed  
```
* Write this line into terminal to start using app
```
php artisan serve
```
* After this command line execution you should see your localhost server with port given ctrl + left mouse click to open.
## Author
Gytautas [Github](https://github.com/Gytzum) , [LinkedIn](https://www.linkedin.com/in/gytautas-zumaras-4ab552210/)
