<?php

use Morilog\Jalali\Jalalian;

function shamsi($date, bool $time = true, $format = null, $lang = 'fa_IR'): string
{
    $formatter = new IntlDateFormatter(
        "$lang@calendar=persian",
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Asia/Tehran',
        IntlDateFormatter::TRADITIONAL,
        $format ?? ($time ? "H:m - yyyy-MM-dd" : "yyyy-MM-dd"));
    $start_date = new \DateTime($date);
    return $formatter->format($start_date);
}

function shamsi_to_gregorian($jy, $jm, $jd) {
    $jy += 1595;
    $days = -355668 + (365 * $jy) + (((int)($jy / 33)) * 8) + ((int)((($jy % 33) + 3) / 4)) + $jd + (($jm < 7)? ($jm - 1) * 31 : (($jm - 7) * 30) + 186);
    $gy = 400 * ((int)($days / 146097));
    $days %= 146097;
    if ($days > 36524) {
        $gy += 100 * ((int)(--$days / 36524));
        $days %= 36524;
        if ($days >= 365) $days++;
    }
    $gy += 4 * ((int)($days / 1461));
    $days %= 1461;
    if ($days > 365) {
        $gy += (int)(($days - 1) / 365);
        $days = ($days - 1) % 365;
    }
    $gd = $days + 1;
    $sal_a = array(0, 31, (($gy % 4 == 0 and $gy % 100 != 0) or ($gy % 400 == 0))?29:28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    for ($gm = 0; $gm < 13 and $gd > $sal_a[$gm]; $gm++) $gd -= $sal_a[$gm];
    return implode('-', [$gy, $gm, $gd]);
}

function getCurrentMonthLimits(): array
{
    $date = explode('-', shamsi(now(), false, null, 'en_US'));
    $jalalian = new Jalalian($date[0], $date[1], 15);
    $firstDay = $jalalian->getFirstDayOfMonth()->format('Y-m-d');
    $lastDay = $jalalian->getEndDayOfMonth()->format('Y-m-d');

    $date = explode('-', $firstDay);
    $firstDay = shamsi_to_gregorian($date[0], $date[1], $date[2]);

    $date = explode('-', $lastDay);
    $lastDay = shamsi_to_gregorian($date[0], $date[1], $date[2]);
    return [$firstDay, $lastDay];
}
