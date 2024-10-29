<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予定登録</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<x-app-layout>
    <x-slot name="header">
        予定登録
    </x-slot>
    <form action="/schedules" method="POST">
        @csrf
        <div class="content">
            <h2>予定</h2>
            <input type="text" name="schedule[content]" placeholder="予定内容" value="{{ old('scheule.content')}}"/>
            <p class="content" style="color:red">{{ $errors->first('schedule.content') }}</p>

        </div>
        
    <form method="get" action="input_datetime_local.html">
        @csrf
        <div class="start_date_time">
            <h3>開始日時</h3>
            <p><input type="datetime-local" name="schedule[start_date_time]" required></p>
        </div>
     

        <div class="end_date_time">
            <h3>終了日時</h3>
            <p><input type="datetime-local" name="schedule[end_date_time]" required></p>
        </div>

        <input type="submit" value="store"/>

    </form>    


    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>
</body>
</html>