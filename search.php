
<h1>Suche nach Sportart</h1>
<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form>

<?php

include 'connect.php';

try
{
  $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);

  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'DB connected';

  $search_value=$_POST["search"];

 // echo ''.$search_value;	// gibt die eingabe im suchfeld aus

// suche nach Anderen Attributen kann leicht erweitert werden, durch ändern/erweitern der query oder der Auswahl an verschiedenen suchfeldern für verschiedene Attribute
  $query="select * from Event where Sport like '%$search_value%'";

       $data = $connect->query($query);

  echo '
        <table width"70%" border="1" cellpadding="5" cellspacing="5">
          <tr>
            <th>Weekday</th>
            <th>Team Name</th>
            <th>Sport</th>
            <th>Date</th>
            <th>Time</th>
          </tr>
        ';

  foreach ($data as $row)
  {
    echo '<tr>
            <td>'.date('D', strtotime($row["EventDate"])).'</td>
            <td>'.$row["TeamName"].'</td>
            <td>'.$row["Sport"].'</td>
            <td>'.$row["EventDate"].'</td>
            <td>'.$row["EventTime"].'</td>
          </tr>';
  }

  echo '</table>';

}
catch(PDOException $error)
{
  $error->getMessage();
}


?>
