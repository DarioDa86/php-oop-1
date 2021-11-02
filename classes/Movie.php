<?php

class Movie{
    private $titolo;
    private $regista;
    private $genere;
    private $durata;
    private $lingua;
    public function __construct($_titolo, $_regista, $_genere, $_durata, $_lingua)
    {
        $this->titolo=$_titolo;
        $this->regista=$_regista;
        $this->genere=$_genere;
        $this->durata=$_durata;
        $this->lingua=$_lingua;
    }

    public function getTitolo(){
        // if($this->durata > 100){
            return $this->titolo;
    }
    public function getRegista(){
        // if($this->durata > 100){
            return $this->regista;
    }    
    public function getGenere(){
        // if($this->durata > 100){
            return $this->genere;
    }    
    public function getDurata(){
        // if($this->durata > 100){
            return $this->durata;
    }
    public function getLingua(){
        // if($this->durata > 100){
            return $this->lingua;
    }

}

// 