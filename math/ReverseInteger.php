<?php

namespace math;

class ReverseInteger
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        if ($x <= pow(2, 31) * -1 || $x >= pow(2, 31) - 1) return 0;
        if (abs($x) < 10) return $x;
        $positive = $x > 0;
        $abs = abs($x);
        $count = strlen($abs);
        if ($positive) {
            return $this->positiveReverse($abs, $count);
        } else {
            return -$this->positiveReverse($abs, $count);
        }
    }

    function positiveReverse($x, $count)
    {
        $result = 0;
        while (--$count >= 0) {
            $result += (($x % 10) * pow(10, $count));
            $x /= 10;
        }
        if ($result > pow(2, 31) - 1) {
            return 0;
        }
        return intval($result);
    }

}

$reverseInteger = new ReverseInteger();

echo $reverseInteger->reverse(-234);
