### How to use

1. Clone the repository

```bash
git clone git@github.com:Abdelrahman-Labib/w88-project.git
cd w88-project
```

2. Install dependencies

```bash
composer install
```

3. Copy the `.env.example` file to `.env`

```bash
cp .env.example .env
```

4. Generate an application key

```bash
php artisan key:generate
```

5. Run migrations

```bash
php artisan migrate
```

#### Fetch products

```bash
php artisan schedule:run
```

```bash
php artisan queue:work
```

# Running the Scheduler on the server with cronjob
```bash
* * * * * cd /w88-project && php artisan schedule:run >> /dev/null 2>&1
```
Make careful to (* * * * *) all the fields on the server cronjob to read from the Laravel Task Scheduling.

### API Endpoints

- http://127.0.0.1:8000/api/products
- http://127.0.0.1:8000/api/products/{id}

## Testing

To run the tests, execute the following command:

```bash
php artisan test
```

