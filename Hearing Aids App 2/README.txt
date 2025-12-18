Hearing Aids Laravel Assignment - Custom Files
=============================================

IMPORTANT:
This zip is NOT a full Laravel installation. 
First you must create a fresh Laravel 11 project on your machine:

  composer create-project laravel/laravel hearing-aids-app "11.*"

Then copy ALL files and folders from this zip INTO the project root
(allow it to overwrite files like routes/web.php and database/seeders/DatabaseSeeder.php).

After that:

1. Create a MySQL/MariaDB database, for example:
     CREATE DATABASE hearing_aids_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

2. In the project's .env file set:

     DB_DATABASE=hearing_aids_db
     DB_USERNAME=your_mysql_username
     DB_PASSWORD=your_mysql_password

3. Delete the default migrations from database/migrations in your project 
   (users, password_resets, personal_access_tokens, sessions, failed_jobs).

4. Run:

     php artisan migrate --seed

5. Start the server:

     php artisan serve

6. Open http://127.0.0.1:8000 in your browser.

You will see the Hearing Aids Price Guide app with:
- Single table: hearing_aids
- CRUD + search + dropdown filter by price + pagination
- Laravel validation
- Blade component based layout
- Simple CSS styling (no frameworks, no JS)
