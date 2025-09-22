# SortedLinkedList PHP Project

This project implements a **doubly sorted linked list** in PHP. Features include:

- Insert values in sorted order
- Remove values
- Check if a value exists
- Convert the list to an array

It also includes **automated testing**, **static analysis**, and **code style enforcement** using Composer scripts.

---

## Requirements

- PHP 8.1 or higher
- Composer
- PHPUnit
- PHPStan
- PHP CodeSniffer (PHPCS/PHPCBF)

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/aogaga/SortedLinkedList-.git
cd your-repo
```

## Important Commands 
```
- Run test
    composer test

- Run static Analysis
    composer analyse


- Check code style:
    composer check-style
    
- Fix code style automatically:
    composer fix-style
```
### Demo Example

```angular2html
<?php
require 'vendor/autoload.php';

use Aogaga\LinkedList\SortedLinkedList;

// Create a new sorted linked list
$list = new SortedLinkedList();

// Insert values
$list->insert(5);
$list->insert(2);
$list->insert(8);

// Print the list as an array
print_r($list->toArray()); // [2, 5, 8]

// Remove a value
$list->remove(5);
print_r($list->toArray()); // [2, 8]

// Check if a value exists
echo $list->contains(8) ? "8 exists\n" : "8 does not exist\n"; // 8 exists

// Get first and last nodes
echo "First node: " . $list->getFirst()->val . "\n"; // 2
echo "Last node: " . $list->getLast()->val . "\n";   // 8

```