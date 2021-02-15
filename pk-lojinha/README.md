# Teste prático - PlayKids & Leiturinha <3   Backend

Esse projeto foi construído tendo em base o teste proposto pela Playkids.

## Começando

O objetivo dessas instruções é de ajudar-lhe a obter uma cópia do projeto rodando 100% na sua máquina local com propósito de testes e avaliação. Obtenha uma cópia do
projeto [GitHub](https://github.com/mastercoy/[editar])

[comment]: <> (Todo)

### Pré-requisito

To run this project you only need [Docker](https://www.docker.com/get-started) and [Docker Compose](https://docs.docker.com/compose/install/)

### Instalando

To install Docker, please visit this website:

* [Docker](https://www.docker.com/get-started) - Docker is a set of platform as a service products that use OS-level virtualization to deliver software in packages called containers. Containers are
  isolated from one another and bundle their own software, libraries and configuration files; they can communicate with each other through well-defined channels.

Also install:

* [Docker Compose](https://docs.docker.com/compose/install/) - Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your
  application’s services. Then, with a single command, you create and start all the services from your configuration.

Inside the project there is a folder called Laradock. [Laradoc](http://laradock.io/). Laradock is a full PHP development environment for Docker. Open a terminal into that folder and type:

``` 
sudo docker-compose up -d nginx mysql phpmyadmin
```

I am using Linux. If you are on Windows OS, there is no need to run with 'sudo' This command will start a few Docker containers needed for the project. Everything is configured inside the Laradoc
folder

## Rodando os testes

Testes unitários se encontram dentro da pasta '/tests/Unit/UserTest.php'. O nome de cada teste indica o seu propósito. Para executar toda essa classe de teste rode o seguinte comando dentro da pasta
raiz do projeto:

```
php artisan test --filter=UserTest
```

O resultado dos testes aparecerão no terminal.

## Construído com

* [Laravel](https://laravel.com/) - Framework utilizado para o back-end
* [Composer](https://getcomposer.org/) - Gerenciador de dependencias
* [React](https://reactjs.org/) - Framework utilizado para o front-end
* [reactstrap](https://reactstrap.github.io/) - componentes do Boostrap 4 para react
* [MySQL](https://www.mysql.com/) - Banco de dados

## Versionamento

Utilizado o  [GitHub](https://github.com/) para versionamento de projeto.

## Autor

* **Nylo Figueira Pinto** - *Projeto inicial* - [mastercoy](https://github.com/mastercoy)

## Considerações finais

* Muito obrigado a [PlayKids](https://playkids.com/) e a [Leiturinha](https://leiturinha.com.br/) pela oportunidade!
* Obrigado a [Paula Iwamizu](https://www.linkedin.com/in/paula-iwamizu-32bb0929/) pelo desafio!
* F

