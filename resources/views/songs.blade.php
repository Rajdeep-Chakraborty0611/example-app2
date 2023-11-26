<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Songs</title>
    <!-- Add your CSS stylesheet link here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Artists</a></li>
            <li><a href="#">Genres</a></li>
            <li><a href="#">Playlists</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <!-- Main content -->
    <main>
        <h1>My Favorite Songs</h1>
        <div class="song-list">
            <!-- Add your song entries here -->
            <div class="song">
                <h2>Title 1</h2>
                <p>Artist: Artist 1</p>
                <p>Genre: Pop</p>
                <p>Tempo: 120 BPM</p>
            </div>
            <div class="song">
                <h2>Title 2</h2>
                <p>Artist: Artist 2</p>
                <p>Genre: Rock</p>
                <p>Tempo: 140 BPM</p>
            </div>
            <!-- Add more songs as needed -->
        </div>
        <table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
@endforeach
</table>
    </main>

    <!-- Add your JavaScript scripts here -->
    <script src="app.js"></script>
</body>
</html>
