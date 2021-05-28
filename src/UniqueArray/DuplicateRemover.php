<?php

namespace Kata\UniqueArray;

class DuplicateRemover
{
    public function __invoke(array $input): array
    {

        /**
         * Get the positions that contain the unique elements and store them in a new array;
         * Then on the final array, the algorithm just gets the elements basing the positions on the previous array elements
         */

        $uniquePositions = array();
        foreach ($input as $key => $val) {
            $uniquePositions[$val] = $key;
        }
        $duplicatesRemoved = array();
        foreach ($uniquePositions as $key => $val) {
            $duplicatesRemoved[] = $key;
        }
        
        return $duplicatesRemoved;
    }
}
