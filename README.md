# フリマアプリ（Laravel）

## 概要
Laravelで作成したフリマアプリです。

## 機能
- 商品一覧表示
- 商品詳細表示
- 商品出品
- いいね機能
- マイリスト機能
- コメント機能
- Stripe決済

## 環境
- Laravel 8
- PHP 8.1
- MySQL


## 環境構築
**①リポジトリの設定**

プロジェクトclone

```

 git clone git@github.com:プロジェクト名

```

プロジェクトを移動

```
 cd プロジェクト名
```

**②Dockerの設定**

dockerのbuildと起動

```
 docker-compose up -d --build
```

実行したらDocker  Desktop for Macを確認。contact-formコンテナが

作成されていればOK。

**③Laravelパッケージのインストール**

phpコンテナにログイン

`$ docker-compose exec php bash`

PHPコンテナ上　laravelのパッケージのインストール

```
 composer install
```

開発環境を共有してもらう場合はcomposer installする

**④.envファイルの作成**

```
 cp .env.example .env
```

.envファイルのDB接続の変更

```diff

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

```

アプリの暗号化キーを設定する

php artisan key:generate

マイグレーションの実行

php artisan migrate

シーディングの実行

php artisan db:seed