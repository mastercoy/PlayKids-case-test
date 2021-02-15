# Case Test - PlayKids & Leiturinha <3

This project was build having in mind the test proposed by the PlayKids team.

## Starting

The objetive of this guide is to help you have a 100% working copy of this project.Obtain a copy here
[GitHub](https://github.com/mastercoy/[editar])

### Requirement

To run this project you only need [Docker](https://www.docker.com/get-started) and [Docker Compose](https://docs.docker.com/compose/install/)

### Installing

To install Docker, please follow the instruction on this website:

* [Docker](https://www.docker.com/get-started) - Docker is a set of platform as a service products that use OS-level virtualization to deliver software in packages called containers. Containers are
  isolated from one another and bundle their own software, libraries and configuration files; they can communicate with each other through well-defined channels.

Also install:

* [Docker Compose](https://docs.docker.com/compose/install/) - Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your
  application’s services. Then, with a single command, you create and start all the services from your configuration.

## Running the Project

Inside this project there is a folder called [Laradock](http://laradock.io/). Laradock is a full PHP development environment for Docker. Open a terminal into that folder and type:

``` 
sudo docker-compose up -d nginx mysql phpmyadmin
```

I am using Linux. If you are on Windows OS, there is no need to run with 'sudo'. This command will start a few Docker containers needed for the project. Everything is configured inside the Laradoc
folder

To access the server, please enter this ip address:

## Built with

* [Vue](https://vuejs.org/) - Frontend framework <3
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


