<?php
        echo "<center><h2>Nilai Ujian Kelas 12 RPL</h2>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th> Nama </th>";
        echo "<th> Matematika</th>";
        echo "<th> Bahasa Inggris</th>";
        echo "<th> Bahasa Indonesia</th>";
        echo "<th> Kejuruan</th>";
        echo "<th> Rata-rata</th>";
        echo "<th> Status</th>";
        echo "<th> Grade</th>";
        echo "</tr>";

    function nilaiUjian($nama,$mtk,$ing,$ind,$pro){
        
        $rata = ($mtk + $ing + $ind + $pro) / 4;
        
        echo "<tr>";
        echo "<th> ".$nama." </th>";
        echo "<th>".$mtk."</th>";
        echo "<th>".$ing."</th>";
        echo "<th>".$ind."</th>";
        echo "<th>".$pro."</th>";
        echo "<th>".$rata."</th>";
        if($rata >= 75){
            $status="Lulus";
        }else {
            $status="Tidak Lulus";
        }
        echo "<th> ".$status." </th>";

        if($rata >= 90  && $rata <= 100){
            $grade = "A";
        }
        else if($rata >= 80){
            $grade = "B";
        }
        else if($rata >= 70){
            $grade = "C";
        }
        else if($rata >= 50){
            $grade = "D";
        }
        else if($rata >= 0){
            $grade = "E";
        }
        else {
            $grade = "Grade tidak valid";
        }

        echo "<th> ".$grade." </th>";
        echo "</tr>";
        
    }
        nilaiUjian("Amelia",80,50,70,40);
        nilaiUjian("Enjang",100,40,90,70);
        nilaiUjian("Enjang",100,40,90,70);

        echo "</table></center>";




  
?>