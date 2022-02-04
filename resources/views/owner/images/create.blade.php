<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="post" action="{{ route('owner.images.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap -m-2">     
                                                        
                                <div class="p-2 w-1/2 mx-auto">
                                    <div class="relative">
                                        <label for="image" class="leading-7 text-sm text-gray-400">画像</label>
                                        <input type="file" id="image" name="fils[][image]" multiple accept="image/jpg,image/jpeg,image/png" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-blue-500 focus:bg-gray-900 focus:ring-2 focus:ring-blue-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                           
                            <div class="flex justify-around p-2 w-full">
                                <button type="button" onclick="location.href='{{route('owner.images.index')}}'" class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">戻る</button>
                                <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">登録する</button>
                            </div>
                        
                            </div> 
                         </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>