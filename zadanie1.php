<?php include_once("polaczenie1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie do Bazy - MYSQLI</title>
</head>
<body>
    <style>
        table,tr,td{
            border: 1px solid black;
            border-collapse:collapse;
            padding: 10px;
        }
    </style>
    <!--
        Pobranie jednego rekordu z bazy danych
    -->
    <hr>
        <div style='width:500px;margin:auto'>
            <table>
                <tr><td>ihn</td><td>hobby</td></tr>
                <?php
                    //SELECT idh,nazwa FROM hobby
                    $zapytanie_do_bazy = $polaczenie->query("SELECT idh,nazwa FROM hobby WHERE idh=1;");
                    list($idh,$nazwa) = mysqli_fetch_array($zapytanie_do_bazy);
                    echo ("
                        <tr><td>$ihn</td><td>$nazwa</td></tr>
                    ");
                ?>
            </table>
        </div>
    </hr>

    <!--
        Pobranie wszystkich rekordów z bazy danych
    -->
    <hr>
        <div style='width:500px;margin:auto'>
            <table>
                <tr><td>ihn</td><td>hobby</td></tr>
                <?php
                    //SELECT idh,nazwa FROM hobby
                    $zapytanie_do_bazy = $polaczenie->query("SELECT idh,nazwa FROM hobby;");
                    while(list($idh,$nazwa) = mysqli_fetch_array($zapytanie_do_bazy))
                    echo ("
                        <tr><td>$ihn</td><td>$nazwa</td></tr>
                    ");
                ?>
            </table>
        </div>
    </hr>
</body>
</html>
<?php $polaczenie->close();