<?php

class Dyce
{
    private $dyceNum;
    public function __construct(int $dyceNum)
    {
        $this->dyceNum = $dyceNum;
    }
    public function start()
    {
        switch ($this->dyceNum) {
        case ($this->dyceNum === 1 || $this->dyceNum === 2):
        echo $this->dyceNum . 'は凶です。';
        break;
        case ($this->dyceNum === 3 || $this->dyceNum === 4 || $this->dyceNum === 5):
        echo $this->dyceNum . 'は中吉です。';
        break;
        default:
        echo $this->dyceNum . 'は大吉です。';
        break;
        }
    }
}
