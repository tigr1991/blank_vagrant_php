<?php
$data = [
    [
        'command' => 'array_change_key_case',
        'en' => 'Changes the case of all keys in an array',
    ],
    [
        'command' => 'array_chunk',
        'en' => 'Split an array into chunks',
    ],
    [
        'command' => 'array_column',
        'en' => 'Return the values from a single column in the input array',
        'version' => '>=5.5',
        'description' => 'array array_column ( array $input , mixed $column_key [, mixed $index_key = null ] )',
        'params' => [
            'input' => 'Многомерный массив или массив объектов, из которого будет производиться выборка значений. Если задан массив объектов, то можно выбирать любые его публичные свойства. Для выборки приватных или защищенных свойств, объект должен реализовывать магические методы __get() и __isset().',
            'column_key' => 'Ключ столбца значения которого нужно вернуть. Может содержать как числовой ключ так и строковой для ассоциативных массивов. А также может принимать значение NULL тогда возвращаются не значения определенного столбца а весь массив (полезно использовать вместе с index_key чтобы переиндексировать массив).',
            'index_key' => 'Ключ столбца значения которого будут использоваться в качестве ключей возвращаемого массива. Может быть как целочисленным ключом так и строковым.',
        ],
    ],
    [
        'command' => 'array_combine',
        'en' => 'Creates an array by using one array for keys and another for its values',
    ],
    [
        'command' => 'array_count_values',
        'en' => 'Counts all the values of an array',
    ],
    [
        'command' => 'array_diff_assoc',
        'en' => 'Computes the difference of arrays with additional index check',
    ],
    [
        'command' => 'array_diff_key',
        'en' => 'Computes the difference of arrays using keys for comparison',
    ],
    [
        'command' => 'array_diff_uassoc',
        'en' => 'Computes the difference of arrays with additional index check which is performed by a user supplied callback function',
    ],
    [
        'command' => 'array_diff_ukey',
        'en' => 'Computes the difference of arrays using a callback function on the keys for comparison',
    ],
    [
        'command' => 'array_diff',
        'en' => 'Computes the difference of arrays',
    ],
    [
        'command' => 'array_fill_keys',
        'en' => 'Fill an array with values, specifying keys',
    ],
    [
        'command' => 'array_fill',
        'en' => 'Fill an array with values',
    ],
    [
        'command' => 'array_filter',
        'en' => 'Filters elements of an array using a callback function',
    ],
    [
        'command' => 'array_flip',
        'en' => 'Exchanges all keys with their associated values in an array',
    ],
    [
        'command' => 'array_intersect_assoc',
        'en' => 'Computes the intersection of arrays with additional index check',
    ],
    [
        'command' => 'array_intersect_key',
        'en' => 'Computes the intersection of arrays using keys for comparison',
    ],
    [
        'command' => 'array_intersect_uassoc',
        'en' => 'Computes the intersection of arrays with additional index check, compares indexes by a callback function',
    ],
    [
        'command' => 'array_intersect_ukey',
        'en' => 'Computes the intersection of arrays using a callback function on the keys for comparison',
        'ru' => 'Вычисляет схождение массивов, используя callback-функцию для сравнения ключей',
    ],
    [
        'command' => 'array_intersect',
        'en' => 'Computes the intersection of arrays',
    ],
    [
        'command' => 'array_key_exists',
        'en' => 'Checks if the given key or index exists in the array',
    ],
    [
        'command' => 'array_keys',
        'en' => 'Return all the keys or a subset of the keys of an array',
    ],
    [
        'command' => 'array_map',
        'en' => 'Applies the callback to the elements of the given arrays',
    ],
    [
        'command' => 'array_merge_recursive',
        'en' => 'Merge two or more arrays recursively',
    ],
    [
        'command' => 'array_merge',
        'en' => 'Merge one or more arrays',
    ],
    [
        'command' => 'array_multisort',
        'en' => 'Sort multiple or multi-dimensional arrays',
    ],
    [
        'command' => 'array_pad',
        'en' => 'Pad array to the specified length with a value',
    ],
    [
        'command' => 'array_pop',
        'en' => 'Pop the element off the end of array',
    ],
    [
        'command' => 'array_product',
        'en' => 'Calculate the product of values in an array',
    ],
    [
        'command' => 'array_push',
        'en' => 'Push one or more elements onto the end of array',
    ],
    [
        'command' => 'array_rand',
        'en' => 'Pick one or more random entries out of an array',
    ],
    [
        'command' => 'array_reduce',
        'en' => 'Iteratively reduce the array to a single value using a callback function',
    ],
    [
        'command' => 'array_replace_recursive',
        'en' => 'Replaces elements from passed arrays into the first array recursively',
    ],
    [
        'command' => 'array_replace',
        'en' => 'Replaces elements from passed arrays into the first array',
    ],
    [
        'command' => 'array_reverse',
        'en' => 'Return an array with elements in reverse order',
    ],
    [
        'command' => 'array_search',
        'en' => 'Searches the array for a given value and returns the first corresponding key if successful',
    ],
    [
        'command' => 'array_shift',
        'en' => 'Shift an element off the beginning of array',
    ],
    [
        'command' => 'array_slice',
        'en' => 'Extract a slice of the array',
    ],
    [
        'command' => 'array_splice',
        'en' => 'Remove a portion of the array and replace it with something else',
    ],
    [
        'command' => 'array_sum',
        'en' => 'Calculate the sum of values in an array',
    ],
    [
        'command' => 'array_udiff_assoc',
        'en' => 'Computes the difference of arrays with additional index check, compares data by a callback function',
    ],
    [
        'command' => 'array_udiff_uassoc',
        'en' => 'Computes the difference of arrays with additional index check, compares data and indexes by a callback function',
    ],
    [
        'command' => 'array_udiff',
        'en' => 'Computes the difference of arrays by using a callback function for data comparison',
    ],
    [
        'command' => 'array_uintersect_assoc',
        'en' => 'Computes the intersection of arrays with additional index check, compares data by a callback function',
    ],
    [
        'command' => 'array_uintersect_uassoc',
        'en' => 'Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions',
    ],
    [
        'command' => 'array_uintersect',
        'en' => 'Computes the intersection of arrays, compares data by a callback function',
    ],
    [
        'command' => 'array_unique',
        'en' => 'Removes duplicate values from an array',
    ],
    [
        'command' => 'array_unshift',
        'en' => 'Prepend one or more elements to the beginning of an array',
    ],
    [
        'command' => 'array_values',
        'en' => 'Return all the values of an array',
    ],
    [
        'command' => 'array_walk_recursive',
        'en' => 'Apply a user function recursively to every member of an array',
    ],
    [
        'command' => 'array_walk',
        'en' => 'Apply a user supplied function to every member of an array',
    ],
    [
        'command' => 'array',
        'en' => 'Create an array',
    ],
    [
        'command' => 'arsort',
        'en' => 'Sort an array in reverse order and maintain index association',
    ],
    [
        'command' => 'asort',
        'en' => 'Sort an array and maintain index association',
    ],
    [
        'command' => 'compact',
        'en' => 'Create array containing variables and their values',
    ],
    [
        'command' => 'count',
        'en' => 'Count all elements in an array, or something in an object',
    ],
    [
        'command' => 'current',
        'en' => 'Return the current element in an array',
    ],
    [
        'command' => 'each',
        'en' => 'Return the current key and value pair from an array and advance the array cursor',
    ],
    [
        'command' => 'end',
        'en' => 'Set the internal pointer of an array to its last element',
    ],
    [
        'command' => 'extract',
        'en' => 'Import variables into the current symbol table from an array',
    ],
    [
        'command' => 'in_array',
        'en' => 'Checks if a value exists in an array',
    ],
    [
        'command' => 'key_exists',
        'en' => 'Alias of array_key_exists',
    ],
    [
        'command' => 'key',
        'en' => 'Fetch a key from an array',
    ],
    [
        'command' => 'krsort',
        'en' => 'Sort an array by key in reverse order',
    ],
    [
        'command' => 'ksort',
        'en' => 'Sort an array by key',
    ],
    [
        'command' => 'list',
        'en' => 'Assign variables as if they were an array',
    ],
    [
        'command' => 'natcasesort',
        'en' => 'Sort an array using a case insensitive "natural order" algorithm',
    ],
    [
        'command' => 'natsort',
        'en' => 'Sort an array using a "natural order" algorithm',
    ],
    [
        'command' => 'next',
        'en' => 'Advance the internal pointer of an array',
    ],
    [
        'command' => 'pos',
        'en' => 'Alias of current',
    ],
    [
        'command' => 'prev',
        'en' => 'Rewind the internal array pointer',
    ],
    [
        'command' => 'range',
        'en' => 'Create an array containing a range of elements',
    ],
    [
        'command' => 'reset',
        'en' => 'Set the internal pointer of an array to its first element',
    ],
    [
        'command' => 'rsort',
        'en' => 'Sort an array in reverse order',
    ],
    [
        'command' => 'shuffle',
        'en' => 'Shuffle an array',
    ],
    [
        'command' => 'sizeof',
        'en' => 'Alias of count',
    ],
    [
        'command' => 'sort',
        'en' => 'Sort an array',
    ],
    [
        'command' => 'uasort',
        'en' => 'Sort an array with a user-defined comparison function and maintain index association',
    ],
    [
        'command' => 'uksort',
        'en' => 'Sort an array by keys using a user-defined comparison function',
    ],
    [
        'command' => 'usort',
        'en' => 'Sort an array by values using a user-defined comparison function',
    ],
];