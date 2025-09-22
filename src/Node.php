<?php

namespace Aogaga\LinkedList;

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
