<?php

namespace App\Model;

class MusicManager extends AbstractManager
{
    public const TABLE = 'music';

    /*public function selectMusicByGenre(int $id){
        $query = 'SELECT music.title, music.author, music.source, music.genre_id, genre.genre_name 
        FROM music 
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id
        ORDER BY genre.genre_name';

        return $this->pdo->query($query)->fetchAll();*/

    public function musicByGenre()
    {
        $query = 'SELECT music.title, music.author, music.source, genre.genre_name 
        FROM music 
        INNER JOIN musical_genre AS genre ON music.musical_genre_id=genre.id 
        ORDER BY genre.genre_name';

        return $this->pdo->query($query)->fetchAll();
    }
    
    
    
   /* SELECT music.title, genre.genre_name FROM music INNER JOIN musical_genre
AS genre ON music.musical_genre_id=genre.id ORDER BY genre.genre_name;
*/

/*SELECT music.title, genre.genre_name FROM music INNER JOIN musical_genre
AS genre ON music.musical_genre_id=genre.id WHERE genre.genre_name='ambient';


SELECT music.title, genre.genre_name FROM music INNER JOIN musical_genre AS
genre ON music.musical_genre_id=genre.id WHERE music.musical_genre_id=3;*/

}

