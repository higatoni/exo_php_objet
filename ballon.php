<?php
    class ballon{

        // Attributs

        private $_nom;
        private $_couleur;

        // getters $ setters
        
        public function __construct($_nom, $_couleur) {
            $this->setNom($_nom); 
            $this->setCouleur($_couleur); 
        }
        public function getNom(){
            return $this->_nom;
        }
        public function setNom($Nom){
            $this->_nom=$Nom;
            return $this;
        }
        public function getCouleur(){
            return $this->_couleur;
        }
        public function setCouleur($couleur){
            $this->_couleur=$couleur;
            return $this;
        }

         // Méthodes 
         public function changeCouleur($cible,$couleur){
           $cible->setCouleur($couleur);
           return $this;
         }
         public function getInfos(){
            return "Mon nom est ".$this->getNom()." et ma couleur est ".$this->getCouleur()."<br>";
         }
    }

?>