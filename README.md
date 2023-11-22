<center>
  <h1 align="center">🚀 Simula um consumidor de web hook via GET ou POST</h1>
  <p align="center">
    Microserviço API um consumidor de Webhooks, com PHP
  </p>
</center>

### Como usar?

Você  realizar requisições via POST ou GET para o link /api/test, passando qualquer payload.

Você pode verificar se o conteúdo do Webhook foi realmente recebido no link de acesso ao projeto. [http://localhost:81](http://localhost:81)

### Como rodar?

Clone Repositório

```sh
git clone -b git@github.com:LeandroSousaCastro/consumer-webhook-app-laravel.git consumer-webhook-app
```

```sh
cd consumer-webhook-app
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Suba os containers do projeto

```sh
docker compose up -d
```

Acesse o container app

```sh
docker compose exec -it app bash
```

Instale as dependências do projeto

```sh
composer install
```

Gere a key do projeto Laravel

```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:81](http://localhost:81)
