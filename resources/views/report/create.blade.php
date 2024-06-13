<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            授業報告
        </h2>
    </x-slot>
    
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/report/store" method="POST">
                    @csrf
            
                    <div>
                        <label for="user">担当講師：{{ Auth::user()->name }}</label>
                        <input type="hidden" name="report[user_id]" value="{{ Auth::id() }}">
                    </div>
            
                    <div class="py-4">
                        <label for="student_id">生徒名</label>
                        <select name="report[student_id]" id="student_id">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endforeach
                        </select>
                        
                        <label for="date">　　日付</label>
                        <input type="date" name="report[date]" id="date" placeholder="日付"/>
                    </div>
            
                    <div class="py-4">
                        <label for="subject">科目</label>
                        <input type="text" name="report[subject]" id="subject" placeholder="科目" maxlength="10"/>
                    
                        <label for="submission">　　提出物</label>
                        <input type="text" name="report[submission]" id="submission" placeholder="提出物" maxlength="20"/>
                    </div>
        
                    <div class="py-4">
                        <label for="attendance">出欠</label>
                        <input type="text" name="report[attendance]" id="attendance" placeholder="出欠" maxlength="2"/>
                    
                        <label for="attendance_reason">　　欠席理由</label>
                        <input type="text" name="report[attendance_reason]" id="attendance_reason" placeholder="欠席理由" maxlength="20"/>
                    </div>
        
                    <div class="py-4">
                        <label for="body">備考</label>
                        <textarea name="report[body]" rows="5" cols="50" id="body"  placeholder="備考"></textarea>
                    </div>
        
                    <div class="py-4">
                        <button type="submit" class="text-white bg-blue-700 px-5 py-2">作成</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>    
</x-app-layout>