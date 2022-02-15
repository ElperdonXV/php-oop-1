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
    public function getTitle($title){
        return $this->title;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function getGenre($genre){
        return $this->genre;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getDate($date){
        return $this->date;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function getAuthor($author){
        return $this->author;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }
    public function getDuration($duration){
        return $this->duration;
    }
}


$firstmovie = new movie ('Spider-Man: No Way Home', '15/12/2022' ,'Jon Watts');
$firstmovie->setGenre('azione, avventura, fantascienza');
$firstmovie->setDuration(148);

$secondmovie = new movie ('Lo Hobbit - La battaglia delle cinque armate', '17-12-2014', 'Peter Jackson');
$secondmovie->setGenre('epico, fantastico, avventura');
$secondmovie->setDuration(144);
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
    <div class="container">
        <div class="film"></div>
        <div class="film"></div>
    </div>
</body>
</html>
