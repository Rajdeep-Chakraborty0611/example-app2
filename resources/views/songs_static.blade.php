<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Playlist</title>
    <!-- Add your CSS stylesheet link here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>My Playlists</h2>
        <ul>
            <li><a href="#">Playlist 1</a></li>
            <li><a href="#">Playlist 2</a></li>
            <!-- Add more playlists as needed -->
        </ul>
    </aside>

    <!-- Header -->
    <header class="header">
        <h1>Now Playing: Playlist Name</h1>
        <div class="header-buttons">
            <button>Edit Playlist</button>
            <button>New Playlist</button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Song Title</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <!-- Song rows will be dynamically generated -->
                <tr>
                    <td>1</td>
                    <td>Song 1</td>
                    <td>Artist A</td>
                    <td>Album X</td>
                    <td>3:30</td>
                </tr>
                <!-- Add more song rows as needed -->
            </tbody>
        </table>

        <!-- Playlist Form -->
        <form class="playlist-form">
            <label for="playlist-name">Playlist Name:</label>
            <input type="text" id="playlist-name" placeholder="Enter playlist name">
            <label for="song-dropdown">Select Song:</label>
            <select id="song-dropdown">
                <option value="song1">Song 1</option>
                <option value="song2">Song 2</option>
                <!-- Add more song options -->
            </select>
            <button type="submit">Save</button>
        </form>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2023 My Music App. All rights reserved.</p>
        <p><a href="#">About</a> | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
