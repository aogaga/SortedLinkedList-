<?php

namespace Aogaga\LinkedList\Tests;

use PHPUnit\Framework\TestCase;
use Aogaga\LinkedList\SortedLinkedList;
use Aogaga\LinkedList\Node;

/**
 * Class SortedLinkedListTest
 * *
 * * Unit tests for the SortedLinkedList class.
 * * Tests insertion, removal, search, and conversion to array in a doubly sorted linked list.
 * *
 *
 * @package Aogaga\LinkedList
 * @author Ogheneogaga Fidelis Agi
 * @email aogaga@gmail.com
 */
class SortedLinkedListTest extends TestCase
{
    private SortedLinkedList $list;

    protected function setUp(): void
    {
        $this->list = new SortedLinkedList();
    }

    public function testInsertAndToArray(): void
    {
        $this->list->insert(5);
        $this->list->insert(3);
        $this->list->insert(7);
        $this->list->insert(1);

        $this->assertSame([1, 3, 5, 7], $this->list->toArray());
        $this->assertSame(4, $this->list->size());

        $this->assertSame(7, $this->list->getLast()->val);
        $this->assertSame(1, $this->list->getFirst()->val);

        $this->assertSame(5, $this->list->getLast()->prev->val);
    }

    public function testContains(): void
    {
        $this->list->insert(2);
        $this->assertTrue($this->list->contains(2));
        $this->assertFalse($this->list->contains(99));
    }

    public function testRemove(): void
    {
        $this->list->insert(1);
        $this->list->insert(2);
        $this->list->insert(3);

        $this->assertTrue($this->list->remove(2));
        $this->assertFalse($this->list->remove(99));
        $this->assertSame([1,3], $this->list->toArray());
        $this->assertSame(2, $this->list->size());
    }

    public function testGetFirstAndLast(): void
    {
        $this->list->insert(10);
        $this->list->insert(5);
        $this->list->insert(20);

        $this->assertSame(5, $this->list->getFirst()->val);
        $this->assertSame(20, $this->list->getLast()->val);
    }
}
