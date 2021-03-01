<?php

/**
 * Połączenie do bazy danych Mysql za pomocą klasy Myqsli
 * Tworzę nowy obiekt $polaczenie za pomocą konstruktora new Mysqli
 */

 $host = "localhost";//ip, nazwę domenową lub lokalnie na komp: localhost
 $username = "root";//nazwa użytkownika z uprawnieniami do bazy danych
 $password ="";//hasło dostępu do bazy danych
 $dbname = "weronikanycz";//nazwa bazy danych
 $port = 3306;//opcjonalnie port

 //tworzę nowe połączenie w Mysqli, znak @ ukrywa komunikaty czyli errory
 $polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

 if (mysqli_connect_errno()!=0) {
     echo("Błąd połączenia do bazy danych".mysqli_connect_error());
 }else{
     echo("Połączono do bazy danych");
 }

?>