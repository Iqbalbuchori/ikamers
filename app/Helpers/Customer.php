<?php

function status($status)
{
    if ($status == 0) {
        $sts = "Pembeli";
    } else {
        $sts = "Penjual";
    }

    return $sts; 
}