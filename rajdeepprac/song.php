<?php
/**
 * Class Song represents a music track.
 */
class Song {
    private $title; // The title of the song
    private $artist; // The artist or band name
    private $genre; // The musical genre (e.g., pop, rock, jazz)
    private $tempo; // The tempo of the song in beats per minute (BPM)

    /**
     * Constructor to initialize the Song object.
     *
     * @param string $title The title of the song
     * @param string $artist The artist or band name
     * @param string $genre The musical genre
     * @param int $tempo The tempo of the song (BPM)
     */
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    /**
     * Get the title of the song.
     *
     * @return string The song title
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title The new song title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get the artist or band name.
     *
     * @return string The artist or band name
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Set the artist or band name.
     *
     * @param string $artist The new artist or band name
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Get the musical genre.
     *
     * @return string The musical genre
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Set the musical genre.
     *
     * @param string $genre The new musical genre
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song (BPM).
     *
     * @return int The tempo in beats per minute
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song (BPM).
     *
     * @param int $tempo The new tempo value
     */
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
?>
