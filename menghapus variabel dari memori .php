<?php
$variabel = "hallo,dunia!";
//menghapus variable dari memori
unset($variabel);
//memeriksa apakah variable masih ada
if (!isset($variabel))
{
    echo "variable telah dihapus.";
} else {
    echo "variable masih ada.";
}
echo "<p><strong>By meylisa eka putry</strong></p>";

?>