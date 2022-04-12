<?php 
header('Content-type: text/html; charset=utf-8');
require_once 'Mallardduck.php';
require_once 'RedheadDuck.php';
require_once 'RubberDuck.php';
require_once 'DecoyDuck.php';
require_once 'ReactDuck.php';

$duck1 = new Mallardduck();
$duck1->display();
$duck1->swim();
$duck1->performFly();
echo '<br>';

$duck2 = new RedheadDuck();
$duck2->display();
$duck2->swim();
$duck2->performFly();
echo '<br>';

$duck3 = new RubberDuck();
$duck3->display();
$duck3->swim();
$duck3->performFly();
$duck3->performQuack();
echo '<br>';

$duck4 = new DecoyDuck();
$duck4->display();
$duck4->swim();
$duck4->performFly();
$duck4->performQuack();
echo '<br>';

$duck5 = new ReactDuck();
$duck5->display();
$duck5->noswim();
$duck5->performFly();
$duck5->performQuack();
?>