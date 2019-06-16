<?php
    function pohon($tinggiAwal,$tahun)
    {
        $gugur = 1;
        $semi = 2*$tinggiAwal;

        if($tinggiAwal>0 && $tahun>0)
        {
            $hasil = (($tinggiAwal*2)+1);
            
            for($a=1;$a<$tinggiAwal-1;$a++)
            {
                $hasil = (($hasil*2)+1);
            }
            echo $hasil;
        }
        else
        {
            echo "Nilai X dan Y harus lebih dari 0";
        }
    }
    echo pohon(4,3);