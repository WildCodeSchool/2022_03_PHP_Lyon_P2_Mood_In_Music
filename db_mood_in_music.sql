
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
('A Virtual Friend','Paris la nuit',101988889,3,0),
('Wontolla','Laser Pointer',205554396,3,0);

INSERT INTO music (title,author,source, musical_genre_id,number_vote) VALUES
('CyberSDF','Flame and Go',257129209,4,0),
('Peritune','Sakuya2',239947267,4,0),
('Intención','Sapajou',899729788,4,0),
('Songo 21','Opening Para',302511747,4,0),
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