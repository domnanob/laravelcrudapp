<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Player</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="nation">Nationality:</label>
        <input type="text" name="nation" id="nation" required>
        <br>
        <label for="elo">ELO:</label>
        <input type="number" name="elo" id="elo" required>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('players.index') }}">Back to Players</a>
</body>
</html>