# WordPress installation with Docker

Testing Docker compose and containers including WordPress CMS, MySql database and phpMyAdmin.

This setup will retain the database, uploaded content (images, files), installed/updated plugins and themes after restarting Docker.

Start:
docker-compose up -d

Stop:
docker-compose down

Stop and delete volumes (WARNING!!! this will delete all files in containers):
docker-compose down --volumes

WordPress Site:
http://localhost:8000/

WordPress CMS:
http://localhost:8000/wp-admin/

phpMyAdmin:
http://localhost:8080/

Rest API route for blog posts:
http://localhost:8000/?rest_route=/wp/v2/posts

