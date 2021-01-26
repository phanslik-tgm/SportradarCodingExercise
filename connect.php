<?php



class ConnectDB
{
  private $host = "localhost";
  private $username = "sportradar";
  private $password = "password1234";
  private $database = "sportEvents";

  function connect()
  {

    try
    {
      $connect = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);

      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'DB connected';
      return $connect;

    }
    catch(PDOException $error)
    {
      $error->getMessage();
      echo 'DB not connected';
    }


  }

}

?>
