<?php
function volumeBola($r) {
    return (4/3) * pi() * pow($r, 3);
}

echo "Volume Bola (r=7) = " . volumeBola(7);
?>