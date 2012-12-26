<?php
/**
 * Calculate age by date
 *
 * @param $year
 * @param $month
 * @param $day
 *
 * @return string
 */
function getAge($year, $month, $day) {

    $d   = new DateTime($year . $month . $day);
    $age = $d->diff(new DateTime(date('Ymd')))->format("%y");

    return $age;
}

/**
 * Converting date to age
 * @param $date
 *
 * @return string
 */function parseDateToAge($date) {

    if (empty($date)) return '';

    $year  = date('Y', strtotime($date));
    $month = date('m', strtotime($date));
    $day   = date('d', strtotime($date));

    $age = getAge($year, $month, $day);

    return $age;
}