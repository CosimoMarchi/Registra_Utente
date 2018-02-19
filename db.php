<?php 
try 
{
$dbh = new PDO('mysql:host=localhost;dbname=Registrazione', "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
sleep(5);
$stmt = $dbh->prepare('
    CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255));');
$stmt->execute();
} catch (PDOException $e) 
{
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<html>
  <body>
    Prova database
  </body>
</html>

