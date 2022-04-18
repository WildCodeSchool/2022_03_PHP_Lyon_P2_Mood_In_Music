<?php

namespace App\Model;

class MusicManager extends AbstractManager
{
    public const TABLE = 'music';

    public function musicByGenre()
    {
        $query = 'SELECT music.title, music.author, music.source, genre.genre_name 
        FROM music 
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id 
        ORDER BY genre.genre_name';

        return $this->pdo->query($query)->fetchAll();
    }
}