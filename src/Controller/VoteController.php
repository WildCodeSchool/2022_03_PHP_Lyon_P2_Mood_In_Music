<?php

namespace App\Controller;

use App\Model\VoteManager;

class VoteController extends AbstractController
{
    public function showVote()
    {
        $voteManager = new VoteManager();
        $votes = $voteManager->selectVote();

        return $this->twig->render('Music/showVote.html.twig', ['votes' => $votes]);
    }
}
