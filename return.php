<?php

    function LuasPersegi($sisi){

        $luas = $sisi * $sisi;

        return $luas;

    }

    // Pemanggilan
    echo "Luas ".LuasPersegi(5)."<br>";
    echo "Luas ".LuasPersegi(50);
?>