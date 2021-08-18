<?php
// The sort() function sorts an indexed array in ascending order.sort(array, sorttype)
// The rsort() function sorts an indexed array in descending order.rsort(array, sorttype)
// The arsort() function sorts an associative array in descending order, according to the value.arsort(array, sorttype)
// The asort() function sorts an associative array in ascending order, according to the value.asort(array, sorttype)
// The krsort() function sorts an associative array in descending order, according to the key.krsort(array, sorttype)
// The ksort() function sorts an associative array in ascending order, according to the key.ksort(array, sorttype)
// The natcasesort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

//In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

//This function is case-insensitive.natcasesort(array)
// The natsort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

// In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.natsort(array)
// The array_multisort() function returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.

// Note: String keys will be maintained, but numeric keys will be re-indexed, starting at 0 and increase by 1.

// Note: You can assign the sortorder and the sorttype parameters after each array. If not specified, each array parameter uses the default values.array_multisort(array1, sortorder, sorttype, array2, array3, ...)
// The array_reverse() function returns an array in the reverse order.array_reverse(array, preserve)
?>