<?php

class Calendar
{


  function showTable($data)
  {

    try
    {
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


  }

}

?>
