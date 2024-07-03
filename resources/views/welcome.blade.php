<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>塾専用の情報共有アプリ トップページ</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="bg-white max-h-full">
      <header class="back-sky text-gray-800 font-bold font-mono text-3xl">
        <div class="text-center text-base p-2 flex justify-end">
          <ul>
            <div class="hover-text">
            <li class="p-2 text-lg font-bold"><a href="/login">ログイン</a></li>
            </div>
            <div class="hover-text">
            <li class="p-2 text-lg font-bold"><a href="/register">新規登録</a></li>
            </div>
          </ul>
        </div>
      </header>
      <main>
        <div class="text-red font-bold font-mono text-center text-3xl p-4">
          塾専用の情報共有アプリ トップページ
        </div>

      </main>
    </body>
</html>