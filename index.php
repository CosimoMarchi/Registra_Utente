<?php 
session_start();
$dbh = new PDO('mysql:host=localhost;dbname=marchee', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_SESSION['userP']))
{
header("location: LoggedP.php");
}
if(isset($_SESSION['userA']))
{
header("location: LoggedA.php");
}
if(isset($_POST['loginA']) || isset($_POST['loginP']))
{
  $user = $_POST['email'];
  $pass = $_POST['password'];
  $messeg = "";
  if(empty($user) || empty($pass)) 
  {
    $messeg = "Username/Password con't be empty";
  } 
  if(isset($_POST["loginP"]))
  {
    $sql = "SELECT * FROM Passeggero WHERE email=? AND password=? ";
    $query = $dbh->prepare($sql);
    $query->execute(array($user,$pass));
    if($query->rowCount() >= 1)
    {
      $_SESSION['userP'] = $user;
      $_SESSION['time_start_login'] = time();
      header("location: LoggedP.php");
    } 
  }
  else if(isset($_POST["loginA"]))
  {
     $sql = "SELECT * FROM Autista WHERE email=? AND password=? ";
     $query = $dbh->prepare($sql);
     $query->execute(array($user,$pass));
     if($query->rowCount() >= 1) 
     {
       $_SESSION['userA'] = $user;
       $_SESSION['time_start_login'] = time();
       header("location: LoggedA.php");
     } 
  }
  else 
  {
        $messeg = "Username/Password is wrong";
    }
}
?>
<html>
  <body>
    <form action="" method="POST">
      Passeggero<br>
      Email: <input type="email" name="email"><br>
      Password: <input type="password" name="password"><br>
    <input type="submit" name="loginP" value="LoginP"</input>
    <input type="button" onClick="location.href='registra.html'" value="Registrati"</input>
   </form>
    <form action="" method="POST">
      Autista<br>
      Email: <input type="email" name="email"><br>
      Password: <input type="password" name="password"><br>
    <input type="submit" name="loginA" value="LoginA"</input>
    <input type="button" onClick="location.href='registra.html'" value="Registrati"</input>
   </form>
 </body>
  </h4>
</html>