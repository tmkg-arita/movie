<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           オーナー一覧
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

               
                    {{-- オーナー情報のtable
                        
                        
                        --}}
                    <section class="text-gray-400 bg-gray-900 body-font">
                        <div class="container px-4 py-12 mx-auto">
                            <div class="flex justify-end mb-4">
                                <button onclick="location.href='{{ route('admin.owners.create') }}'" class="  text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">新規登録</button>
                            </div>
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">名前</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">メールアドレス</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">作成日</th>
                                  <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($owners as $owner )
                                    <tr>
                                    <td class="px-4 py-3">  {{$owner ->name}}</td>
                                    <td class="px-4 py-3"> {{$owner ->email}}</td>
                                    <td class="px-4 py-3"> {{$owner ->created_at ->diffForHumans()}}</td>
                                    <td class="w-10 text-center">
                                        <input name="plan" type="radio">
                                     </td>
                                    </tr>
                                @endforeach
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </section>


                </div>
        </div>
    </div>
</x-app-layout>
