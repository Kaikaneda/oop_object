<?php

//ピカチュウの読み込み
require_once('Pikachu.php');

$pikachu = new Pikachu(100,50,'ピカチュウ');
$pikachu->cry();

echo 'ピカチュウの体力は';
echo $pikachu->hp;

var_dump(12);

require_once('Meteamon.php');
require_once('Satoshi.php');

var_dump(15);

$metamon = new Metamon(120,150,'メタモン');
$metamon->cry1();
$metamon->cry2();
$metamon->cry3();

echo 'メタモンの体力は';
echo $metamon->hp;


$pikachu->attack();

//サトシの作成
$satoshi = new Satoshi();

var_dump($satoshi->box);

//サトシがピカチュウをゲット
$satoshi->getPokemon($pikachu);


//メタモンの誕生
$metamon = NEW Metamon(40,40,'メタモン');

//サトシがメタモンをゲット
$satoshi->getPokemon($metamon);

echo'<br>';
var_dump($satoshi->box);
echo'<br>';
echo'<br>';
echo'<br>';

//持っているポケモンの確認
$satoshi->showPokemons();

//ポケモンに攻撃を指示
$satoshi->orderAttack(0);

require_once('Yoshidasaori.php');
require_once('Saitama.php');

$yoshidasaori = NEW Yoshidasaori(1000,88,1982);
$yoshidasaori->attack();
$yoshidasaori->fire();

$saitama= NEW Onepancheman(9999999,82,1994);
$saitama->attack();
$saitama->sleep();


