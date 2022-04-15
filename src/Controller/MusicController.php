<?php

namespace App\Controller;

use App\Model\MusicManager;

class MusicController extends AbstractController
{
    /**
     * List musics
     */
    public function list(): string
    {
        $musicManager = new MusicManager();
        $musics = $musicManager->selectAll('title');

        return $this->twig->render('Music/list.html.twig', ['musics' => $musics]);
    }

     /**
     * Show informations for a specific item
     */
    public function show(int $id): string
    {
        $musicManager = new MusicManager();
        $music = $musicManager->selectOneById($id);

        return $this->twig->render('Music/show.html.twig', ['music' => $music]);
    }

    public function showList()
     {
         $musicManager = new MusicManager();
         $musicals = $musicManager->musicByGenre();

         return $this->twig->render('Music/list.html.twig', ['musicals' => $musicals]);
    }
}