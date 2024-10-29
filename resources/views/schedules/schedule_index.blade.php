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
            <div class='bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 max-w-sm p-6'>
                <div class='mx-auto py-6 px-4 sm:px-6 lg:px-8'>
                    <h2 class='text-2xl font-bold mb-3'>
                        <a href="/schedules/{{$schedule->id}}">{{ $schedule->content }}</a>
                    </h2>
                    <p class='text-sm mb-3'>
                        <a href="/schedules/{{$schedule->id}}">{{ $schedule->start_date_time}}</a>
                    </p>
                    <p class='text-sm mb-3'>
                        <a href="/schedules/{{$schedule->id}}">{{ $schedule->end_date_time}}</a>
                    </p>
                    <form action="/schedules/{{ $schedule->id }}" id="form_{{ $schedule->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-gray-600 hover:bg-gray-500 text-black rounded-full" onclick="deleteSchedule({{ $schedule->id }})">delete</button>
                    </form>
                </div>
                @if(is_null($schedule))
                <a href="">{{ $schedule->mind->name }}</a>
                @endif
            </div>
     @endforeach
    <a href='/schedules/create'>create</a>
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