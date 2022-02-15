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

?>
