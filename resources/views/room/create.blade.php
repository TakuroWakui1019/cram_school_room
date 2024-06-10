<x-guest-layout>
    <x-slot name="title">教室作成</x-slot>
    
    <div>教室作成</div>
    
    <form action="/room/store" method="POST">
        @csrf
        <input type="text" name="room[name]" placeholder="教室名"/>
        <input type="submit" value="作成"/>
    </form>
</x-guest-layout>