<?php

namespace MaruzenP\Tempconv;

use http\Exception\InvalidArgumentException;

class TemperatureConverter
{
    // 呼び出し側は、温度値と単位（摂氏または華氏）を指定する必要がある
    public function convert($temperature, $unit)
    {
        // 単位が摂氏か華氏かを確認
        if ($unit === 'C') {
            return ($temperature * 9 / 5) + 32;
        } elseif ($unit === 'F') {
            return ($temperature - 32) * 5 / 9;
        } else {
            // 単位が華氏でも摂氏でもないあばいはエラーを投げる
            throw new InvalidArgumentException('Invalid unit, only C (Celsius) or F (Fahrenheit) are allowed');
        }
    }
}
