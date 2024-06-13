<x-app-layout>
    <x-slot name="title">チャット</x-slot>
    
    <x-slot name="header">
        　講師一覧
    </x-slot>

    @foreach ($users as $user)
        
          <a href="/chat/{{ $user->id }}"> {{ $user->name }}</a>
        
        <hr>
    @endforeach
</x-app-layout>