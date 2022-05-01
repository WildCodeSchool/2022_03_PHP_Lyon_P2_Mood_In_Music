<?php

namespace App\Controller;

use App\Model\VoteManager;

class VoteController extends AbstractController
{
    public function showVote(): string
    {
        $voteManager = new VoteManager();
        $votes = $voteManager->selectVoteById();

        return $this->twig->render('Music/showVote.html.twig', ['votes' => $votes]);
    }
}
