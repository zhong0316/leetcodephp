<?php


namespace stack;


class ValidParentheses
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = new \SplStack();
        $len = strlen($s);
        for ($i = 0; $i < $len; $i++) {
            $cr = $s[$i];
            if ($cr == '(' || $cr == '{' || $cr == '[') {
                $stack->push($cr);
            } else {
                if ($stack->isEmpty()) return false;
                if ($cr == ')' && $stack->pop() != '(') return false;
                if ($cr == ']' && $stack->pop() != '[') return false;
                if ($cr == '}' && $stack->pop() != '{') return false;
            }
        }
        return $stack->isEmpty();
    }
}

$str = "{[]}";
$solution = new ValidParentheses();
print $solution->isValid($str);