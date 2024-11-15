<?php

class Auteur {

    // attributs
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private array $livres;

    
public function __construct(string $nom, string $prenom, string $dateNaissance) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = new DateTime($dateNaissance);
    $this->livres = [];
}

// * getter setter
    public function getNom():string
    {
        return $this->nom;
    }
    
    public function setNom($nom) 
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom() :string
    {
        return $this->prenom;
    }
 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance() :Datetime
    {
        return $this->dateNaissance;
    }
    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    
        return $this;
    }

    public function getLivres() :array
    {
        return $this->livres;
    }

    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }

    // * autres fonctions
// *permet d'intégrer un nouveau livre dans le tableau livre
    public function addLivre(Livre $livre){
        $this->livres[] = $livre;
    }

 // *permet d'afficher la bibliographie   
    public function afficherBibliographie() {
        $result = "<h2> Bibliographie de $this </h2><br>";
        
        foreach ($this->livres as $livre){
        $result .= $livre->getInfosBiblio();
        }
        return $result;
    }

    // *__toString
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }


    
}




