<x-app-layout>
    <x-slot name="title">授業報告一覧</x-slot>
    
    <x-slot name="header">
        　授業報告一覧
    </x-slot>

    @foreach ($reports as $report)
        <div>
          <p>担当講師 {{ $report->user->name }}</p>
          <p>生徒名 {{ $report->student->name }}</p>
          <p>学年 {{ $report->student->grade }}</p>
          <p>日にち {{ $report->date }}</p>
          <p>教科 {{ $report->subject }}</p>
          <p>提出物 {{ $report->submission }}</p>
          <p>出欠 {{ $report->attendance }}</p>
          <p>欠席理由 {{ $report->attendance_reason }}</p>
          <p>備考 {{ $report->body }}</p>
        </div>
        <hr>
    @endforeach
</x-app-layout>