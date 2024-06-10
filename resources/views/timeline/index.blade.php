<x-app-layout>
 <div>
  こんにちは！{{ $user->name }}さん！
 </div>
 
 <div>
  タイムライン一覧
  @foreach($timelines as $timeline)
   <div>ユーザー名:{{ $timeline->user->name }}</div>
   <div>title:{{ $timeline->title }}</div>
   <div>body:{{ $timeline->body }}</div>
   <div>投稿日:{{ $timeline->updated_at }}</div>
  @endforeach
 </div>
 
</x-app-layout>