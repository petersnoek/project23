# Installatie
- zorg dat composer geinstalleerd is  ([getcomposer.org])


- download repo als zipfile
- pak uit naar <webroot>/project23
- open terminal (command)
- ga naar de juiste map  (`cd c:\wamp64\www\project23`  of   `cd /var/www/project23`)
- `composer install`   (vult de vendor map)
- maak een nieuwe database `project23` en een database user `project23` met password `project23`
- pas de .env file aan (als je deze niet hebt, kopieer dan .env.example en hernoem naar .env)
- in de .env file: vul de database gegevens in en de URL  (APP_URL=http://localhost:8000)
- start de server  (php artisan serve) op poort 8000
- open in je browser: http://localhost/home/index
  
  
  
