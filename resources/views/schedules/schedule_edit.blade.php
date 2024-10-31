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
        編集
    </x-slot>
    <div class='mx-auto py-6 px-4 sm:px-6 lg:px-8'>
    <form action="/schedules/{{ $schedule->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="text-lg mb-3">
            <h2>予定</h2>
            <input type="text" name="schedule[content]" value="{{$schedule->content}}" placeholder="予定内容"/>
            <p class="content" style="color:red">{{ $errors->first('schedule.content') }}</p>
        </div>
        
      <div class="text-lg mb-3">
            <h3>開始日時</h3>
            <p><input type="datetime-local" name="schedule[start_date_time]" value="{{$schedule->start_date_time}}"required></p>
        </div>
        
        <div class="text-lg mb-3">
            <h3>終了日時</h3>
            <p><input type="datetime-local" name="schedule[end_date_time]" value="{{$schedule->end_date_time}}" required></p>
        </div>

        <div class="text-lg mb-3">
            <h2>今日はどんな気持ち？</h2>
            <select name="schedule[mind_id]">
            @foreach($minds as $mind)
                    <option value="{{ $mind->id }}">{{ $mind->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="text-lg mb-3">
            <h2>日記</h2>
            <input type="text" name="schedule[diary]" value="{{ $schedule->diary }}" placeholder="今日の出来事を教えてください"/>
        </div>

        <div class="text-lg mb-3">
        <input type="submit" value="保存"/>
        </div>
    </form>    
    <div class="footer">
        <div class="text-lg mb-3">
            <a href="/">戻る</a>
        </div>
    </div>
    </div>
</x-app-layout>
</body>
</html>