<?php

// Athor : Abbas Mouseei
// Email : abbasmousaei.7studio@gmail.com
// Site : https://www.7studio.ir

// @param : First color
// @param : Second color
// @param : Index parameter, weight of each colorin mixed color.

function get_avrage_from_colors($color1, $color2, $index = 0.5)
{
    // validate colors Hex.code in input
    $regex = '/^#(?:[0-9a-fA-F]{3}){1,2}$/';
    if (preg_match($regex, $color1, $match)) {
        $arrColor1 = [
            hexdec(substr($color1, 1, 2)),
            hexdec(substr($color1, 3, 2)),
            hexdec(substr($color1, 5, 2)),
        ];
    } else {
        return false;
    }

    if (preg_match($regex, $color2, $match)) {
        $arrColor2 = [
            hexdec(substr($color2, 1, 2)),
            hexdec(substr($color2, 3, 2)),
            hexdec(substr($color2, 5, 2)),
        ];
    } else {
        return false;
    }

    // Split a color to basic colors [red, green, blue]
    $red = round($arrColor1[0] * $index + $arrColor2[0] * (1 - $index));
    $green = round($arrColor1[1] * $index + $arrColor2[1] * (1 - $index));
    $blue = round($arrColor1[2] * $index + $arrColor2[2] * (1 - $index));

    // Mix basic colors together and vreate a color with desire percentage of basic colors
    return '#'.sprintf('%02X%02X%02X', $red, $green, $blue);
}
