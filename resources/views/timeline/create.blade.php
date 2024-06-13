<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タイムライン
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/timeline/store" method="POST">
                        @csrf
                        <div class="py-4">
                            <label for="user">投稿者：{{ Auth::user()->name }}</label>
                            <input type="hidden" name="timeline[user_id]" value="{{ Auth::id() }}">
                        </div>
                        <div class="py-4">
                            <label for="title">タイトル</label>
                            <input type="text" size="50" name="timeline[title]" placeholder="タイトル"/>
                        </div>
                        <div class="py-4">
                            <label for="body">本文　</label>
                            <textarea name="timeline[body]" rows="5" cols="50" id="body"  placeholder="本文"></textarea>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 px-5 py-2">投稿</button>
                    </form>
                </div>   
            </div>
        </div>
    </div>    
    
</x-app-layout>