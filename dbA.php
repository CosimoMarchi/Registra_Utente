<?php 
  $nome = $_GET["nome"];
  $cognome = $_GET["cognome"];
  $radio = $_GET["radio"];
  $select = $_GET["select"];
  $data=$_GET["data"];
  $email = $_GET["email"];
  $password = $_GET["password"];
  $username = $_GET["username"];
  $patente = $_GET["patente"];
  $Spatente = $_GET["Spatente"];
  $telefono = $_GET["telefono"];
  try 
  {
  $dbh = new PDO('mysql:host=localhost;dbname=marchee', "root", "root");
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $dbh->prepare('
      INSERT INTO Autista (nome, cognome, sesso, nazionalita, username, telefono, dataNascita, email, password, numeroPatente, scadenzaPatente)
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
?>
<html>
  <body>
    <h3>
      Dati Autista Confermati
      <br><input type="button" name="login" onClick="location.href='index.php'" value="Torna al Login">
    </h3>
  </body>
</html>