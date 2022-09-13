docker-compose build
docker-compose run phpyii2 bash -c "composer install"
docker-compose up -d
docker-compose run phpyii2 bash -c "yii migrate/up"