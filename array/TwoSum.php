<?php
namespace Arr;

class TwoSum {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = array();

        for ($i = 0; $i < count($nums); $i++) {
            $map[$nums[$i]] = $i;
        }

        foreach ($nums as $index => $value) {
            $shift = $target - $value;
            if (isset($map[$shift])) {
                if ($index == $map[$shift]) continue;
                return array($index, $map[$shift]);
            }
        }

        return array(0, 0);
    }

}
echo 0x7fffffff . "\n";
echo -0x80000000;
$nums = array(1,2,3,4,5);
$clz = new TwoSum();
$res = $clz->twoSum($nums, 6);
echo $res[0] . ',' . $res[1];