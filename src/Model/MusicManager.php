<?php

namespace App\Model;

class MusicManager extends AbstractManager
{
    public const TABLE = 'music';

    /**
     * Get all informations for musics from database.
     */
    public function selectAllList()
    {
        $query = 'SELECT music.title, music.author, music.source, genre.genre_name 
        FROM music
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id
        ORDER BY music.title ASC;';

        return $this->pdo->query($query)->fetchAll();
    }
}
