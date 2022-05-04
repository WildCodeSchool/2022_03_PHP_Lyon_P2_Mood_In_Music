<?php

namespace App\Model;

class VoteManager extends AbstractManager
{
    public const TABLE = 'music';
    public const JOINED_TABLE = 'musical_genre';

    public function selectVoteById($genreId)
    {
        if ($genreId == 6) {
            $query = 'SELECT ' . self::TABLE . '.id, title, author, source, music_image, old_number_vote,'
            . self::JOINED_TABLE . '.genre_name
            FROM ' . self::TABLE . '
            INNER JOIN ' . self::JOINED_TABLE . ' ON ' . self::TABLE . '.musical_genre_id=' . self::JOINED_TABLE . '.id
            ORDER BY old_number_vote DESC
            LIMIT 0,3;';
        } else {
            $query = 'SELECT ' . self::TABLE . '.id, title, author, source, music_image, old_number_vote,'
            . self::JOINED_TABLE . '.genre_name
            FROM ' . self::TABLE . '
            INNER JOIN ' . self::JOINED_TABLE . ' ON ' . self::TABLE . '.musical_genre_id=' . self::JOINED_TABLE . '.id
            WHERE ' . self::TABLE . '.musical_genre_id=' . $genreId . ' 
            ORDER BY old_number_vote DESC
            LIMIT 0,3;';
        }
        return $this->pdo->query($query)->fetchAll();
    }

    public function incrementVote(array $voteMusic): bool
    {
        $query = 'UPDATE ' . self::TABLE . ' SET `number_vote` = :number_vote +1 WHERE `id`=:id';
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $voteMusic['id'], \PDO::PARAM_INT);
        $statement->bindValue('number_vote', $voteMusic['number_vote'], \PDO::PARAM_INT);
        return $statement->execute();
    }
}
