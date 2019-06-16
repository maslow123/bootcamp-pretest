<?php
    function convertDecimal($num)
    {
        $i = "";
        while(floor($num)>0) // menggenapkan bilangan kebawah
        {
            $i = $i.$num %2;
            $num = $num / 2;
        }
        return strrev($i); // membalikkan nilai dari belakang kedepan
    }
    echo convertDecimal(8);