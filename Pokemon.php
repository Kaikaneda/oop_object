<?php
//全ポケモンが持つプロパティやメソッドを持った設計図

class Pokemon
{
   public $hp;


   public $pp;

   public $name;


   //コンストラクタ
   public function __construct($hp,$pp,$name)
   {
       $this->hp = $hp;
       $this->pp = $pp;
       $this->name=$name;
       
   }


   //泣くメソッド
   public function cry()
   {
       echo'うぇー～～ーン'; 
       echo'<br>';
   }
   //攻撃するメソッド
   public function attack()
   {
       $this->noAtack();
   }

   private function noAtack()
   {
       echo'技を覚えていません';
       echo '<br>';
   }
}