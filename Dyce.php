<?php
//classの内容を書く
class Dyce{
  private $dyceNum;

  public function start()
  {
    $this->dyceNum = rand(1,6); 
  }

  public function getDyce()
  {
    if($this->dyceNum == 1 || $this->dyceNum == 2){
      return $this->dyceNum . 'は凶です。' . '<br>';
  }
    elseif($this->dyceNum == 3 || $this->dyceNum == 4 || $this->dyceNum == 5){
      return $this->dyceNum . 'は中吉です。' . '<br>';
    } 

    return $this->dyceNum . 'は大吉です。' . '<br>';
　}
}
?>