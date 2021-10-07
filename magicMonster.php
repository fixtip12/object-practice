<?php
ini_set('display_errors', "On");
require_once('./index.php');

class magicMonster extends Monster {
    private $magicPower;

    public function __construct($name,$magicPower)
    {
        parent::__construct($name);
        $this->magicPower = $magicPower;
    }

    public function getMagicPower()
    {
        return $this->magicPower;
    }
}

class poisonMonster extends Monster {
    private $poisonPower;

    public function __construct($name)
    {
        parent::__construct($name);
        
    }

    public function getPoisonPower()
    {
        return $this->name . 'が毒力:' . $this->poisonPower . 'を発揮した' . '<br>';
    }

    public function setPoisonPower($poisonPower)
    {
        $this->poisonPower = $poisonPower;
    }


}

$magicMonster = new magicMonster('マジックモンスター',12);
$magicMonster->setHp(12);
echo $magicMonster->getHp();

$poisonMonster = new poisonMonster('毒モンスター');
$poisonMonster->setPoisonPower(12);
echo $poisonMonster->getPoisonPower();

$poisonMonsterA = new poisonMonster('毒モンスターポイズン');
$poisonMonsterA->setHp(12);
echo $poisonMonsterA->getHp();


//課題
// 毒が使えるモンスターpoisonMonsterクラスを作成してください
// 毒が使えるモンスターは変数poisonPowerをもっていて、変数poisonPowerを出力するメソッドも持っている
// 「毒モンスターポイズンが毒力:12を発揮した」、「毒モンスターの体力は12です」を両方画面に出力する
// poisonMonsterはmonsterクラスを継承すること
