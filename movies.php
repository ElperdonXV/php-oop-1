<?php 
class movie{
    public $title;
    public $genre;
    public $date;
    public $author;
    public $duration;
    public function __construct($title, $date, $author){
        $this->title = $title;
        $this->date = $date;
        $this->author = $author;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getDate(){
        return $this->date;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }
    public function getDuration(){
        return $this->duration;
    }
}


$firstmovie = new movie ('Spider-Man: No Way Home', '15/12/2022' ,'Jon Watts');
$firstmovie->setGenre('azione, avventura, fantascienza');
$firstmovie->setDuration(148);
//var_dump($firstmovie);

$secondmovie = new movie ('Lo Hobbit - La battaglia delle cinque armate', '17-12-2014', 'Peter Jackson');
$secondmovie->setGenre('epico, fantastico, avventura');
$secondmovie->setDuration(144);
//var_dump($secondmovie);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <div class="container">
        <div class="film">
            <h2>Title: <?= $firstmovie->getTitle() ?></h2>
            <ul>
                <li>Genre: <?= $firstmovie->getGenre() ?></li>
                <li>Date: <?= $firstmovie->getDate() ?></li>
                <li>Author: <?= $firstmovie->getAuthor() ?></li>
                <li>Duration: <?= $firstmovie->getDuration() ?></li>
            </ul>
        </div>
        <div class="film">
            <h2>Title: <?= $secondmovie->getTitle() ?></h2>
            <ul>
                <li>Genre: <?= $secondmovie->getGenre() ?></li>
                <li>Date: <?= $secondmovie->getDate() ?></li>
                <li>Author: <?= $secondmovie->getAuthor() ?></li>
                <li>Duration: <?= $secondmovie->getDuration() ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
