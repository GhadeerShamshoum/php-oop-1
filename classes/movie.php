<?php

class Movie {
    private $title;
    private $genre;
    private $year;
    private $fontSize;

    public function __construct($_title, $_genre){
        $this->title = $_title;
        $this->genre = $_genre;
      
    }
    public function getInfo(){
        return "{$this->title} {$this->genre} {$this->year}";
    }

    public function getReleaseDate(){
        return $this->year;
    }

    public function setReleaseDate($_year){
        $this->year = $_year;
    }

    public function getFontSize(){
        return $this->fontSize;
    }

    public function setFontSize($_fontSize){
        $this->fontSize = $_fontSize;
    }

    
}

