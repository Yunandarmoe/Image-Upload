# Image Upload

This is a simple image upload using Laravel.

# Installation

git clone `https://github.com/Yunandarmoe/Image-Upload.git`

Go to the project folder 

- For installing authentication

  ```
  composer require laravel/ui
  php artisan ui vue --auth
  ```

- Create database

  ```
  - mysql -u root
  - create database laravel_fileupload
  - php artisan make:model Gallery -m
  - Change DB_DATABASE=laravel_fileupload to match with database in .env file
  - Input $table->string('name'); in create_galleries_table file of migration
  - php artisan migrate
  ```

- To create upload folder in public foler

  - Copy filesystem.php
  - php artisan storage:link
  
- Run `npm run watch` for running css

Run `php artisan serve`








