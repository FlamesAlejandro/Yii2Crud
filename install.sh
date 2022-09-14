docker-compose build
docker-compose run phpyii2 bash -c "composer install"
docker-compose up -d
