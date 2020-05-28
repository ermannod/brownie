### <i class="icon-download"></i> Download or clone the project

Clone the HTTPS link and copy it on your Git Client (SmartGit, GotKraken, Sourcetree, etc)


### <i class="icon-file"></i> Create a database 

Create a database through your MySQL administration tool (phpMyAdmin)

### <i class="icon-pencil"></i> Duplicate .env.example file and rename it .env 

You have to duplicate .env.example, rename it with .env title and fill it with correct data about DB.

### <i class="icon-refresh"></i> Open PowerShell or Comand Prompt

Open your comand prompt and run the following commands, to populate DB tables and open correct route to see the project:

```
php artisan key:generate
php artisan migrate
php -S localhost:8000 -t public/
```
### <i class="icon-hdd"></i> Open a new tab on your Browser

Open a new tab on your browser and copy this into url

http://localhost:8000/
