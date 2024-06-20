<x-app-layout>
    <x-slot name="title">チャット</x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                チャット
        </h2>
    </x-slot>
    
    <div>講師一覧</div>

    <div class="py-1">
        @foreach ($users as $user)
            <a href="/chat/{{ $user->id }}"> ・{{ $user->name }}</a>
            <hr>
        @endforeach
    </div>
</x-app-layout>