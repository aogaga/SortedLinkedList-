<?php

namespace Aogaga\LinkedList;

interface SortedLinkedListInterface
{
    public function insert(int $val): void;
    public function remove(int $val): bool;
    public function contains(int $val): bool;
    public function size(): int;
    public function getFirst(): ?Node;
    public function getLast(): ?Node;

    /**
     * @return int[] Returns an array of integer values in the list
     */
    public function toArray(): array;
}
