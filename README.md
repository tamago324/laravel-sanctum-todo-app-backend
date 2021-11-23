# Laravel の Sanctum で React を連携  (バックエンド)

起動

```sh
$ ./vendor/bin/sail up -d
```

ユーザーの作成

```sh
$ vendor/bin/sail tinker
```

http://localhost:3000 にアクセスすると、ログイン画面が表示されると思う

## 環境設定

`.env` の `FRONTEND_URL` でフロントエンドの URL を設定する

```.env
FRONTEND_URL=http://localhost:3000
```

## API

* POST /auth/login
    * ログイン
* GET /sanctum/csrf-cookie
    * CSRF 保護
    * /auth/login を叩く前に GET しておく

