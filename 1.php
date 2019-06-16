<?php
    $uang = 50000;
    $harga= 2500;

    $dapet = $uang / $harga;
    $bonus = $dapet + ($dapet / 4);


    echo floor($bonus);

    