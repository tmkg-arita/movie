<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults(認証のデフォルト)
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |[このオプションは、デフォルトの認証「ガード」とパスワードを制御します
    |アプリケーションのオプションをリセットします。これらのデフォルトを変更できます
    |必要に応じて、しかしそれらはほとんどのアプリケーションにとって完璧なスタートです。]
    |
    */

    'defaults' => [
        'guard' => 'users',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards(認証ガード)
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |[次に、アプリケーションのすべての認証ガードを定義できます。
    |もちろん、優れたデフォルト構成が定義されています
    |ここでは、セッションストレージとEloquentユーザープロバイダーを使用しています。
    |
    |すべての認証ドライバーにはユーザープロバイダーがあります。これは、
    |ユーザーは実際にデータベースまたは他のストレージから取得されます
    |このアプリケーションがユーザーのデータを永続化するために使用するメカニズム。]
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'users' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'owners' => [
            'driver' => 'session',
            'provider' => 'owners',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers(ユーザープロバイダー)
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |[すべての認証ドライバーにはユーザープロバイダーがあります。これは、
    |ユーザーは実際にデータベースまたは他のストレージから取得されます
    |このアプリケーションがユーザーのデータを永続化するために使用するメカニズム。
    |
    |複数のユーザーテーブルまたはモデルがある場合は、複数を構成できます
    |各モデル/テーブルを表すソース。これらのソースは、
    |定義した追加の認証ガードに割り当てられます。]
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'owners' => [
            'driver' => 'eloquent',
            'model' => App\Models\Owner::class,
        ],

        'admin' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords(パスワードのリセット)
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |[さらにある場合は、複数のパスワードリセット構成を指定できます
    |アプリケーション内に複数のユーザーテーブルまたはモデルがあり、
    |特定のユーザータイプに基づいて、個別のパスワードリセット設定。
    |
    |有効期限は、リセットトークンが必要な分数です。
    |有効と見なされます。このセキュリティ機能により、トークンの寿命が短くなります。
    |推測する時間が少なくなります。必要に応じて変更できます。]
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'owners' => [
            'provider' => 'owners',
            'table' => 'owner_password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'admin' => [
            'provider' => 'admin',
            'table' => 'admin_password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout(パスワード確認タイムアウト)
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |[ここで、パスワード確認までの秒数を定義できます
    |タイムアウトすると、ユーザーはパスワードを再入力するように求められます。
    |確認画面。デフォルトでは、タイムアウトは3時間続きます。]
    |
    */

    'password_timeout' => 10800,

];
