<?php

namespace Aogaga\LinkedList;

/**
 * Class Node
 *
 * Represents a single node in a doubly linked list.
 * Each node stores an integer value and references to the previous and next nodes.
 *
 * @package Aogaga\LinkedList
 * @author Ogheneogaga Fidelis Agi
 * @email aogaga@gmail.com
 */
class Node
{
    public int $val;
    public ?Node $prev = null;
    public ?Node $next = null;

    public function __construct(int $val)
    {
        $this->val = $val;
    }
}
