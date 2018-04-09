<?php session_start()
  if(isset($_SESSION['userP']))
{
  if((time() - $_SESSION['time_start_login']) > 3600)
  {
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
if(isset($_POST["ok"]))
{
  try 
  {
    $dbh = new PDO('mysql:host=localhost;dbname=marchee', "root", "root");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare('
        INSERT INTO Viaggio ()
        VALUES (:nome, :cognome, :radio, :select, :username, :data, :telefono, :email, :password, :numeroPatente, :scadenzaPatente);');
    $stmt->bindValue(':nome', $nome, PDO::PARAM_INT);
    $stmt->bindValue(':cognome', $cognome, PDO::PARAM_STR);
    $stmt->bindValue(':radio', $radio, PDO::PARAM_INT);
    $stmt->bindValue(':select', $cognome, PDO::PARAM_STR);
    $stmt->bindValue(':username', $username, PDO::PARAM_INT);
    $stmt->bindValue(':telefono', $telefono, PDO::PARAM_INT);
    $stmt->bindValue(':data', $data, PDO::PARAM_INT);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR); 
    $stmt->bindValue(':numeroPatente', $patente, PDO::PARAM_STR);
    $stmt->bindValue(':scadenzaPatente', $Spatente, PDO::PARAM_STR);
    $stmt->execute();
  } catch (PDOException $e)
  {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}
?>
<html>
  <body>
    <h2>
      Modulo del Viaggio
    </h2>
    <form action="" method="POST">
      <h4>
        oraPartenza: <input type="text" name="oraP"><br>  
        oraArrivo: <input type="text" name="oraA"><br>
        Importo: <input type="text" name="imp"><br>
        nBagagliaPersona:<input type="text" name="nBag"><br>
        Luogo Partenza <input type="text" name="luogoP"><br>
        Luogo Arrivo <input type="text" name="luogoA"><br>
        Scadenza Patente <input type="date" name="Spatente"><br>
        <input type="submit" name="ok" value="conferma"<input><input type="button" name="nope" value="annulla" onClick="location.href='creaV.php'"<input> 
      </h4>
    </form> 
  </body>
</html>