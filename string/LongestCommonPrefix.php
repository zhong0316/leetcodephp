<?php


namespace string;


class LongestCommonPrefix
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $counter = 0;
        if (count($strs) == 0) return "";
        $min = PHP_INT_MAX;
        foreach ($strs as $index => $value) {
            $min = min($min, strlen($value));
        }
        while ($counter < $min) {
            $c1 = $strs[0][$counter];
            foreach ($strs as $index => $value) {
                if ($value[$counter] != $c1) return substr($strs[0], 0, $counter);
            }
            $counter++;
        }
        return substr($strs[0], 0, $counter);
    }
}

$strs = array("flower","flow","flight");
$solution = new LongestCommonPrefix();
print $solution->longestCommonPrefix($strs);
