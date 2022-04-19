<?php

namespace App\Controller;

use App\Model\MusicManager;

class MusicController extends AbstractController
{
    public function index(): string
    {
        $musicManager = new MusicManager();
        $musics = $musicManager->selectAll('title');

        return $this->twig->render('Admin/index.html.twig', ['musics' => $musics]);
    }

    public function show(int $id): string
    {
        $musicManager = new MusicManager();
        $music = $musicManager->selectOneById($id);

        return $this->twig->render('Admin/show.html.twig', ['music' => $music]);
    }

    public function edit(int $id): ?string
    {
        $musicManager = new MusicManager();
        $music = $musicManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $music = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, update and redirection
            $musicManager->update($music);

            header('Location: /admin/show?id=' . $id);

            // we are redirecting so we don't want any content rendered
            return null;
        }

        $musicManager = new MusicManager();
        $music = $musicManager->selectOneById($id);
        return $this->twig->render('Admin/edit.html.twig', [
            'music' => $music,
        ]);
    }

    public function add(): ?string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $music = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, insert and redirection
            $musicManager = new MusicManager();
            $id = $musicManager->insert($music);

            header('Location:/admin/show?id=' . $id);
            return null;
        }

        return $this->twig->render('Admin/add.html.twig');
    }

    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = trim($_GET['id']);
            $musicManager = new MusicManager();
            $musicManager->delete((int)$id);

            header('Location:/admin');
        }
    }
}
