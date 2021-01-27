# WordPress installation with Docker

Testing Docker compose and containers including WordPress CMS, MySql database and phpMyAdmin.

This setup will retain uploaded content (images, files), installed and updated plugins and themes after restarting Docker.

Start:
docker-compose up -d

Stop:
docker-compose down

WordPress Site:
http://localhost:8000/

WordPress CMS:
http://localhost:8000/wp-admin/

phpMyAdmin:
http://localhost:8080/
