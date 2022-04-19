<?php

namespace App\Controller;

use App\Model\MusicManager;

class MusicController extends AbstractController
{
    /**
     * List musics
     */
    public function showListAll()
    {
        $musicManager = new MusicManager();
        $musics = $musicManager->selectAllList();

        return $this->twig->render('Music/listAll.html.twig', ['musics' => $musics]);
    }
}
