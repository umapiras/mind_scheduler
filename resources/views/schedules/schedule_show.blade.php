<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<x-app-layout>
    <x-slot name="header">
        予定詳細
    </x-slot>
   
    <div class='mx-auto py-6 px-4 sm:px-6 lg:px-8'>
        <div class='bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 max-w-sm p-6'>
                <h3 class='text-2xl font-bold mb-3'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->content }}</a>
                </h3>
                <p class='mb-3'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->start_date_time}}</a>
                </p>
                <p class='mb-3'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->end_date_time}}</a>
                </p>
                <p class='mb-3'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->diary }}</a>
                </p>
                <p class='mb-3'> {{ $schedule->mind->name }} </p>
            <div class="edit"><a href="/schedules/{{ $schedule->id }}/edit">編集</a></div>
        </div>
    </div>
</x-app-layout>
</body>
</html>