<?php

class Monster{
    private $name;
    private $hp;
    private $army;
    private $magic;

    function __construct($name)
    {
        $this->name = $name;
    }

    function getHp()
    {
        return $this->name . 'の体力は' . $this->hp . 'です' . '<br>';
    }

    function getArmy()
    {
        return $this->army;
    }

    function getMagic()
    {
        return $this->name . 'の魔法力は' . $this->magic . 'です。' . '<br>';
    }

    function getMagic2()
    {
        return $this->name . 'は' . $this->magic2 . '<br>';
    }

    function setHp($hp)
    {
        $this->hp = $hp;
    }

    function setMagic($magic)
    {
        $this->magic = $magic;
    }

    function setMagic2($magic)
    {
        $this->magic2 = $magic;
    }

}

$slim = new Monster('スライム');
$slim->setHp(2);
echo $slim->getHp();
$boss = new Monster('ボス');
$boss->setHp(20);
echo $boss->getHp();

$magic->setMagic(30);
var_dump($magic);
exit ;
echo $magic->getMagic();
$magic->setMagic2(魔法が使えません);
echo $magic->getMagic2();



// それぞれのモンスターの魔法（$magic）を出力してほしい
// スライムは魔法を持たず、出力結果は「スライムは魔法が使えません。」と出力する。
// ボスは魔法力を３０として、出力結果は「ボスの魔法力は30です。」と出力する。
// ブランチ名は「feature/add_magic」とする。
