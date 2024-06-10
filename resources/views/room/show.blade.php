<x-guest-layout>
    <x-slot name="title">教室詳細</x-slot>
    
    <div>教室詳細</div>
    
   <div>
       教室ID:{{ $room->id }}
   </div>
   
    <div>
       教室名:{{ $room->name }}
   </div>

    <a href="/">戻る</a>
</x-guest-layout>