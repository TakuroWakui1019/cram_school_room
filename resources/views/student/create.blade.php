<x-app-layout>
    <x-slot name="header">
        生徒追加
    </x-slot>
    
    <form action="/student/store" method="POST">
        @csrf
        <input type="hidden" name="student[room_id]" value="{{ Auth::user()->room->id }}">
        <input type="text" name="student[name]" placeholder="名前"/>
        <input type="text" name="student[grade]" placeholder="学年"/>
        <input type="submit" value="追加"/>
    </form>
</x-app-layout>