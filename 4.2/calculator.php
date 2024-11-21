<?php

$num1 = (float)readline("Enter the first number: ");
$num2 = (float)readline("Enter the second number: ");
$operation = readline("Enter operation (+, -, *, /): ");

switch ($operation) {
    case '+':
        $result = $num1 + $num2;
        echo "Result: $num1 + $num2 = $result\n";
        break;
    case '-':
        $result = $num1 - $num2;
        echo "Result: $num1 - $num2 = $result\n";
        break;
    case '*':
        $result = $num1 * $num2;
        echo "Result: $num1 * $num2 = $result\n";
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result: $num1 / $num2 = $result\n";
        } else {
            echo "Error: Division by zero is not allowed.\n";
        }
        break;
    default:
        echo "Invalid operation. Please enter one of +, -, *, or /.\n";
}
?>
