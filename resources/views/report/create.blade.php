<!DOCTYPE HTML>
<x-app-layout>
    <x-slot name="header">
        　授業報告作成
    </x-slot>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <form action="/posts" method="POST">
            @csrf
            
            <div>
                <label for="user">担当講師</label>
                <input type="hidden" name="report[user_id]" value="{{ Auth::id() }}">
                <p>{{ Auth::id() }}:{{ Auth::user()->name }}</p> <!-- テスト用に現在のユーザーIDを表示 -->
            </div>
            
            <div>
                <label for="student_id">生徒名</label>
                <select name="report[student_id]" id="student_id">
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
        
            <div>
                <label for="date">日付</label>
                <input type="date" name="report[date]" id="date" placeholder="日付"/>
            </div>
            
            <div>
                <label for="subject">科目</label>
                <input type="text" name="report[subject]" id="subject" placeholder="科目" maxlength="10"/>
            </div>
        
            <div>
                <label for="submission">提出物</label>
                <input type="text" name="report[submission]" id="submission" placeholder="提出物" maxlength="20"/>
            </div>
        
            <div>
                <label for="attendance">出欠</label>
                <input type="text" name="report[attendance]" id="attendance" placeholder="出欠" maxlength="2"/>
            </div>
        
            <div>
                <label for="attendance_reason">欠席理由</label>
                <input type="text" name="report[attendance_reason]" id="attendance_reason" placeholder="欠席理由" maxlength="20"/>
            </div>
        
            <div>
                <label for="body">備考</label>
                <textarea name="report[body]" id="body" placeholder="備考"></textarea>
            </div>
        
            <div>
                <input type="submit" value="作成"/>
            </div>
        </form>
        <div>
            <a href="/dashboard">戻る</a>
        </div>
</x-app-layout>
</html>