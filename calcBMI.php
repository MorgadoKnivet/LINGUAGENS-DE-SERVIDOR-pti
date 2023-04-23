<?php

include("BMI.php");

classifyBMI(18.5);
classifyBMI(22.5);
classifyBMI(25.30);
classifyBMI(27.5);
classifyBMI(32.5);
classifyBMI(37.5);
classifyBMI(45.0);
classifyBMI(15.0);


function classifyBMI($bmi) {
    $resultOptions = array(
        new BMIResult(0, 18.50, "Magreza"),
        new BMIResult(18.51, 24.90, "Saudável"),
        new BMIResult(25.0, 29.90, "Sobrepeso"),
        new BMIResult(30.0, 34.90, "Obesidade Grau I"),
        new BMIResult(35.0, 39.90, "Obesidade Grau II"),
        new BMIResult(40.0, null, "Obesidade Grau III")
    );

    foreach ($resultOptions as $item) { 
        checkBMIValue($item->minValue, $item->maxValue, $item->result, $bmi);
    }
}

function checkBMIValue($minValue, $maxValue, $result, $bmi) {

    // isMaxValue
    if ($maxValue == null && $bmi >= $minValue) {
        printResult($bmi,$result);
       return;
    }

    // isValuesWithRange
    if ($bmi >= $minValue && $bmi <= $maxValue) {
        printResult($bmi,$result);
    }
}

function printResult($bmi,$result,){
    $numberWithZero = sprintf('%0.2f', $bmi);
    echo "Atenção, seu IMC é $numberWithZero e você está classificado como $result";
    echo "<br>";
}

?>