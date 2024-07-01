<x-app-layout>
    <x-slot name="title">チャット</x-slot>
    
    <div class="title py-4">
        <h1>
            <strong>チャット</strong>
        </h1> 
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>講師一覧</div>

        <div class="py-1">
            @foreach ($users as $user)
                <a href="/chat/{{ $user->id }}">
                    <div class="hover-text">
                        ・{{ $user->name }}
                    </div>     
                </a>
                <hr>
            @endforeach
        </div>
    </div>
</x-app-layout>