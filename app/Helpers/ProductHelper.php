<?php

namespace App\Helpers;

class ProductHelper {
    public static function serializeNumOfSold(int $num) {
        $numStr = strval($num);
        $digits = strlen(substr($numStr, 1, strlen($numStr)));
        $unitLevel = floor($digits/3);

        $unitName = '';
        if ($unitLevel == 1)
            $unitName = 'RB';
        else if ($unitLevel == 2)
            $unitName = 'Jt';
        $numOfSoldDigits = strlen(strval(floor($num/pow(1000, $unitLevel))));

        if ($numOfSoldDigits > 0) {
            return substr($numStr, 0, $numOfSoldDigits).''.$unitName.'  Terjual';
        }
        return $numStr.' Terjual';
    }

    public static function formatPrice(int $price) {
        return number_format($price, 0, ',', '.');
    }

    public static function isHasSpecialOffer(float $discount) {
        if (isset($discount) && $discount > 0)
            return true;
        return false;
    }

    public static function priceAfterDiscount(int $price, float $discount) {
        return round($price - $price * $discount);
    }

    public static function formatDiscount(float $discount) {
        return ($discount * 100).'%';
    }
}
