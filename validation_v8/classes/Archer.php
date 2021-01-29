<?php

class Archer extends Character
{

    public $badAllow = false;
    protected $quiver = 5;

    public function __construct($name) {
        parent::__construct($name);
        $this->dagueDamage = 5;
        $this->dbArrow = 20;
        $this->damage = 5;
    }

    public function turn($target) {
        $rand = rand(1, 10);
        if ($this->quiver == 0) {
            return $this->attack($target);
        } else if ($rand >= 3) {
            return $this->shot($target);
        } else if ($rand <= 2 || $this->badAllow) {
             $this->DoubleShot($target);
        }
}


    public function DoubleShot() {
        $this->badAllow = true;
        $status = "$this->name tire deux flèches !";
        return $status;
      }

    public function shot($target) {
    
        if ($this->badAllow){
            $target->setHealthPoints($this->dbArrow);
            $this->quiver-= 3;
            $status = "$this->name tire deux flèches à $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
            $this->badAllow = false;
        
      } else {
        $target->setHealthPoints($this->damage);
        $this->quiver-= 2;
        $status = "$this->name tire une flèche à $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        
      }
        return $status;
      }

    public function attack($target) {
        $target->setHealthPoints($this->dagueDamage);
        $status = "$this->name donne un coup de dague à $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
        }
}