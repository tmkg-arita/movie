<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeTestController extends Controller
{
   public function showServiceContainerTest(){
       app()->bind('lifeTest',function(){
           return 'ライフサイクルテスト';
       });

       $test=app()->make('lifeTest');

       app()->bind('sample',Sample::class);
       $sample = app()->make('sample');
       $sample->run();
       dd($test,app());
   }
}

/*本来は1ファイルに１クラスです。
テストのため同じファイルにクラスを書いている。*/



class Sample{
    public $message;
    public function __construct(Message $message){
        $this -> message = $message;
    }
    public function run(){
        $this->message->send();
    }
}

class Message{
    public function send(){
        echo 'メッセージ表示テスト';
    }
}
