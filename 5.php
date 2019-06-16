<?php
    function cariKata($input,$cari)
    {
        $hasil = 0;
        $hurufInput = strlen($input);
        $hurufCari = strlen($cari);

        for($i=0; $i<$hurufInput;$i++)
        {
            $gabungan = $i+$hurufCari;
            $potongHuruf = substr($input,$i,$hurufCari);
            if($potongHuruf == $cari)
            {
                $hasil++;
            }
        }
        for($a=$hurufInput;$a>0;$a--)
        {
            $gabungan = $a+$hurufCari;
            $potongHuruf = substr($input,$a,$hurufCari);
            if($potongHuruf == $cari)
            {
                $hasil++;
            }
        }   
        echo $hasil;
    }
    cariKata('banananana','nana');