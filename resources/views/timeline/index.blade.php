<x-app-layout>
 
 <div class="title py-4">
  <h1>
   <strong>ホーム</strong>
  </h1> 
 </div>
    
 <div class="py-4">
  <strong>こんにちは！{{ $user->name }}さん！</strong>
 </div>
 
 <div class="py-4">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <div class="py-1">
  <div class="hover-text">
   <a href="/report/create"> ・授業報告をする</a>
  </div>
 </div>
 <div class="py-1">
  <div class="hover-text">
   <a href="/report/index"> ・授業報告を見る</a>
  </div>
 </div>
 <div class="py-1">
  <div class="hover-text">
   <a href="/chat/index"> ・チャット</a>
  </div>
 </div>
 <div class="py-1">
  <div class="hover-text">
   <a href="/timeline/create"> ・タイムラインに投稿する</a>
  </div>
 </div>
 <div class="py-1">
  <div class="hover-text">
   @if(Auth::check() && Auth::user()->status == 1)
    <a href="/student/create"> ・生徒を登録する</a>
    @endif
   </div>
  </div>
 </div>
 </div>
 
 <form method="POST" action="{{ route('logout') }}">
  @csrf
   <a href="route('logout')"
     onclick="event.preventDefault();
     this.closest('form').submit();">
     <div class="hover-text ">
      {{ __('ログアウト') }}
     </div> 
   </a>
  </form>
 
 <div class="title py-4">
  <h1>
   <strong>タイムライン</strong>
  </h1> 
 </div>
 @foreach($timelines as $timeline)
 <div class="py-4">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
     <div class="p-6 back-sky02 border-b border-gray-200">
         <strong>{{ $timeline->title }}</strong>
         <div>{{ $timeline->body }}</div>
         <small>投稿者:{{ $timeline->user->name }}</small>
         <small>　投稿日:{{ $timeline->updated_at }}</small>
     </div>
    </div>
   </div>
  </div>
 @endforeach
 
</x-app-layout>