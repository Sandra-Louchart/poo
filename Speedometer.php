<?php


class Speedometer
{
    const convertMiles = 0.62;
    const convertKm = 1.60;

    public static function convertToMiles(int $km)
    {
        return $km . 'Km équivaut à '. $km * self::convertMiles . 'miles';
    }

    public static function convertToKm (int $miles)
    {
        return$miles . 'miles équivaut à '. $miles * self::convertKm . 'Km';
    }
}