<?php
//表示する内容を書く
// $dyce = rand(1,6);
//     switch ($dyce) {
//       case ($dyce === 1 || $dyce === 2):
//         echo $dyce . 'は凶です。';
//         break;
//       case ($dyce === 3 || $dyce === 4 || $dyce === 5):
//         echo $dyce . 'は中吉です。';
//         break;
//       default:
//         echo $dyce . 'は大吉です。';
//         break;
//      }
//上記をオブジェクト指向へ変換する

require_once('./Dyce.php');

$dyce = new Dyce(rand(1,6));
$dyce->start();
?>
