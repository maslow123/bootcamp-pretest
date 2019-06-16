<?php
    $arrayBilangan = [6,22,34,15,2,13,26,57,42,32];

    sort($arrayBilangan);
    $jumlahBil = count($arrayBilangan);


    echo "Data terkecil : ".min($arrayBilangan).
        '<br/>Data terbesar : '.max($arrayBilangan).
        '<br/>Data yang disortir dari terkecil hingga terbesar :  ';
        
    for($x=0;$x<$jumlahBil;$x++)
    {
        $asc= $arrayBilangan[$x];
        echo $asc.' ';
    }
    echo '<br/>Data yang disortir dari terbesar hingga terkecil : ';

    rsort($arrayBilangan);
    for($x=0;$x<$jumlahBil;$x++)
    {
        $desc= $arrayBilangan[$x];
        echo $desc.' ';
    }