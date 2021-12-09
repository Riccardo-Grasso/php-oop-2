<?php
trait CardFormatter
{
    protected function cardFormatter($numbers)
    {
        $cardNumber = str_split($numbers, 4);
        $cardNumberImploded = implode(" ", $cardNumber);

        return $cardNumberImploded;
    }
}
