<?php

//ポケモンを読み込む
require_once('Pokemon.php');

//ポケモンクラスを継承したピカチュウの作成

class Metamon extends Pokemon
{
    //オーバーライド
    //親クラス（ポケモン）が持つメソッドの上書き
    public function cry1()
    {
        echo'メタメタァ～～';
        echo'<br>';
    }
    public function cry2()
    {
        echo'メがぁぁ';
        echo'<br>';
    }
    public function cry3()
    {
        echo'ミャンミンミ';
        echo'<br>';
    }
}