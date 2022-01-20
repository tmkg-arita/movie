<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー一覧
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:p-6 bg-white border-b border-gray-200">

<!-- テーブルにデータ読み込み表示している。 -->
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container md:px-5 md:py-12 mx-auto">
<!-- messageの表示パターン１ -->
    {{-- @if (session('message'))
            <div class='bg-white-300 w-1/2 mx-auto md:p-2 text-blue'>
                {{session('message')}}
            </div>
      @endif --}}
<!-- messageの表示パターン２（component使用） -->
    <x-flash-message :status="session('status')" />

      <div class="flex justify-end mb-4">
        <button onclick="location.href='{{route('admin.owners.create')}}'" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">新規登録</button>
      </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">

      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">名前</th>
            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">メールアドレス</th>
            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">作成日</th>
            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br"></th>
            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($owners as $owner )
            <tr>
                <td class="md:px-4 py-3">{{$owner ->name}}</td>
                <td class="md:px-4 py-3">{{$owner ->email}}</td>
                <td class="md:px-4 py-3"> {{$owner ->created_at ->diffForHumans()}}</td>
                <td class="md:px-4 py-3">
                    <button onclick="location.href='{{ route('admin.owners.edit', ['owner' => $owner->id]) }}'" class="text-white bg-blue-400 border-0 py-1 px-1 focus:outline-none hover:bg-blue-500 rounded">編集する</button>
                </td>
                <form method="post" action="{{ route('admin.owners.destroy', ['owner' => $owner->id]) }}">
                    @csrf
                    @method('delete')
                    <td class="md:px-4 py-3">
                        <button type="submit" onclick="return confirm('本当に削除しますか？')" class="text-white bg-pink-400 border-0 py-1 px-1 focus:outline-none hover:bg-blue-500 rounded">削除する</button>
                    </td>
                </form>
            </tr>
        @endforeach
        </tbody>
      </table>
      {{ $owners->links() }}
    </div>
  </div>
</section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
