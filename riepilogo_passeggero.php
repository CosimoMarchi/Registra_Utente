<?php

  $nome = $_GET["name"];
  $cognome = $_GET["surname"];
  $radio = $_GET["radio"];
  $select = $_GET["comboBox"];
  $username = $_GET["username"];
  $email = $_GET["email"];
  $password = $_GET["password"];
  $data = $_GET["data"];
  $telefono = $_GET["telefono"];
?>
<html>
  <body>
  <form action="dbP.php" method="GET">
    <h4>
      Nome: <?php echo $nome?><br>
      Cognome: <?php echo $cognome?><br>
      Sesso: <?php echo $radio?><br>
      Nazione: <?php echo $select?><br>
      Telfono: <?php echo $telefono?><br>
      Data Di Nascita: <?php echo $data?><br>
      Username: <?php echo $username?><br>
      Email: <?php echo $email?><br>
      Password: <?php echo $password?><br>
      <input type=hidden name="nome" value ="<?php echo $nome?>"/>
      <input type=hidden name="username" value ="<?php echo $username?>"/>
      <input type=hidden name="cognome" value ="<?php echo $cognome?>"/>
      <input type=hidden name="radio" value ="<?php echo $radio?>"/>
      <input type=hidden name="select" value ="<?php echo $select?>"/>
      <input type=hidden name="telefono" value ="<?php echo $telefono?>"/>
      <input type=hidden name="data" value ="<?php echo $data?>"/>
      <input type=hidden name="email" value="<?php echo $email?>"/>
      <input type=hidden name="password" value="<?php echo $password?>"/>
      <input type="button" onClick="location.href='registra_passeggero.php'" name="Ricompila" value="<-- Indietro"><input type="submit" name="Conferma Dati" value="v Conferma">
  </form>
 </body>
  </h4>
</html>