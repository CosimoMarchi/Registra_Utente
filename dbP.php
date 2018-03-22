<?php 
  $nome = $_GET["nome"];
  $cognome = $_GET["cognome"];
  $radio = $_GET["radio"];
  $select = $_GET["select"];
  $data=$_GET["data"];
  $email = $_GET["email"];
  $password = $_GET["password"];
  $username = $_GET["username"];
  try 
  {
  $dbh = new PDO('mysql:host=localhost;dbname=marchee', "root", "root");
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $dbh->prepare('
      INSERT INTO Passeggero (nome, cognome, sesso, nazionalita, username, telefono, dataNascita, email, password)
      VALUES (:nome, :cognome, :radio, :select, :username, :data, :telefono, :email, :password);');
  $stmt->bindValue(':nome', $nome, PDO::PARAM_INT);
  $stmt->bindValue(':cognome', $cognome, PDO::PARAM_STR);
  $stmt->bindValue(':radio', $radio, PDO::PARAM_INT);
  $stmt->bindValue(':select', $cognome, PDO::PARAM_STR);
  $stmt->bindValue(':username', $username, PDO::PARAM_INT);
  $stmt->bindValue(':telefono', $data, PDO::PARAM_INT);
  $stmt->bindValue(':data', $data, PDO::PARAM_INT);
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