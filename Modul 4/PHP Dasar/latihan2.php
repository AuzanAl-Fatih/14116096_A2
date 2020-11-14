<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        $nama = [
            "rere", "zander", "alonso",
            "hero", "kifat", "samridho",
            "panjul", "deran", "abon", "udil"
        ];
        echo "Data acak: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
        echo "<br>";
        sort($nama);
        echo "Data terurut: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
    ?>    
</body>
</html>
