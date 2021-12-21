<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/*メンテナンスモードテンプレートの事前レンダリングをサポートし
メンテナンスモード中にエンドユーザーがエラーに遭遇する可能性が少なくなりました。
ただし、これをサポートするには、以降をpublic/index.phpファイルに追加しなくてはなりません。
これらの行は既存のLARAVEL_START定数の定義直下に配置してください。
if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';をLARAVEL_STARTの
    直下に置いている。
*/
define('LARAVEL_START', microtime(true));


/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance(アプリケーションがメンテナンス中であるかどうかを確認します)
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
| (アプリケーションが「down」コマンドを介してメンテナンス/デモモードになっている場合
|このファイルをロードして、事前にレンダリングされたコンテンツを表示できるようにします
|フレームワークを開始する代わりに、例外が発生する可能性があります。)
|
*/

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader(オートローダーを登録する)
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
| (Composerは、便利な自動生成されたクラスローダーを提供します。
|このアプリケーション。私たちはそれを利用する必要があります！必要なだけです
|ここのスクリプトに追加するので、クラスを手動でロードする必要はありません。)
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application(アプリケーションを実行する)
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
| (アプリケーションを入手したら、次を使用して着信リクエストを処理できます。
|アプリケーションのHTTPカーネル。その後、返信します
|このクライアントのブラウザにアクセスして、アプリケーションを楽しむことができます。)
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
