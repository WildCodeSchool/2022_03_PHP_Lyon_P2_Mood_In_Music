<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    
    '' => ['MusicController', 'showListAll'],
    'musics' => ['MusicController', 'showListAll'],
    'admin' => ['MusicController', 'index',],
    'admin/login' => ['UserController', 'login',],
    'admin/logout' => ['UserController', 'logout',],
    'admin/edit' => ['MusicController', 'edit', ['id']],
    'admin/show' => ['MusicController', 'show', ['id']],
    'admin/add' => ['MusicController', 'add',],
    'admin/delete' => ['MusicController', 'delete',],

    'music/player' => ['MusicController', 'player', ['id']],
];
