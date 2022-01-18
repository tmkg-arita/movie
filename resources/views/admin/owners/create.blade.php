<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


<!-- 新規作成のフォーム

-->

<section class="text-gray-400 bg-gray-900 body-font relative">
  <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
         <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">オーナー登録</h1>
        </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <form action="{{route('admin.owners.store')}}" method="post">

        @csrf
        <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
                <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-400">名前</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" required  class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="p-2 w-1/2">
                <div class="relative">
                    <label for="email" class="leading-7 text-sm text-gray-400">メール</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" required  class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="p-2 w-full">
                <div class="relative">
                    <label for="password" class="leading-7 text-sm text-gray-400">パスワード</label>
                    <input type="password" id="password" name="password" required  class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="p-2 w-full">
                <div class="relative">
                    <label for="password_confirmation" class="leading-7 text-sm text-gray-400">パスワード(確認用)</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="flex justify-around p-2 w-full">
                <button type="button" onclick="location.href='{{route('admin.owners.index')}}'" class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">戻る</button>
                <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">登録する</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
