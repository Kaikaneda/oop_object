<?php

class Homosapiense
{
    public $status;

    public $lifespan;

    public $year;

    public function __construct($status,$lifespan,$year)
    {
        $this->status=$status;
        $this->lifespan=$lifespan;
        $this->year=$year;

        echo'ステータスは'.$this->status;
        echo'<br>';

        echo'<br>';
        echo'寿命は約'.$this->lifespan;
        echo'<br>';

        echo'誕生した年は'.$this->year.'年';
        echo'<br>';

    }

    public function fire()
    {
        echo'火の扱い方を覚えた';
        echo'<br>';
        echo'今この瞬間人類に敵はいなくなった';
        echo'<br>';



    }
    public function attack()
    {
        echo'石器で刺す';
        echo'<br>';
        echo'食料を手に入れる';
        echo'<br>';
        
    }
    public function sleep()
    {
        echo'危険な夜になった';
        echo'<br>';
        echo'睡眠して体力を回復';
    }





}