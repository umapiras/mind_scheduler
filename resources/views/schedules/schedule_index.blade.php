<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
    <h1>Schedule</h1>
    <a href='/schedules/create'>create</a>
    <div class='schedules'>
        @foreach ($schedules as $schedule)
            <div class='schedule'>
                <h2 class='content'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->content }}</a>
                </h2>
                <p class='start_date_time'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->start_date_time}}</a>
                </p>
                <p class='end_date_time'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->end_date_time}}</a>
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>