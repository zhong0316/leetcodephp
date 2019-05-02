<?php


namespace linkedList;


use common\ListNode;

class MergeTwoSortedLists
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2)
    {
        $res = new ListNode(-1, null);
        $curr = $res;
        while ($l1 != null || $l2 != null) {
            if ($l1 != null && $l2 != null) {
                if ($l1->val > $l2->val) {
                    $curr = $curr->next = new ListNode($l2->val);
                    $l2 = $l2->next;
                } else {
                    $curr = $curr->next = new ListNode($l1->val);
                    $l1 = $l1->next;
                }
            } else if ($l1 != null) {
                $curr = $curr->next = new ListNode($l1->val);
                $l1 = $l1->next;
            } else {
                $curr = $curr->next = new ListNode($l2->val);
                $l2 = $l2->next;
            }
        }
        return $res->next;
    }
}