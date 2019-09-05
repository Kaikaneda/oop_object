<?php

require_once('Homosapiense.php');


class Onepancheman extends Homosapiense
{
    public function attack()
    {
        echo'普通のパンチ';
        echo'<br>';
        echo'敵をワンパンで倒した';
        echo'<br>';
        echo'心の喜び0';
        echo'<br>';
        echo'<br>';
        echo'<br>';

    
    }
    public function sleep()
    {
        echo'夢をみた';
        echo'<br>';
        echo'その中で強靱な敵と出会った';
        echo'<br>';
        echo'高揚感を感じた';
        echo'<br>';

        echo'心の喜び10000';

        
    }

}