<?php

class Warrior extends Character
{
    public $boost = false;

    public function turn($target) {
        $rand = rand(1, 10);
        if ($rand <= 2 && !$this->boost) {
            $status = $this->boost();
        } else {
            $status = $this->attack($target);
        }
        return $status;
    }

    public function attack($target) {
        if ($this->boost) {
            $rand = rand(15, 30)/10;
            $rageDamage = $this->damage * $rand;
            $target->setHealthPoints($rageDamage);
            $this->rage = false;
        } else {
            $target->setHealthPoints($this->damage);
        }
        $status = "$this->name donne un coup d'épée à $target->name ! Il reste $target->healthPoints points de vie à $target->name !";
        return $status;
    }

    public function boost() {
        $this->boost = true;
        $status = "$this->name se prépart à donner un gros coup !";
        return $status;
    }
}
