<?php
require __DIR__ ."/classes/Movie.php";


$film1= new Movie("Il silenzio dei prosciutti", "Ezio Greggio", "comico", 81, "italiano");
$film2= new Movie("Il grande lebowski", "Ethan Coen - Joel Coen", "commedia - Giallo", 117, "italiano");
$film3= new Movie("Bastardi senza gloria", "Quentin Tarantino", "guerra - azione", 153, "italiano");
$film4= new Movie("Mediterraneo", "Gabriele Salvatores", "guerra - azione", 96, "italiano");


// $film1->titolo= "Il silenzio dei prosciutti";
// $film1->regista= "Ezio Greggio";
// $film1->genere= "film1";
// $film1->durata= 120;
// $film1->lingua= "italiano";

// echo "<h2>{$film1->getDurata()}</h2>";

echo "<h2> {$film1->getTitolo()}</h2>";
echo "<h4> {$film1->getRegista()}</h4>";
echo "<h4> {$film1->getGenere()}</h4>";
echo "<h4> {$film1->getDurata()} minuti</h4>";
echo "<h4> {$film1->getLingua()}</h4>";


echo "<h2> {$film2->getTitolo()}</h2>";
echo "<h4> {$film2->getRegista()}</h4>";
echo "<h4> {$film2->getGenere()}</h4>";
echo "<h4> {$film2->getDurata()} minuti</h4>";
echo "<h4> {$film2->getLingua()}</h4>";






