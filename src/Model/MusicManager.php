<?php

namespace App\Model;

class MusicManager extends AbstractManager
{
    public const TABLE = 'music';
    public const JOINED_TABLE = 'musical_genre';

    /**
     * Get all informations for musics from database.
     */
    public function selectAllList()
    {
        $query = 'SELECT music.id, music.title, music.author, music.source, genre.genre_name 
        FROM music
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id
        ORDER BY music.title ASC;';

        return $this->pdo->query($query)->fetchAll();
    }

    public function selectAllItems()
    {
        $query = "SELECT music.id, music.title, music.author, music.source,
        music.music_image, music.musical_genre_id, genre.genre_name
            FROM music INNER JOIN musical_genre as genre
            ON music.musical_genre_id = genre.id;";

        return $this->pdo->query($query)->fetchAll();
    }

    public function selectAllGenre()
    {
        $query = "SELECT * FROM musical_genre;";

        return $this->pdo->query($query)->fetchAll();
    }

    public function selectOneById(int $id): array|false
    {
        // prepared request
        $statement = $this->pdo->prepare("SELECT music.id, music.title, music.author,
        music.source, music.music_image, genre.genre_name 
        FROM music
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id 
        WHERE music.id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    /**
     * Insert new item in database
     */
    public function insert(array $music): int
    {
        $query = "INSERT INTO " . self::TABLE . " (`title`,`author`,`source`,`musical_genre_id`, `music_image`) 
        VALUES (:title, :author, :source, :musical_genre_id, :music_image)";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('title', $music['title'], \PDO::PARAM_STR);
        $statement->bindValue('author', $music['author'], \PDO::PARAM_STR);
        $statement->bindValue('source', $music['source'], \PDO::PARAM_STR);
        $statement->bindValue('musical_genre_id', $music['musical_genre_id'], \PDO::PARAM_STR);
        $statement->bindValue('music_image', $music['music_image'], \PDO::PARAM_STR);
        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }

    /**
     * Update item in database
     */
    public function update(array $music): bool
    {
        $query = "UPDATE " . self::TABLE .
        " SET `title` = :title, `author` = :author, `source` = :source,
        `musical_genre_id` = :musical_genre_id, `music_image` = :music_image WHERE `id`=:id";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $music['id'], \PDO::PARAM_INT);
        $statement->bindValue('title', $music['title'], \PDO::PARAM_STR);
        $statement->bindValue('author', $music['author'], \PDO::PARAM_STR);
        $statement->bindValue('source', $music['source'], \PDO::PARAM_STR);
        $statement->bindValue('musical_genre_id', $music['musical_genre_id'], \PDO::PARAM_STR);
        $statement->bindValue('music_image', $music['music_image'], \PDO::PARAM_STR);
        return $statement->execute();
    }
}
