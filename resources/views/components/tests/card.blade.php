<!-- 初期値の設定 -->
@props([
    'title',
    'content' => 'syokiti',
    'message' => 'shokiti',
    ])


<!-- コンテンツの中身 -->
<div {{ $attributes-> merge([
    'class'=>'border-2 shadow-lg w-1/4 p-2']) }} >
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>

</div>
