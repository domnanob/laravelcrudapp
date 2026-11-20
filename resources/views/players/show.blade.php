<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Player Details</h1>
    <p><strong>Name:</strong> {{ $player->name }}</p>
    <p><strong>Nationality:</strong> {{ $player->nation }}</p>
    <p><strong>ELO:</strong> {{ $player->elo }}</p>
    <a href="{{ route('players.index') }}">Back to Players</a>

    <h2>Match History</h2>
    @foreach ($player->plays as $play)
        <h2>Match Details: {{ $play->id }}</h2>
        <p><strong>Kill:</strong> {{ $play->kills }}</p>
        <p><strong>Deaths:</strong> {{ $play->deaths }}</p>
        <p><strong>Assists:</strong> {{ $play->assists }}</p>
    
    @endforeach
</body>
</html>