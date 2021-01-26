<?php

include 'connect.php';
include 'calendar.php';

try
{

  $connection = new ConnectDB();
  $connect = $connection->connect();

  $query = "SELECT * FROM Event";

  $data = $connect->query($query);
  
  echo '<br><a href="search.php">Search</a>';

  $calendar = new Calendar();
  $calendar->showTable($data);

}
catch(PDOException $error)
{
  $error->getMessage();
}
 ?>
