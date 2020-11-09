<?php
require_once 'src/Archer.php';
require_once 'src/Soldier.php';

echo "Hello wilder!";

$archer = new Archer();
$archer->walk('right');
echo $archer;
$archer->attack();

$soldier = new Soldier();
$soldier->walk('left');
echo $soldier;
$soldier->attack();



