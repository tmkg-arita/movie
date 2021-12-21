<?php

/*
|--------------------------------------------------------------------------
| Create The Application(アプリケーションを作成する)
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
| (最初に行うことは、新しいLaravelアプリケーションインスタンスを作成することです
|これは、Laravelのすべてのコンポーネントの「接着剤」として機能します。
|さまざまなパーツすべてをバインドするシステム用のIoCコンテナ。)
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces(重要なインターフェースをバインドする)
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
|次に、いくつかの重要なインターフェイスをコンテナにバインドする必要があります。
|必要に応じて解決できるようになります。カーネルは
| WebとCLIの両方からこのアプリケーションへの着信要求。
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application(アプリケーションを返す)
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
|(このスクリプトは、アプリケーションインスタンスを返します。インスタンスはに与えられます
|インスタンスの構築を分離できるように、呼び出し元のスクリプト
|アプリケーションの実際の実行と応答の送信から。)
*/

return $app;
