<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<x-app-layout>
    <x-slot name="header">
        スケジュール一覧
    </x-slot>
    
    @foreach ($schedules as $schedule)
        <div class='mx-auto py-6 px-4 sm:px-6 lg:px-8'>
            <div class='bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 max-w-sm p-6'>
                    <h2 class='text-2xl font-bold mb-3'>
                        <a href="/schedules/{{$schedule->id}}">{{ $schedule->content }}</a>
                    </h2>
                    <p class='text-sm mb-3'>
                        <a href="/schedules/{{$schedule->id}}">{{ $schedule->start_date_time}}</a>
                    </p>
                    <p class='text-sm mb-3'>
                        <a href="/schedules/{{$schedule->id}}">{{ $schedule->end_date_time}}</a>
                    </p>
                    <p class="text-sm mb-3">
                    @if(isset($schedule->mind))
                    {{ $schedule->mind->name }}
                    @endif
                    </p>
                    <form action="/schedules/{{ $schedule->id }}" id="form_{{ $schedule->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class='button'>
                    <button class="bg-blue-400 text-black rounded hover:bg-blue-500" onclick="deleteSchedule({{ $schedule->id }})">delete</button>
                    </div>
                    </form>
            </div>
        </div>
     @endforeach
    <div class="button">
    <button class="sm:px-6 lg:px-8 bg-blue-400 text-black rounded hover:bg-blue-500">
    <a href='/schedules/create'>作成</a>
    </button>
    <p>{{ Auth::user()->name }}</p>
    </div>
    </x-app-layout>

    <script>
            function deleteSchedule(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
    </script>
     
</body>
</html>