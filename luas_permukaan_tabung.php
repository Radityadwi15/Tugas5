<?php
function luasPermukaanTabung($r, $t) {
    return 2 * pi() * $r * ($r + $t);
}

echo "Luas Permukaan Tabung (r=3, t=10) = " . luasPermukaanTabung(3,10);
?>