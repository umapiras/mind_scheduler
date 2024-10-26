<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
    <h1>Detail</h1>
    <div class='details'>
                <p class='content'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->content }}</a>
                </p>
                <p class='diary'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->diary }}</a>
                </p>
                <p class='start_date_time'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->start_date_time}}</a>
                </p>
                <p class='end_date_time'>
                    <a href="/schedules/{{$schedule->id}}">{{ $schedule->end_date_time}}</a>
                </p>
    </div>
</body>
</html>