<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
   (各ブレードファイルの中身)

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title> ログインページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>塾専用の情報共有アプリ</h2>
                <div class="body">
                <h2>ID</h2>
                <textarea name="post[body]"></textarea>
            </div>
            <a href='/posts/reportcreate'>reportcreate</a>
            </div>
        </div>
    </body>
</x-app-layout>
</html>