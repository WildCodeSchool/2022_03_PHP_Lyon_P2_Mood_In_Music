<?php

namespace App\Controller;

use App\Model\VoteManager;
use DateTime;

class VoteController extends AbstractController
{
    public function addVote(int $id)
    {
        $voteManager = new VoteManager();
        $voteMusic = $voteManager->selectOneById($id);
        $voteManager->incrementVote($voteMusic);
        setcookie('hasVoted', 'true', (time() + 60), '/');
        header("Location: /");
        return null;
    }
}
