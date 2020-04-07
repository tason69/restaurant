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
        foreach ($donnees as $keys => $value){
            $method ='set' . ucfirst($key);
        }
        if (method_exists($this, $method)){
            $this->$method($value);
        }
    }
    // GETTER
    public function id_recette(){ 
        return $this->_id_recette;
    }
    public function nom_recette(){ 
        return $this->nom_recette;
    }
    public function temps_recette(){ 
        return $this->_temps_recette;
    }
    public function desc_recette(){ 
        return $this->_desc_recette;
    }
    //SETTER
    public function setId_recette($id){
        $id = (int) $id;
        if($id>0){
            $this->_id_recette = $id;
        }
    }
    public function setNom_recette($nom){
        if (is_string($nom)){
            $this->_nom_recette =$nom;
        }
    }
}




?>