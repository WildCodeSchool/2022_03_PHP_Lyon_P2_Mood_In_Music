<?php

namespace App\Controller;

use DateTime;
use DateInterval;
use App\Model\VoteManager;
use App\Controller\AbstractController;
use App\Model\MusicManager;

class VoteController extends AbstractController
{
    /**
     * Displays home page
     */
    public function index(): string
    {
        $voteManager = new VoteManager();
        $dates = $voteManager->selectAllDates();

        return $this->twig->render('Admin/vote.html.twig', ['dates' => $dates]);
    }

    /**
     * Initializes the start_date of votes
     */
    public function launchVote()
    {
        //getting the time of the click
        $startDate = new DateTime('now');
        //calculation of the end_date
        $voteInterval = new DateInterval('P7D');
        $endDate = $startDate->add($voteInterval);
        //changing dates into strings
        $startDate = new DateTime('now');
        $startDate = $startDate->format('Y-m-d H:i:s');
        $endDate = $endDate->format('Y-m-d H:i:s');
        //setting the managers to access DB
        $voteManager = new VoteManager();
        $musicManager = new MusicManager();
        //inserting dates and update votes in DB
        $voteManager->insert($startDate, $endDate);
        $musicManager->movesVotesInDB();

        header("Location: /admin/vote");
    }
}
