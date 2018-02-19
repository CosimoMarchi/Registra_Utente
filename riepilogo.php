<?php
  $patenteA="";
  $patenteB="";
  $nome = $_GET["name"];
  $cognome = $_GET["surname"];
  $radio = $_GET["radio"];
  $select = $_GET["comboBox"];
  $email = $_GET["email"];
  $password = $_GET["password"];
  if(isset($_GET["checkA"])){$patenteA=$_GET["checkA"];}
  if(isset($_GET["checkB"])){$patenteB=$_GET["checkB"];}
?>
<html>
  <body>
  <form action="ok.php" method="GET">
    <h4>
      Nome: <?php echo $nome?><br>
      Cognome: <?php echo $cognome?><br>
      Sesso: <?php echo $radio?><br>
      Nazione: <?php echo $select?><br>
      Patente: <?php echo $patenteA; echo $patenteB?><br>
      Email: <?php echo $email?><br>
      Password: <?php echo $password?><br>
      <input type=hidden name="nome" value ="<?php echo $nome?>"/>
      <input type=hidden name="cognome" value ="<?php echo $cognome?>"/>
      <input type=hidden name="radio" value ="<?php echo $radio?>"/>
      <input type=hidden name="select" value ="<?php echo $select?>"/>
      <input type=hidden name="patente" value ="<?php echo $patenteA; echo $patenteB?>"/>
      <input type=hidden name="email" value="<?php echo $email?>"/>
      <input type=hidden name="password" value="<?php echo $password?>"/>
      <input type="button" onClick="location.href='index.php'" name="Ricompila" value="<-- Indietro"><input type="submit" name="Conferma Dati" value="v Conferma">
  </form>
 </body>
  </h4>
</html>