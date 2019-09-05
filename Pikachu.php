<?php

//ポケモンを読み込む
require_once('Pokemon.php');

//ポケモンクラスを継承したピカチュウの作成

class Pikachu extends Pokemon
{
    //オーバーライド
    //親クラス（ポケモン）が持つメソッドの上書き
    public function cry()
    {
        echo'ピッカチュー';
        echo'<br>';
    }

     public function attack()
     {
         $this->thunderVolt();
     }

    private function thunderVolt()
    { 
        echo'サンダーボルト発動';
        echo'ビリビリ';
        echo'<br>';

    }
}

class Metamon2 extends Pokemon
{
    public function cry()
    {
        echo'メタメタ';
    }
}