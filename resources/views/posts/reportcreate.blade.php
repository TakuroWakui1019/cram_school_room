<!DOCTYPE HTML>
<x-app-layout>
    <x-slot name="header">
        　授業報告
    </x-slot>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>生徒名</h2>
                <input type="text" name="post[student]" />
                <h2>授業日時</h2>
                <input type="text" name="post[date]]" />
            </div>
            <div class="body">
                <h2>教科</h2>
                <input type="text" name="post[subject]]" />
                <h2>回収物</h2>
                <input type="text" name="post[submission]]" placeholder="なし"/>
                <h2>出欠席、遅刻</h2>
                <input type="text" name="post[attendance]]" placeholder="出席"/>
                <h2>理由</h2>
                <input type="text" name="post[attendance_reason]]" />
                <h2>本文</h2>
                <textarea name="post[body]" ></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</x-app-layout>
</html>