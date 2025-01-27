# アプリケーション名：FashionablyLate
管理者用の、登録・ログイン・認証機能を備えた、顧客向けのお問い合わせフォームです。

## 環境構築
- リポジトリURL：[https://git@github.com:anna-1017/test1-contact-form.git](https://github.com/anna-1017/test1-contact-form.git)
- Dockerの起動

  docker-compose up -d --build

  docker-compose exec app bash
- マイグレーションの実行

  php artisan migrate
- シーディングの実行

  php artisan db:seed
- アプリケーションへのアクセス

  ブラウザで以下のURLを開き、アプリケーションを確認します：

  [http://localhost](http://localhost)
  
## 使用技術(実行環境)
- Laravel Framework 8.83.8

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 開発環境：http://localhost/
