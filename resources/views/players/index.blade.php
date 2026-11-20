<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Players</h1>
    <p>Welcome to the players index page.</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Nationality</th>
                <th>ELO</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->nation }}</td>
                    <td>{{ $player->elo }}</td>
                    <td>
                        <a href="{{ route('players.show', $player) }}">View</a>
                        <a href="{{ route('players.edit', $player) }}">Edit</a>
                        <form action="{{ route('players.destroy', $player) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <a href="{{ route('players.create') }}">Create Player</a>
        </tbody>
    </table>
</body>
</html>