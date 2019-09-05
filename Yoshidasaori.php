<?php

require_once('Homosapiense.php');


class Yoshidasaori extends Homosapiense
{
    public function attack()
    {
        echo'霊長類最強のタックル';
        echo'<br>';
        echo'大地が揺れた';
        echo'<br>';
        echo'とある地域の生き物達が何かを恐れるかのように確かにその存在を感じ取った';
        echo'<br>';
        
        

    } 
    public function fire()
    {
        echo'武器は力に代わりお金になった';
        echo'<br>';
        echo'最強の肉体に加え財力を手に入れた。ステータスは';
        echo $this->status += 20000;
        

    }

}