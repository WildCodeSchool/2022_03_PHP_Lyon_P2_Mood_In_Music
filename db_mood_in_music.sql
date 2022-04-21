
CREATE DATABASE db_mood_in_music;
USE db_mood_in_music;
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_mood_in_music` DEFAULT CHARACTER SET utf8 ;
USE `db_mood_in_music` ;

-- -----------------------------------------------------
-- Table `musical_genre_id`.`musical_genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mood_in_music`.`musical_genre` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `genre_name` VARCHAR(45) NOT NULL,
  `image` BLOB,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `musical_genre_id`.`music`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mood_in_music`.`music` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `author` VARCHAR(80) NOT NULL,
  `source` TEXT NOT NULL,
  `musical_genre_id` INT NULL,
  `number_vote` INT NULL,
  `music_image` BLOB,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_musical_genre_id`
    FOREIGN KEY (musical_genre_id)
    REFERENCES `db_mood_in_music`.`musical_genre` (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `musical_genre_id`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mood_in_music`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


INSERT INTO musical_genre (genre_name) VALUES
('pop'),('cinematic'),('electro'),
('world'),('chillout'),('ambient');

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('Running','Apsley',307027394,1,0),
('Paris La Nuit','A Virtual Friend',101988889,1,0),
('Waiting For Nothing','The Fisherman',185495869,1,0),
('Feel Sorry','A Virtual Friend',549886593,1,0),
('Daybreak feat Henk','Jens East',184041689,1,0);

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('The Epic Hero','Keys Of Moon',394326033,2,0),
('Gaia','Nova Noma',205456569,2,0),
('Beyond The Warriors','Guifrog',23434963,2,0),
('The Return','Alexander Nakarada',308669192,2,0),
('Winters-call','Mattias Westlund',233954398,2,0);

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('Amine Maxwell','Essaouira',1062290803,3,0),
('Scandinavianz','Hiking',1018958728,3,0),
('Markvard','Desire',705438868,3,0),
('Star Swimming','Props',101988889,3,0),
('Wontolla','Laser Pointer',205554396,3,0);

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('Flame and Go','CyberSDF',257129209,4,0),
('Sakuya2','Peritune',239947267,4,0),
('Intención','Sapajou',899729788,4,0),
('Opening Para','Songo 21',302511747,4,0),
('Guazú','Shika Shika',299847363,4,0);

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('Takayama','Niwel',726161599,5,0),
('Naya','HaTom',660919205,5,0),
('Flourish','Purrple Cat',772063282,5,0),
('Light','Idyllic',456939843,5,0),
('Memories','Atch',776397571,5,0);

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('Overlove','John Tasoulas',1004355163,6,0),
('Tai Chi','Valtteri Kujala',110602862,6,0),
('Wild Birth','Under The Gaïac',789639880,6,0),
('Titan','Scott Buckley',457526781,6,0),
('To The Great Beyond','Stellardrone',162416525,6,0);

INSERT INTO user (pseudo, password)
 VALUES
 ('user_test', 'pwd_test'),
 ('user_test2', 'pwd_test2');
 
 UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/307027394&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 1;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/101988889&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 2;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/185495869&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 3;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/549886593&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 4;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184041689&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 5;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/394326033&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 6;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205456569&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 7;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/23434963&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 8;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1243586404&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 9;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/233954398&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 10;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1062290803&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 11;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1018958728&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 12;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/646593702&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 13;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1196175913&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 14;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205554396&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 15;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/257129209&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 16;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/239947267&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 17;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/899729788&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 18;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/309315528&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 19;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/307605364&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 20;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/726161599&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 21;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/660919205&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 22;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/772063282&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 23;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/456939843&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 24;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/776397571&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 25;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1004355163&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 26;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/110602862&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 27;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/789639880&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 28;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/457526781&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 29;
UPDATE music 
SET source = "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/162416525&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
WHERE id = 30;
