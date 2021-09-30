<?php
require_once('./index.php');

class magicMonster extends Monster {
    private $magicPower;

    public function __construct($magicPower)
    {
        $this->magicPower = $magicPower;
    }

    public function getMagicPower()
    {
        return $this->magicPower;
    }
}

$magicMonster = new magicMonster(12);
$magicMonster->setHp(12);
echo $magicMonster->getHp();

//課題
// 毒が使えるモンスターpoisonMonsterクラスを作成してください
// 毒が使えるモンスターは変数poisonPowerをもっていて、変数poisonPowerを出力するメソッドも持っている
// 「毒モンスターポイズンが毒力:12を発揮した」、「毒モンスターの体力は12です」を両方画面に出力する
// poisonMonsterはmonsterクラスを継承すること
