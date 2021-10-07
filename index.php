<?php

class Monster{
    protected $name;
    protected $hp;
    protected $army;
    protected $magic;
    protected $isSpecialMonster;

    function __construct($name,$isSpecialMonster = false)
    {
        $this->name = $name;
        $this->isSpecialMonster = $isSpecialMonster;

        if($this->isSpecialMonster){
            echo "あのモンスター{$this->name}が登場しました！" . '<br>';
        }
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
        if($this->magic == 0){
            return  $this->name . 'は魔法が使えません。' . '<br>';
        }
        return $this->name . 'の魔法力は' . $this->magic . 'です。' . '<br>';
    }

    function setHp($hp)
    {
        $this->hp = $hp;
    }

    function setMagic($magic)
    {
        $this->magic = $magic;
    }

    function specialAttack()
    {
        if($this->isSpecialMonster){
            return $this->name . 'のスペシャルアタックバーナーが発動した!!' . '<br>';
        }

        return $this->name . 'はスペシャルアタックバーナーを発動できません。' . '<br>';
    }

}

// $slim = new Monster('スライム');
// $slim->setHp(2);
// echo $slim->getHp();
// $boss = new Monster('ボス');
// $boss->setHp(20);
// echo $boss->getHp();


// $boss->setMagic(30);
// echo $boss->getMagic();
// $slim->setMagic(0);
// echo $slim->getMagic();

// $monsterA = new Monster('monsterA');
// $monsterA->setMagic(0);
// echo $monsterA->getMagic();

// $marumyon = new Monster('まるみょん',true);
// $marumyon->setHp(50);
// echo $marumyon->getHp();
// $marumyon->setMagic(100);
// echo $marumyon->getMagic();

// $monsterB = new Monster('monsterB', true);
// $monsterB->setHp(500);
// echo $monsterB->getHp();
// $monsterB->setMagic(500);
// echo $monsterB->getMagic();


// echo $marumyon->specialAttack();
// echo $monsterB->specialAttack();
// echo $slim->specialAttack();
// echo $monsterA->specialAttack();




// 課題1
// それぞれのモンスターの魔法（$magic）を出力してほしい
// スライムは魔法を持たず、出力結果は「スライムは魔法が使えません。」と出力する。
// ボスは魔法力を３０として、出力結果は「ボスの魔法力は30です。」と出力する。
// ブランチ名は「feature/add_magic」とする。

// 課題2
// 新しいモンスター「まるみょん」が発生しました。
// まるみょんの体力は50、魔法力は100あります。
// まるみょんのオブジェクトを作成したときに、「あのモンスターまるみょんが登場しました！」と出力する。
// また「まるみょんの体力は50です。」、「まるみょんの魔法力は100です。」も出力する。


//追加要望
// まるみょんとモンスターBだけ特殊アクションができ実行すると【{モンスター名}のスペシャルアタックバーナーが発動した!!】と出力する。
