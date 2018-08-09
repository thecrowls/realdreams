<?php

use Jenssegers\Date\Date;

/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 07.08.2018
 * Time: 3:45
 * @param $date
 * @param $format
 * @return string
 */

function localeDate($date, $format)
{
    return Date::createFromFormat($format, $date);
}