<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Player</h1>
    <form action="{{ route('players.update', $player) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $player->name }}" required>
        <br>
        <label for="nation">Nationality:</label>
        <input type="text" name="nation" id="nation" value="{{ $player->nation }}" required>
        <br>
        <label for="elo">ELO:</label>
        <input type="number" name="elo" id="elo" value="{{ $player->elo }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('players.index') }}">Back to Players</a>
</body>
</html>