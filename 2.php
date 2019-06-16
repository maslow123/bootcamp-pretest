<?php
    function bilPrima($num)
    {
        $bil = [2,3,5,7,11,13];
        for($a = 0; $a <$num; $a++)
        {
            for($j=0; $j<=$a; $j++)
            {
                print_r($bil[$j].',');
            }
            echo "<br/>";
        }
    }
    bilPrima(5);