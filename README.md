# project1
Covid19 Statistics project, illustrates covid19 cases around the world and having simple dashboard, World map has all countries and on hover it shows the country’s covid cases details

# Covid-19 Dashboard

Application about Covid19 cases around the world using active covid19 API, showing the following information :

**1'st** PAGE :
- Total statistics of worldwide covid cases.
- World map has all countries, with the ability to hover on the marker to show each country’s covid cases details
should be shown.
- when the user hits the route, it will get the data from a covid19 API and insert or update (if country exists) all countrie's data in the database.

**2'nd** PAGE :
- Countries list page will show all countries in a table with the ability to:
  * Sort by total confirmed cases.
  * Search by country name.
  * Add country details with covid19 cases numbers.
  * Edit country details with covid19 cases numbers.
  * Use pagination 10 results on each page.


## Setup:
All you need is to run these commands:

(*Assuming you've [installed Laravel](https://laravel.com/docs/8.x/installation)*)
```bash
git clone https://github.com/kossa/laradminator.git

cd project1

composer install # Install backend dependencies

cp .env.example .env # Update database credentials configuration

php artisan migrate # Run the database migrations (Set the database connection in .env before migrating)

php artisan serve # Start the local development server

```

## Docker
To install with Docker, run following commands:

```bash
git clone git@github.com:gothinkster/laravel-realworld-example-app.git
cd laravel-realworld-example-app
cp .env.example.docker .env
docker run -v $(pwd):/app composer install
cd ./docker
docker-compose up -d
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan jwt:generate
docker-compose exec php php artisan migrate
docker-compose exec php php artisan db:seed
docker-compose exec php php artisan serve --host=0.0.0.0
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## API
The API can be accessed at
[API](https://api.covid19api.com/summary)
