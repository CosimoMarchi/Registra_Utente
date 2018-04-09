<?php
session_start();
$dbh = new PDO('mysql:host=localhost;dbname=marchee', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_SESSION['userA']))
{
  if((time() - $_SESSION['time_start_login']) > 3600){
      header("location: logout.php");
  } 
  else 
  {
      $_SESSION['time_start_login'] = time();
  }
} 
else 
{
  header("location: logout.php");
}
?>

<input type="button" name="Logout" value="Crea Viaggio" onClick="location.href='creaV.php'"</input>
<input type="button" name="Logout" value="Logout" onClick="location.href='logout.php'"</input>