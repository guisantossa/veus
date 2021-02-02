<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Projeto Vues com laravel
> Teste de admissão da Empresa Veus

## Baixar o projeto
Primeiro passo, clonar o projeto:
``` bash
# Clonar
git clone https://github.com/guisantossa/veus.git

# Acessar
cd veus
```

## Configuração - Banco

``` bash
# Configurações do banco
Criar no banco de dados o Banco Vsproject (caso deseja criar outro nome alterar o arquivo .env no diretório raiz do projeto).
No mesmo arquivo .env alterar a url e o username e senha do banco em APP_URL, DB_USERNAME e DB_PASSWORD.

# Criar migrations (tabelas e Seeders)
php artisan migrate --seed

```

## Acesso
O Sistema só funciona por autenticação, você deverá fazer login para entrar no sistema. 
```
Login: email@email.com
senha: 123456789
```

## Requisição Api
``` bash
##Para fazer uma requisição api basta digitar:
https://(nomedaaplicao)/api/v1/products
##com filtro
https://(nomedaaplicao)/api/v1/products?q=seringa&filter:brand=BUNZL

```

