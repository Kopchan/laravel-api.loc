
## Установка проекта из репозитория
1. Склонируйте репозиторий
```shell
git clone https://github.com/kopchan/laravel-api.loc.git 
```
2. Перейдите в папку с проектом и скачайте зависимости
```shell
cd laravel-api.loc
composer i
```
3. Скопируйте файл конфигурации .env.example в .env
```shell
cp .env.example .env
```
4. Сгенерируйте ключ шифрования
```shell
php artisan key:generate
```
5. Изменить файл конфигурации .env (пример для БД MySQL)
```env
DB_CONNECTION=mysql
DB_HOST=            # Домен/IP_СУБД
DB_PORT=            # Порт_СУБД
DB_DATABASE=        # Имя_БД
DB_USERNAME=        # Логин_пользователя
DB_PASSWORD=        # Пароль_пользователя
```

## Пустой проект 
Создан в OSPanel следующими командами:
```shell
cd domains
composer self-update
composer create laravel/laravel laravel-api.loc
cd laravel-api.loc
php artisan install:api
php artisan config:publish cors
php artisan storage:link
```
В корне проекта создан файл .htaccess
```apacheconf
RewriteEngine on
RewriteRule ^(.*)$ public/$1 [L]
```
