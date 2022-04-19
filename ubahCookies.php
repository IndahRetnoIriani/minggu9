<?php
    $name = "mahasiswa";
    $value= "Indah Retno Iriani";
    setcookie($name, $value, time()+600);

    setcokoie("kelas", "Indah Retno Iriani", time()+3600);
?>
<html>
    <body>
        <?php
        echo "Cookies telah dibuat";
        ?>
    </body>
</html>