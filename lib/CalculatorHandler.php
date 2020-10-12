<?php

function calculator(string $num1, string $num2, string $op): string
{
    $result = "";
    switch ($op) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                break;
            }
        default:
            $result = "Error";
            break;
    }
    return $result;
}


header('Content-Type: application/json');
$requestData = json_decode(file_get_contents("php://input"));

$num1 = $requestData->{"num1"};
$operator = $requestData->{"operator"};
$num2 = $requestData->{"num2"};

$result = calculator($num1, $num2, $operator);

echo json_encode(array(
    "result" => $result
));