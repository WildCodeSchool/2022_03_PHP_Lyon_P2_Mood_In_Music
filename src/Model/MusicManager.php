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
        $query = 'SELECT music.id, music.title, music.author, music.source, genre.genre_name 
        FROM music
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id
        ORDER BY music.title ASC;';

        return $this->pdo->query($query)->fetchAll();
    }

    public const JOINED_TABLE = 'musical_genre';
    /**
     * Insert new item in database
     */
    public function insert(array $music): int
    {
        $query = "INSERT INTO " . self::TABLE . " (`title`,`author`,`source`,`musical_genre_id`) 
        VALUES (:title, :author, :source, :musical_genre_id)";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('title', $music['title'], \PDO::PARAM_STR);
        $statement->bindValue('author', $music['author'], \PDO::PARAM_STR);
        $statement->bindValue('source', $music['source'], \PDO::PARAM_STR);
        $statement->bindValue('musical_genre_id', $music['musical_genre_id'], \PDO::PARAM_STR);
        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }

    /**
     * Update item in database
     */
    public function update(array $music): bool
    {
        $query = "UPDATE " . self::TABLE .
        " SET `title` = :title, `author` = :author, `source` = :source WHERE `id`=:id";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $music['id'], \PDO::PARAM_INT);
        $statement->bindValue('title', $music['title'], \PDO::PARAM_STR);
        $statement->bindValue('author', $music['author'], \PDO::PARAM_STR);
        $statement->bindValue('source', $music['source'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    /**
     * Get one row from database by ID.
     */
    public function selectOneById(int $id): array|false
    {
        // prepared request

        $query = 'SELECT music.id, music.title, music.author, music.source, music.music_image,genre.genre_name 
        FROM music
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id
        WHERE music.id = :id;
        ORDER BY music.title ASC;';
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }
}
