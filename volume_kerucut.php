<?php
function volumeKerucut($r, $t) {
    return (1/3) * pi() * pow($r, 2) * $t;
}

echo "Volume Kerucut (r=5, t=12) = " . volumeKerucut(5,12);
?>