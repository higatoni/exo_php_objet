<?php
    class arme{

        //attribut
        private $_nom;
        private $_degat;

         // getters $ setters
         public function __construct($_nom,$_degat) {
            $this->setNom($_nom);
            $this->setDegat($_degat);
        }
        public function getNom(){
            return $this->_nom;
        }
        public function setNom($Nom){
            $this->_nom=$Nom;
            return $this;
        }
        public function getDegat(){
            return $this->_degat;
        }
        public function setDegat($degat){
            $this->_degat=$degat;
            return $this;
        }
    }

?>