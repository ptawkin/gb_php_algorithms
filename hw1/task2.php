<?php

function createArray($length) {
    $array = [];

    while (count($array) < $length) {
        $item = rand();
        $array[] = $item;
    }

    return $array;
}

function calculateTime ($array) {

    $length = count($array);

//    $array = createArray($length);

    $microtime1 = microtime(true);
    foreach ($array as $key => $value) {

    };
    $microtime2 = microtime(true);

    $time1 = number_format($microtime2 - $microtime1, 30);


    $microtime3 = microtime(true);

    $obj = new ArrayObject( $array );
    $iter = $obj -> getIterator();

    while( $iter -> valid()) {
        $iter->next();
    }

    $microtime4 = microtime(true);

    $time2 = number_format($microtime4 - $microtime3, 30);

    echo $time1 . " - время обхода массива с длинной $length с помощью foreach" . "<br>";
    echo $time2 . " - время обхода массива с длинной $length с помощью итераторов" . "<br><br>";
}


calculateTime(createArray(10));
calculateTime(createArray(100));
calculateTime(createArray(1000));
calculateTime(createArray(10000));
calculateTime(createArray(100000));
calculateTime(createArray(1000000));
calculateTime(createArray(10000000));
calculateTime(createArray(100000000));
calculateTime(createArray(1000000000));


