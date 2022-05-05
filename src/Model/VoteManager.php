<?php

namespace App\Model;

class VoteManager extends AbstractManager
{
    public const TABLE = 'dates';

    /**
     * Insert new dates into DB
     */
    public function insert(string $startDate, string $endDate)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (start_date, end_date) 
        VALUES ('$startDate', '$endDate')");
        $statement->execute();
    }

     /**
     * Get all dates from database
     */
    public function selectAllDates()
    {
        $query = 'SELECT `start_date`, `end_date` FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 1';
        return $this->pdo->query($query)->fetch();
    }

    /**
     * Get last end_date from database
     */
    public function selectEndDate()
    {
        $query = 'SELECT `end_date` FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 1';
        return $this->pdo->query($query)->fetch();
    }
}
