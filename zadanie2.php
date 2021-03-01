//utwórz baze danych o nazwie Warsztaty
// 2 tabele
//1 tabela - samochody (3 atrybuty, marka, silnik)
//2 tabela komputery (marka, nazwa)
//wykonaj polaczenie do bazy danych, utwórz nowego użytkownika i pobierz wszystkie rekordy z tabeli samochody, komputery

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
    
    <hr>
        <div style='width:500px;margin:auto'>
            <table>
                <tr><td>ids</td><td>marka</td><td>silnik</td></tr>
                <?php
                    //SELECT idh,nazwa FROM hobby
                    $zapytanie_do_bazy = $polaczenie->query("SELECT ids,marka,silnik FROM samochody;");
                    while(list($ids,$marka,$silnik) = mysqli_fetch_array($zapytanie_do_bazy))
                    echo ("
                        <tr><td>$ids</td><td>$marka</td><td>$silnik</td></tr>
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
                <tr><td>idk</td><td>marka</td><td>nazwa</td></tr>
                <?php
                    //SELECT idh,nazwa FROM hobby
                    $zapytanie_do_bazy = $polaczenie->query("SELECT idk,marka,nazwa FROM komputery;");
                    while(list($idk,$marka,$nazwa) = mysqli_fetch_array($zapytanie_do_bazy))
                    echo ("
                        <tr><td>$idk</td><td>$marka</td><td>$nazwa</td></tr>
                    ");
                ?>
            </table>
        </div>
    </hr>

    <?php
        $zapytanie_do_bazy = $polaczenie->query ("SELECT idk,marka FROM komputery");
        while($wiersz = $zapytanie_do_bazy->fetch_assoc()){
            echo $wiersz['idk']." ".$wiersz['marka']."<br>";
        }
    ?>


</body>
</html>
<?php $polaczenie->close();