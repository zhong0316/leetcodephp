<?php


namespace linkedList;


use common\ListNode;

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class AddTwoNumbers
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $carry = 0;
        $dummy = new ListNode(-1,  null);
        $curr = $dummy;
        while ($l1 != null && $l2 != null) {
            $nodeVal = ($carry + $l1->val + $l2->val) % 10;
            $carry = intval(($carry + $l1->val + $l2->val) / 10);
            $curr = $curr->next = new ListNode($nodeVal, null);
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        while ($l1 != null) {
            $nodeVal = ($carry + $l1->val) % 10;
            $carry = intval(($carry + $l1->val) / 10);
            $curr->next = new ListNode($nodeVal, null);
            $curr = $curr->next;
            $l1 = $l1->next;
        }
        while ($l2 != null) {
            $nodeVal = ($carry + $l2->val) % 10;
            $carry = intval(($carry + $l2->val) / 10);
            $curr->next = new ListNode($nodeVal, null);
            $curr = $curr->next;
            $l2 = $l2->next;
        }
        if ($carry > 0) {
            $curr->next = new ListNode($carry, null);
        }
        return $dummy->next;
    }
}
