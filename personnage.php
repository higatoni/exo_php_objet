<?php
    class personnage {
        // Attributs
        private $_nom;
        private $_pv=100;
        private $_arme;

        // getters $ setters
        public function __construct($_nom,$_arme) {
            $this->setNom($_nom);
            $this->setArme($_arme);
        }
        public function getNom(){
            return $this->_nom;
        }
        public function setNom($Nom){
            $this->_nom=$Nom;
            return $this;
        }
        public function getPv(){
            return $this->_pv;
        }
        public function setPv($pv){
            $this->_pv=$pv;
            return $this;
        }
        public function getArme(){
            return $this->_arme;
        }
        public function setArme($Arme){
            $this->_arme=$Arme;
            return $this;
        }

        //méthodes
        
        public function changerArme($arme){
            $this->_arme=$arme;
        }
        public function attaquer($cible){
            $arme=$this->getArme();
            if ($arme =="épée"){
                $degats=20;
            } elseif ($arme=="dague"){
                $degats=10;
            }
            $cible->setPv($cible->getPV()-$degats); 
            echo $this->getNom()." attaque <br>";
        }
        
        public function isAlive(){
            if ($this->getPv()<=0) {
                return $this->getNom()." est mort.";
            }
        }
        public function infos() {
            return "Mon nom est ".$this->getNom().", j'ai ".$this->getPv()."PV et mon arme est une ".$this->getArme()."<br>".$this->isAlive()."<br>";
        }
    }


?>