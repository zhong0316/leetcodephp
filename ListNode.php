<?php


namespace common;


class ListNode
{
    public $val;
    public $next;

    function __construct($val, $next) {
        $this->val = $val;
        $this->next = $next;
    }
}