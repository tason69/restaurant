<?php

class Recette {
    private $_id_recette;
    private $_nom_recette;
    private $_temps_recette;
    private $_desc_recette;

    public function _construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
        
    }
}




?>