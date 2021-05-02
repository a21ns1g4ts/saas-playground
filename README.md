# saas-playground

[![MIT](https://badgen.net/github/license/micromatch/micromatch)](LICENSE)

PRs and issues is welcome!

### Requirements

* PHP >= 7.2.5
* Composer PHP >= 1.9.0

PHP extensions:

* OpenSSL
* BCMath
* Fileinfo
* PDO
* Mbstring
* Tokenizer
* XML
* Ctype
* JSON

Supported databases

* MySQL 5.6+
* PostgreSQL 9.4+
* SQLite 3.8.8+
* SQL Server 2017+

### Installation

Clone the repository

```bash
git clone https://github.com/Atiladanvi/saas-playground.git
```

Switch to the repo folder

```bash
cd saas-playground
```

Install all the dependencies using composer

```bash
composer install
```

Copy the example env file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```

Generate a new application key

```bash
php artisan key:generate
```

Set the database connection in `.env`

```
DB_CONNECTION=<mysql|pgsql|sqlite|sqlsrv>
DB_HOST=<host>
DB_PORT=<port>
DB_DATABASE=<databse name>
DB_USERNAME=<database user>
DB_PASSWORD=<database password>
```

Clean the application cache

```bash
php artisan optimize 
```

Run the database migrations and seeders

```bash
php artisan migrate --seed
```

Start the local development server

```bash
php artisan serve
```

You can now access the server at http://localhost:8000

### Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Credits

- [Atila Silva](https://github.com/Atiladanvi)
- [All Contributors](../../contributors)

### License

The MIT License. Please see [license file](LICENSE) for more information.
