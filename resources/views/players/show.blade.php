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
    <h1>Match History</h1>
    <p><strong>Kills</strong> {{  }}</p>
    <p><strong>Deaths</strong> {{  }}</p>
    <p><strong>Assists</strong> {{  }}</p>
</body>
</html>