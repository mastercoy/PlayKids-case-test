# Case Test - PlayKids & Leiturinha <3

This project was build having in mind the test proposed by the PlayKids team.

## Starting

The objective of this guide is to help you have a 100% working copy of this project.

### Requirement

To run this project you only need [Docker](https://www.docker.com/get-started) and [Docker Compose](https://docs.docker.com/compose/install/)

### Installing

To install Docker, please follow the instructions on this website:

* [Docker](https://www.docker.com/get-started) - Docker is a set of platform as a service products that use OS-level virtualization to deliver software in packages called containers. Containers are
  isolated from one another and bundle their own software, libraries and configuration files; they can communicate with each other through well-defined channels.

Also install:

* [Docker Compose](https://docs.docker.com/compose/install/) - Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your
  application’s services. Then, with a single command, you create and start all the services from your configuration.

## Running the Project

First, open a terminal at the project root and run:

```npm install```

Inside this project there is a folder called [Laradock](http://laradock.io/). Laradock is a full PHP development environment for Docker.
Open a terminal into that folder and type: (be aware, this will take a while)
``` 
sudo docker-compose up -d nginx mysql phpmyadmin
```

Enter in our project workspace:

```sudo docker-compose exec --user=laradock workspace bash```

Now run

```composer install && npm run dev```

Create the database using the phpmyadmin docker container, it needs to be in ```utf8mb4_unicode_ci```. Visit ```localhost:1010``` to access PhpMyAdmin

Now make a copy of the ```.env.example``` file inside the root folder and call it just ```.env```

Edit you .env file with the database name and stripe data. I am using stripe test data. (You need a stripe account to access test dashboard)

Now, run the migration and seeding:

```php artisan migrate && php artisan db:seed```

I am using Linux. If you are on Windows OS, there is no need to run commands with 'sudo'.

To access the server, please enter this ip address at your browser:
```localhost:8888```

## Built with

* [Vue](https://vuejs.org/) - Frontend framework <3
* [TailwindCSS](https://tailwindcss.com/) - CSS framework
* [Laravel](https://laravel.com/) - Backend framework
* [Docker](https://www.docker.com/get-started) - Containerization
* [Composer](https://getcomposer.org/) - Dependency manager
* [Docker Compose](https://docs.docker.com/compose/install/) - Tool for Docker
* [MySQL](https://www.mysql.com/) - Database

## Versioning

Used [GitHub](https://github.com/) for version control.

## Autor

* **Nylo Figueira Pinto** - *Projeto inicial* - [mastercoy](https://github.com/mastercoy)

## Final Thoughts

* Thank you very much [PlayKids](https://playkids.com/) and [Leiturinha](https://leiturinha.com.br/) for the opportunity
* Thank you [Paula Iwamizu](https://www.linkedin.com/in/paula-iwamizu-32bb0929/) for the challenge!

