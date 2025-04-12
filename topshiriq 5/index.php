<?php
class Solution {

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
if (empty($strs)) {
    return "";
}
if (count($strs) == 1) {
    return $strs[0];
}

$prefix = $strs[0];
for ($i = 1; $i < count($strs); $i++) {
    if ($strs[$i] === "") {
        return "";
    }
    
    $len = min(strlen($prefix), strlen($strs[$i]));
    $prefix = substr($prefix, 0, $len);
    for ($j = 0; $j < $len; $j++) {
        if ($prefix[$j] !== $strs[$i][$j]) {
            $prefix = substr($prefix, 0, $j);
            break;
        }
    }
    
    if ($prefix === "") {
        return "";
    }
}

return $prefix;
}
}

$obj = new Solution();
echo $obj->longestCommonPrefix(["flower", "flow", "flight"]);
