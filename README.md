<h1 align="center">Olá 👋, meu nome é Cícero Calazans</h1>
<h3 align="center">Sou desenvolvedor fullstack no Brasil.</h3>

<p align="left"> <img src="https://komarev.com/ghpvc/?username=fahning&label=Profile%20views&color=0e75b6&style=flat" alt="fahning" /> </p>

<h3 align="left">Contate-me:</h3>
<p align="left">
<a href="https://linkedin.com/in/cicerofahning" target="blank"><img align="center" src="https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/linkedin.svg" alt="cicerofahning" height="30" width="40" /></a>
<a href="https://fb.com/cicerofahning" target="blank"><img align="center" src="https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/facebook.svg" alt="cicerofahning" height="30" width="40" /></a>
</p>

<h3 align="left">Linguagens e Ferramentas:</h3>
<p align="left"> <a href="https://aws.amazon.com" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/amazonwebservices/amazonwebservices-original-wordmark.svg" alt="aws" width="40" height="40"/> </a> <a href="https://git-scm.com/" target="_blank"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://laravel.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> <a href="https://postman.com" target="_blank"> <img src="https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg" alt="postman" width="40" height="40"/> </a> <a href="https://quasar.dev/" target="_blank"> <img src="https://cdn.quasar.dev/logo/svg/quasar-logo.svg" alt="quasar" width="40" height="40"/> </a> <a href="https://vuejs.org/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/vuejs/vuejs-original-wordmark.svg" alt="vuejs" width="40" height="40"/> </a> </p>

<h1 align="center">Projeto: Sistema de Vendas Restaurante (BackEnd)</h1>


## Pré-Requisitos

Para executar o projeto, será necessário ter instalado os seguintes programas:

- [PHP 7.3+](https://www.php.net/downloads.php#v7.3.27)
- [Composer ](https://getcomposer.org/download/)
- [Laravel 8](https://laravel.com/docs/8.x/installation)
- [Laragon](https://laragon.org/download/index.html)


## Instalação

Para iniciar o projeto, é necessário clonar o projeto do GitHub num diretório dentro da pasta www do Laragon:

```shell
cd "Diretório 'www' dentro da pasta raiz do laragon"
git https://github.com/Fahning/backsrjose
```

Apos clonar o projeto rodar o seguinte comando abaixo para instalar as dependências:

```shell
composer install
```

Apos instalar as dependências, alterar os parâmetros do banco de dados em '.env' e rodar os seguintes comandos:

```shell
php artisan key:generation
php artisan migrate
php artisan optimize
```
Iniciar o projeto pelo paragon ou com o comando abaixo:
```shell
php artisan serve
```


<h1 align="center">Acessar a documentação do projeto</h1>

## Documentação

Para iniciar acessar a documentação do projeto execute o comando abaixo:

```shell
cd "diretorio do projeto"
php artisan serve
"caso necessario"
php artisan scribe:generate
```
