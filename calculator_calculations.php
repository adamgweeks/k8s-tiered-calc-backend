<?php
//take in vars

$operation = $_POST['operation'];
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];

function divide_numbers($number1,$number2){
$function_result = $number1 / $number2;
return($function_result);
}

function multiply_numbers($number1,$number2){
$function_result = $number1 * $number2;
return($function_result);
}

function subtract_numbers($number1,$number2){
$function_result = $number1 - $number2;
return($function_result);
}

function add_numbers($number1,$number2){
$function_result = $number1 + $number2;
return($function_result);
}

switch ($operation){
	case '÷':
	$result=divide_numbers($first_number,$second_number);
	break;
	case '×':
	$result=multiply_numbers($first_number,$second_number);
	break;
	case '-':
	$result=subtract_numbers($first_number,$second_number);
	break;
	case '+':
	$result=add_numbers($first_number,$second_number);
	break;
}


$return = array('first_number' => $first_number, 'second_number' => $second_number, 'operation' => $operation, 'result' => $result);
print(json_encode($return));
?>