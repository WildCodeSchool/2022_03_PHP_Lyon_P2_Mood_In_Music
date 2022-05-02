<?php

namespace App\Model;

class VoteManager extends AbstractManager
{
    public const TABLE = 'music';

    public function incrementVote(array $voteMusic): bool
    {
        $query = 'UPDATE ' . self::TABLE . ' SET `number_vote` = :number_vote +1 WHERE `id`=:id';
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $voteMusic['id'], \PDO::PARAM_INT);
        $statement->bindValue('number_vote', $voteMusic['number_vote'], \PDO::PARAM_INT);
        return $statement->execute();
    }
}
