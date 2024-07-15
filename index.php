<?php
function getCornersCount(string ...$shapeName) {
    $cornersCount = [
        "square" => 4,
        "circle" => 0,
    ];

    foreach ($shapeName as $item) {
        if (array_key_exists($item, $cornersCount)) {
            print("$item - $cornersCount[$item]\n");
        } else {
            print("$item - not defined\n");
        }
    }
}
getCornersCount('square');
getCornersCount('square', 'circle', 'triangle');

//OOP
class CornerCounter {
    private $cornersCount = [
        "square" => 4,
        "circle" => 0,
    ];

    public function getCornersCount(string ...$shapeName) {
        foreach ($shapeName as $item) {
            if (array_key_exists($item, $this->cornersCount)) {
                print("$item - " . $this->cornersCount[$item] . "\n");
            } else {
                print("$item - not defined\n");
            }
        }
    }
}

$cornerCounter = new CornerCounter();
$cornerCounter->getCornersCount('square');
$cornerCounter->getCornersCount('square', 'circle', 'triangle');
