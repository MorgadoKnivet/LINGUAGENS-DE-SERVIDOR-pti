<?php

class BMIResult {
    public $minValue;
    public $maxValue;
    public $result;

    public function __construct($minValue, $maxValue, $result) {
        $this->minValue = number_format((float)$minValue, 2, '.', '0');
        $this->maxValue = number_format((float)$maxValue, 2, '.', '0');
        $this->result = $result;

        if($maxValue == null) {
            $this->maxValue = null;
        }
    }
}

?>