
<h1>Suche nach Sportart</h1>
<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form>

<?php

include 'connect.php';
include 'calendar.php';

try
{

  $connection = new ConnectDB();
  $connect = $connection->connect();

  $search_value=$_POST["search"];

 // echo ''.$search_value;	// gibt die eingabe im suchfeld zum testen aus

// suche nach Anderen Attributen kann leicht erweitert werden, durch ändern/erweitern der query oder der Auswahl an verschiedenen suchfeldern für verschiedene Attribute
  $query="select * from Event where Sport like '%$search_value%'";

  $data = $connect->query($query);

  $calendar = new Calendar();
  $calendar->showTable($data);

}
catch(PDOException $error)
{
  $error->getMessage();
}


?>
