<?php
    abstract class Car{
        public function setHp($hp){
            $this->hp = $hp;
        }
        public function setFuel($fuel){
            $this->fuel = $fuel;
        }
        public function shoot($enemy){
            $enemy->setHp($enemy->hp - 10);
        }
        abstract public function useSkill();
    }

    interface iRocketStorm{
        const rocketCount = 8;
        const rocketDamage = 20;
        public function launchRockets();
    }

    interface iDrones{
        const droneCount = 2;
        const droneDamage = 10;
        const droneDuration = 30;
        const droneHp = 50;
        public function launchDrones();
    }

    interface iShield{
        const shieldHealth = 300;
        public function activateShield();
    }

    class Raptor extends Car implements iRocketStorm{

        public function __construct($player)
        {
            $this->player = $player;
            $this->hp = 300;
            $this->fuel = 100;
        }

        public function launchRockets(){
                
        }

        public function useSkill(){
            $this->launchRockets();
        }
        
    }

    class Nest extends Car implements iDrones{

        public function __construct($player)
        {
            $this->player = $player;
            $this->hp = 350;
            $this->fuel = 80;
        }

        public function launchDrones(){
            
        }

        public function useSkill(){
            $this->launchDrones();
        }
        
    }

    class Mastodon extends Car implements iShield{

        public function __construct($player)
        {
            $this->player = $player;
            $this->hp = 500;
            $this->fuel = 150;
        }

        public function activateShield(){
            
        }

        public function useSkill(){
            $this->activateShield();
        }
        
    }
?>
