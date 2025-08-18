<?php

/**
 * ==============================
 * FIXME: 
 * ==============================
 */
class Circle
{
    const PI = 3.14;
    const r = 5;
    const area = function () {
        return self::PI * self::r * self::r;
    };
    const perimeter = function () {
        return 2 * self::PI * self::r;
    };
}
