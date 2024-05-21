# fashionablylate
# アプリケーション名
docker-compose up -d --build
## 環境構築
- Dockerのビルドからマイグレーション、シーディングまでを記述する
docker-compose exec php bash
composer install
cp .env.example .env
docker-compose run php bash
php artisan make:controller ContactController
php artisan key:generate
php artisan make:migration create_contacts_table
php artisan make:migration create_categories_table
php artisan migrate
php artisan make:seeder ContactsTableSeeder
php artisan make:seeder CategoriesTableSeeder
php artisan make:factory ContactFactory
php artisan db:seed
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
php artisan migrate
composer require laravel-lang/lang:~7.0 --dev
cp -r ./vendor/laravel-lang/lang/src/ja ./resources/lang/
php artisan make:controller AuthController


## 使用技術(実行環境)
- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)
php:7.4.9
Laravel 8
mysql:8.0.26
## ER図
< - - - 作成したER図の画像 - - - >
![alt text](<スクリーンショット 2024-05-21 11.05.36.png>)

## URL
- 例) 開発環境：http://localhost/
http://localhost/
http://localhost/admin/
