Docker needs to be installed!

clone this repo and cd in to repo

Follow all steps in order!

```
mv .env.example .env
```

```
docker-compose up -d
```

```
docker-compose exec php composer install
```

```
docker-compose exec php php artisan jwt:secret
```

```
docker-compose exec php php artisan migrate
```

```
docker-compose exec php php artisan db:seed
```


api should now be running on localhost:8080

localhost:8080/api/tv-shows

localhost:8080/api/ratings

There are 2 resources ratings and tv-shows, full crud is avaiable using http verbs.
To write and edit resources, user have to be logged in

localhost:8080/api/register

localhost:8080/api/login

to see all routes run 
docker-compose exec php php artisan route:list
