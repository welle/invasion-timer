<?php
/**
 * Created by PhpStorm.
 * User: Francois
 * Date: 11/04/2017
 * Time: 01:16
 */

namespace AppBundle;


class InvasionTimer
{
    const EU_START = 1491768000;

    const TIME_INTERVAL = 66600;

    public function getCurrentInvasionTimer()
    {
        $now = time();

        $progress = ($now - self::EU_START) % self::TIME_INTERVAL;

        return $progress;
    }
}