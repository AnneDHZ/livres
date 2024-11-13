<?php



class Livre {

    // attributs
    private string $titre;
    private int $nbPages;
    private int $dateParution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbPages, int $dateParution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->dateParution = $dateParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $auteur-> addLivre($this);
       
    }

// *getter setter
    public function getTitre():string
    {
        return $this->titre;
    }
 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPages() :int
    {
        return $this->nbPages;
    }

    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    public function getDateParution() :int
    {
        return $this->dateParution;
    }

    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    public function getPrix() :float
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    // *fonctions 
    public function getInfos(){
        return $this." écrit par ".$this->auteur. " en " .$this->getDateParution(). " contient " .$this->getNbPages(). " et coûte " . $this->getPrix(). " €.";
    }

    // *__toString
    public function __toString(){
        return $this->titre;
    }

}