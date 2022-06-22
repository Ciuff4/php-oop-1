<?php
class Movie{
    public $title;
    public $genre;
    private $author;
    public $actors;
    
    public function __construct($_title , $_genre, $_author){
        $this->title = $_title ;
        $this->genre= $_genre;
        $this->author= $_author;
    }
    public function getName(){
        return $this->author;
    }
    
}
?>