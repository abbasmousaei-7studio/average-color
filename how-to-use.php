<?php

// Athor : Abbas Mouseei
// Email : abbasmousaei.7studio@gmail.com
// Site : https://www.7studio.ir

// How to use
$color1 = '#f2312d';
$color2 = '#f1faee';

// With 50% percentage of each colors
$avrageColor1 = get_avrage_from_colors($color1, $color2);

// with diffrent percentage of colors. in this case the average color is about to second color.
$avrageColor2 = get_avrage_from_colors($color1, $color2, 0.85);
?>

<!-- Show the colors by example -->
<h1 style="color: <?php echo $color1; ?>">First color</h1>
<h1 style="color: <?php echo $color2; ?>">Second Color</h1>
<h1 style="color: <?php echo $avrageColor1; ?>">AvrageColor by the
    same percentage</h1>
<h1 style="color: <?php echo $avrageColor2; ?>">AvrageColor by the
    85% about to second color</h1>