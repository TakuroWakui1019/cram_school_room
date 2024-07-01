<x-app-layout>
    <x-slot name="title">授業報告一覧</x-slot>
    
    <div class="title py-4">
        <h1>
            <strong>授業報告一覧</strong>
        </h1> 
    </div>

    @foreach ($reports as $report)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p>担当講師： {{ $report->user->name }}</p>
                        <p>生徒名：{{ $report->student->name }}</p>
                        <p>学年： {{ $report->student->grade }}</p>
                        <p>日にち： {{ $report->date }}</p>
                        <p>教科： {{ $report->subject }}</p>
                        <p>提出物： {{ $report->submission }}</p>
                        <p>出欠： {{ $report->attendance }}</p>
                        <p>欠席理由： {{ $report->attendance_reason }}</p>
                        <p>備考： {{ $report->body }}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</x-app-layout>