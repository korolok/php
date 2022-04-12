<?php
require_once 'context.php';
require_once 'concretstrategyadd.php';
require_once 'concretstrategysubstract.php';
require_once 'concretstrategymultiply.php';

if (!emply($_POST)){
	$context = new Context();
	$x = $_POST['first_num'];
	$y = $_POST['last_num'];
	$act = $_POST['deistvie'];
	switch ($act){
		case '+': $context->setStraregy(new ConcreteStrategyAdd());break;
		case '-': $context->setStraregy(new ConcreteStrategyAdd());break;
		case '*': $context->setStraregy(new ConcreteStrategyAdd());break;
		default: die('Неверное дейстиве!');
	}
	$result = $context->executeStrategy($x,$y);
	echo '<h1>'.$result.'</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="first_num" placeholder="Первое число">
		<select name="deistvie">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
		</select>
		<input type="text" name="last_num" placeholder="Второе число"><br>
		<input type="submit" value="Посчитать">
	</form>
</body>
</html>