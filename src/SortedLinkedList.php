<?php

namespace Aogaga\LinkedList;

class SortedLinkedList implements SortedLinkedListInterface
{
    private ?Node $head = null;
    private ?Node $tail = null;
    private int $count = 0;

    public function insert(int $val): void
    {
        $node = new Node($val);

        if ($this->head === null || $val < $this->head->val) {

            $node->next = $this->head;
            if ($this->head !== null) {
                $this->head->prev = $node;
            }
            $this->head = $node;

            if ($this->tail === null) {
                $this->tail = $node;
            }
        } else {

            $current = $this->head;
            while ($current->next !== null && $current->next->val < $val) {
                $current = $current->next;
            }

            $node->next = $current->next;
            $node->prev = $current;

            if ($current->next !== null) {
                $current->next->prev = $node;
            }
            $current->next = $node;

            if ($node->next === null) {
                $this->tail = $node;
            }
        }

        $this->count++;
    }

    public function remove(int $val): bool
    {
        if ($this->isHeadNull()) {
            return false;
        }

        $current = $this->head;

        while ($current !== null && $current->val !== $val) {
            $current = $current->next;
        }

        if ($current === null) {
            return false;
        }

        if ($current->prev !== null) {
            $current->prev->next = $current->next;
        } else {
            // Removing head
            $this->head = $current->next;
        }

        if ($current->next !== null) {
            $current->next->prev = $current->prev;
        } else {
            // Removing tail
            $this->tail = $current->prev;
        }

        $this->count--;
        return true;
    }

    public function contains(int $val): bool
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current->val === $val) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }

    public function size(): int
    {
        return $this->count;
    }

    public function getFirst(): ?Node
    {
        return $this->head;
    }

    public function getLast(): ?Node
    {
        return $this->tail;
    }

    /**
     * @return int[] Returns an array of integer values in the list
     */
    public function toArray(): array
    {
        $array = [];
        $current = $this->head;
        while ($current !== null) {
            $array[] = $current->val;
            $current = $current->next;
        }
        return $array;
    }

    private function isHeadNull(): bool
    {
        return $this->head === null;
    }
}
