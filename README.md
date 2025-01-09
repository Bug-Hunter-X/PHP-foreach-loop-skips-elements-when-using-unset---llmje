# PHP foreach loop bug
This repository demonstrates a common bug in PHP when using the `unset()` function within a `foreach` loop that iterates over an array.  The `unset()` function can lead to unexpected behavior and skipped elements in the loop.

The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version.

This is a subtle bug that can be difficult to track down, especially in larger applications.