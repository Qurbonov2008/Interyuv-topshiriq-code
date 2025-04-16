<?php
function countXMAS2D($matrix, $word) {
    $count = 0;
    $rows = count($matrix);
    $cols = strlen($matrix[0]);
    $len = strlen($word);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j <= $cols - $len; $j++) {
            // Gorizontal - chapdan o'ngga
            if (substr(implode('', array_slice(str_split($matrix[$i]), $j, $len)), 0, $len) === $word) {
                $count++;
            }
            // Gorizontal - o'ngdan chapga
            if (substr(strrev(implode('', array_slice(str_split($matrix[$i]), $j, $len))), 0, $len) === $word) {
                $count++;
            }
        }
    }

    for ($j = 0; $j < $cols; $j++) {
        for ($i = 0; $i <= $rows - $len; $i++) {
            $vertical = '';
            $revVertical = '';
            for ($k = 0; $k < $len; $k++) {
                $vertical .= $matrix[$i + $k][$j];
                $revVertical .= $matrix[$i + $len - $k - 1][$j];
            }
            if ($vertical === $word) $count++;
            if ($revVertical === $word) $count++;
        }
    }

    return $count;
}

$file = fopen("file.txt", "r");
$text = fread($file, filesize("file.txt"));
fclose($file);

// 2D matrixga aylantirish
$lines = explode("\n", trim($text));
$matrix = array_map('trim', $lines);

echo countXMAS2D($matrix, "XMAS");
