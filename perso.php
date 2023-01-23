<?php
    
    class perso {
        // Attributs
        private $_nom;
        private $_pv=100;
        private $_arme;
        private $_lvl=1;
        
        // getters $ setters
        public function __construct($_nom) {
            $this->setNom($_nom);
            $this->setArme(new Arme("mains nues",1));
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

        public function getLvl(){
            return $this->_lvl;
        }

        public function setLvl($Lvl){
            $this->_lvl=$Lvl;
            return $this;
        }
        
       
        //méthodes
        
        public function attaquer($cible){
            $arme=$this->getArme();
            $degat=$arme->getDegat();
            $cible->setPv($cible->getPV()-$degat); 
            echo $this->getNom()." attaque <br>";
        }
        
        public function Potion(){
            $this->setPv($this->getPv()+50);
            return $this;
        }

        public function isAlive(){
            if ($this->getPv()<=0) {
                return $this->getNom()." est mort.";
            }
        }

        public function changerArme($arme){
            $this->_arme=$arme;
        }

        public function infos() {
            return "Mon nom est ".$this->getNom().", j'ai ".$this->getPv()."PV et mon arme est une ".$this->getArme()->getNom()."<br>".$this->isAlive()."<br>";
        }
    }

    class magicien extends perso{

        private $_lvlcompetence=1;
        private $_mana=100;


        public function getLvlCompetence(){
            return $this->_lvlcompetence;
        }

        public function setLvlCompetence($Lvlcompetence){
            $this->_lvlcompetence=$Lvlcompetence;
            return $this;
        }

        public function getMana(){
            return $this->_mana;
        }

        public function setMana($Mana){
            $this->_mana=$Mana;
            return $this;
        }
        
        public function __construct($nom) {
            $this->setNom($nom);
            $this->setArme(new Arme("baton",5));
        }

        public function AvadaKedavra($cible){
        $cible->setPv($cible->getPV()-$cible->getPV());
        echo $cible->getNom()." est mort <br>";
        }
    }

    class guerrier extends perso{
        private $surCheval;

        public function __construct($nom) {
            $this->setNom($nom);
            $this->setArme(new Arme("épée longue",35));
            $this->surCheval = false;
        }

        public function coupFatal($cible){
            $arme=$this->getArme();
            $degat=$arme->getDegat();
            $cible->setPv($cible->getPV()-$degat);
        }

        
        public function monterCheval() {
            $this->surCheval = true;
        }

        public function descendreCheval() {
            $this->surCheval = false;
        }

        public function estSurCheval() {
            return $this->surCheval;
        }

        public function verifCheval(){
            if($this->surCheval == true){
                echo $this->getNom()." est sur son cheval. <br>";
            } else {
                echo$this->getNom()." n'est plus sur son cheval. <br>";
            }
        }
    }


?>