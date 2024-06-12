<x-app-layout>
    <x-slot name="title">チャット</x-slot>
    
    <x-slot name="header">
        　講師一覧
    </x-slot>

    @foreach ($users as $user)
        <div>
          <a href=" route('openChat') ">{{ $user->name }}</a>
        </div>
        <hr>
    @endforeach
</x-app-layout>