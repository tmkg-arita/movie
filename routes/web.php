<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
use App\Http\Controllers\LifeTestController;

/*
|--------------------------------------------------------------------------
| Web Routes(Webルート)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|[ここで、アプリケーションのWebルートを登録できます。これらは
|ルートは、グループ内のRouteServiceProviderによってロードされます。
| 「Web」ミドルウェアグループが含まれています。今、素晴らしいものを作成してください！]
|
*/

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']);
Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']);
Route::get('/servicecontainertest', [LifeTestController::class, 'showServiceContainerTest']);
Route::get('/serviceprovidertest', [LifeTestController::class, 'showServiceProviderTest']);

// 現在のディレクトリのauth.phpも読み込んでいる。
require __DIR__.'/auth.php';

