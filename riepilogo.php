<?php
  $pagina="";
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
  <form action=$
    <h4>
      Nome: <?php echo $nome?><br>
      Cognome: <?php echo $cognome?><br>
      Sesso: <?php echo $radio?><br>
      Nazione: <?php echo $select?><br>
      Patente: <?php echo $patenteA; echo "\t"; echo $patenteB;?><br>
      Email: <?php echo $email?><br>
      Password: <?php echo $password?><br>
  
      <input type="button" onClick="location.href='index.php'" name="Ricompila" value="<-- Indietro"><input type="button" name="Conferma Dati"  onClick="location.href='ok.html'" value="v Conferma">
  </h4>
</html>
