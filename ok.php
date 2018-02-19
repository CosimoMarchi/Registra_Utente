<?php 
  $nome = $_GET["nome"];
  $cognome = $_GET["cognome"];
  $radio = $_GET["radio"];
  $select = $_GET["select"];
  $patente=$_GET["patente"];
  $email = $_GET["email"];
  $password = $_GET["password"];
  
  try 
  {
  $dbh = new PDO('mysql:host=localhost;dbname=Registrazione', "root", "");
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  sleep(5);
  $stmt = $dbh->prepare('
      INSERT INTO Registra (Nome, Cognome, Sesso, Nazione, Patente, Email, Password)
      VALUES (:nome, :cognome, :radio, :select, :patente, :email, :password);');
  $stmt->bindValue(':nome', $nome, PDO::PARAM_INT);
  $stmt->bindValue(':cognome', $cognome, PDO::PARAM_STR);
  $stmt->bindValue(':radio', $radio, PDO::PARAM_INT);
  $stmt->bindValue(':select', $cognome, PDO::PARAM_STR);
  $stmt->bindValue(':patente', $patente, PDO::PARAM_INT);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->bindValue(':password', $password, PDO::PARAM_STR);
  $stmt->execute();
  } catch (PDOException $e) 
  {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
?>
<html>
  <body>
    <h3>
      Dati Confermati
    </h3>
  </body>
</html>