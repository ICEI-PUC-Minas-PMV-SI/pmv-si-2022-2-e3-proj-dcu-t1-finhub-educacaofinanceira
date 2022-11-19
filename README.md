```markdown
## Passo a passo para subir o servidor
1. Fazer o clone do projeto:
```
git clone https://github.com/mikaeletha/finhub-laravel.git
```

2. Entrar na pasta do projeto:
```
cd /finhub-laravel
```

3. Instalar as dependências do Composer:
```
composer install
```

4. Mudar o arquivo `.env`:
```
# Windows
cp .env.example .env

# Linux / Mac
cp .env.example .env
```

5.Editar o arquivo `.env` com dados do seu banco de dados local:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=finhub
DB_USERNAME=root
DB_PASSWORD=
```

6. Gerar a chave do Laravel:
```
php artisan key:generate
```

7. Fazer a migração do banco de dados:
```
php artisan migrate
```

8. Fazer o "semeamento" do banco de dados:
```
php artisan db:seed
```

9. Iniciar o servidor para usar a aplicação:
```
php artisan serve
```
```