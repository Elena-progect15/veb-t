<?php 

define("DBHOST", 'localhost');
define("DBUSER", 'cu98099_crafter');
define("DBPASS", 'Pasword123456789');
define("DBNAME", 'cu98099_crafter');

$db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет соединения с БД");
mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");

?>