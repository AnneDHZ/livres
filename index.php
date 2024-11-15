<?php



// require "livres.php";
// require "auteur.php";
// *les require permettent de lier les fichiers, le chargement auto php permet de le faire plus simplement
// *il faut lier le dossier avant la classe si on a créer un dossier classe

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// * auteurs
$auteur1 = new Auteur("AUSTEN", "Jane", "1775");
$auteur2 = new Auteur("HUGO", "Victor", "1802");

// *livres
$livre1 = new Livre("Orgueil et Préjugés", "512", 1813, 7.95, $auteur1);
$livre2 = new Livre("Emma", "576", 1815, 22.95, $auteur1);
$livre3 = new Livre("Les misérables", "576", "1862", 16.95, $auteur2);
$livre4 = new Livre("Claude Gueux", "576", "1834", 32.95, $auteur2);

// var_dump($livre2);

// echo $livre1->getDateParution() ."<br>";
// echo $auteur1->getDateNaissance()->format("Y")."<br>";
// echo$livre1->getInfos()."<br>";

// var_dump($auteur1);

echo $auteur1->afficherBibliographie();