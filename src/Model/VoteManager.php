<?php

namespace App\Model;

class VoteManager extends AbstractManager
{
    public const TABLE = 'music';
    public const JOINED_TABLE = 'musical_genre';

    public function selectVoteById()
    {
        $query = 'SELECT ' . self::TABLE . '.id, title, author, source, music_image, old_number_vote,'
        . self::JOINED_TABLE . '.genre_name
        FROM ' . self::TABLE . '
        INNER JOIN ' . self::JOINED_TABLE . ' ON ' . self::TABLE . '.musical_genre_id=' . self::JOINED_TABLE . '.id
        ORDER BY old_number_vote DESC
        LIMIT 0,3;';
        return $this->pdo->query($query)->fetchAll();
    }
}
