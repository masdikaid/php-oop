<?php


// traditional generator
function createGenap(int $max) : Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++)
    {
        if ($i % 2 == 0)
        {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

// using yield generator
function createGanjil(int $max) : Iterator
{
    for ($i = 1; $i <= $max; $i++)
    {
        if ($i % 2 == 1)
        {
            yield $i;
        }
    }
}
$genap = createGenap(100);
foreach ($genap as $value) {
    echo "genap $value\n";
}

$ganjil = createGanjil(100);

foreach ($ganjil as $value) {
    echo "ganjil $value\n";
}