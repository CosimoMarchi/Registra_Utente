<?php
session_start();

if(isset($_SESSION['userP']))
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
Passeggero Loggato
<input type="button" name="Logout" value="Logout" onClick="location.href='logout.php'"</input>