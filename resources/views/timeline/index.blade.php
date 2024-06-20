<x-app-layout>
 <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                ホーム
        </h2>
    </x-slot>
 <div class="py-4">
  <strong>こんにちは！{{ $user->name }}さん！</strong>
 </div>
 
 <div class="py-4">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <div class="py-1">
  <a href="/report/create"> ・授業報告をする</a>
 </div>
 <div class="py-1">
  <a href="/report/index"> ・授業報告を見る</a>
 </div>
 <div class="py-1">
  <a href="/chat/index"> ・チャット</a>
 </div>
 <div class="py-1">
  <a href="/timeline/create"> ・タイムラインに投稿する</a>
 </div>
 <div class="py-1">
  @if(Auth::check() && Auth::user()->status == 1)
   <a href="/student/create"> ・生徒を登録する</a>
  @endif
 </div>
 </div>
 </div>
 
 <div>【タイムライン一覧】</div>
 @foreach($timelines as $timeline)
 <div class="py-4">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
     <div class="p-6 bg-white border-b border-gray-200">
         <strong>タイトル:{{ $timeline->title }}</strong>
         <div>本文:{{ $timeline->body }}</div>
         <small>投稿者:{{ $timeline->user->name }}</small>
         <small>　投稿日:{{ $timeline->updated_at }}</small>
     </div>
    </div>
   </div>
  </div>
 @endforeach
 
</x-app-layout>