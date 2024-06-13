<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            生徒を追加
        </h2>
    </x-slot>
    
    <form action="/student/store" method="POST">
        @csrf
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
                <input type="hidden" name="student[room_id]" value="{{ Auth::user()->room->id }}">
                <input type="text" name="student[name]" placeholder="名前"/>
                <input type="text" name="student[grade]" placeholder="学年"/>
                <button type="submit" class="text-white bg-blue-700 px-5 py-2">追加</button>
            </div>   
        </div>
    </form>
</x-app-layout>