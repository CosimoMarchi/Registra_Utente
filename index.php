<?php 
session_start();
$dbh = new PDO('mysql:host=localhost;dbname=marchee', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_SESSION['user'])){
header("location: Logged.php");
}

if(isset($_POST['login'])){
$user = $_POST['email'];
$pass = $_POST['password'];
$messeg = "";

if(empty($user) || empty($pass)) 
{
    $messeg = "Username/Password con't be empty";
} 
else 
{
    $sql = "SELECT * FROM Passeggero WHERE email=? AND password=? ";
    $query = $dbh->prepare($sql);
    $query->execute(array($user,$pass));
    if($query->rowCount() >= 1) 
    {
        $_SESSION['user'] = $user;
        $_SESSION['time_start_login'] = time();
        header("location: Logged.php");
    } 
    $sql = "SELECT * FROM Autista WHERE email=? AND password=? ";
    $query = $dbh->prepare($sql);
    $query->execute(array($user,$pass));
    if($query->rowCount() >= 1) 
    {
        $_SESSION['user'] = $user;
        $_SESSION['time_start_login'] = time();
        header("location: Logged.php");
    } 
  else 
  {
        $messeg = "Username/Password is wrong";
    }
}
}
?>
<html>
  <body>
    <form action="" method="POST">
      Email: <input type="email" name="email"><br>  
      Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login"</input>
    <input type="button" onClick="location.href='registra.html'" value="Registrati"</input>
   </form>
 </body>
  </h4>
</html>