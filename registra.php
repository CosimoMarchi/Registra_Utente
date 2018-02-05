<?php
class MysqlClass
{
  // parametri per la connessione al database
  private $nomedb = "quintab_marchi";
  private $nomehost = "127.0.0.1";     
  private $nomeuser = "quintab";          
  private $password = "HA45@BMV"; 
          
  // controllo sulle connessioni attive
  private $attiva = false;
 
  // funzione per la connessione a MySQL
  public function connetti()
  {
   if(!$this->attiva)
    {
     if($connessione = mysql_connect($this->nomehost,$this->nomeuser,$this->password) or die (mysql_error()))
     {
      // selezione del database
      $selezione = mysql_select_db($this->nomedb,$connessione) or die (mysql_error());
     }
    }
    else
    {
     return true;
    }
  }
  public function disconnetti()
  {
   if($this->attiva)
   {
    if(mysql_close())
    {
     $this->attiva = false; 
     return true; 
    }
    else
    {
     return false; 
    }
   }
  }
  public function query($sql)
  {
   if(isset($this->attiva))
   {
    $sql = mysql_query($sql) or die (mysql_error());
    return $sql;
   }
   else
   {
    return false; 
   }
  }
}
$data = new MysqlClass();
// connessione a MySQL
$data->connetti();
 
// creazione della tabella per il login
$data->query("CREATE TABLE `login` (
`id_login` INT( 1 ) NOT NULL AUTO_INCREMENT ,
`username_login` VARCHAR( 10 ) NOT NULL ,
`password_login` VARCHAR( 40 ) NOT NULL ,
PRIMARY KEY ( `id_login` ))");
 
// creazione della tabella per i post
$data->query("CREATE TABLE `post` (
`id_post` INT( 5 ) NOT NULL AUTO_INCREMENT ,
`titolo_post` VARCHAR( 255 ) NOT NULL ,
`testo_post` TEXT NOT NULL ,
`autore_post` VARCHAR( 30 ) NOT NULL ,
`data_post` DATE NOT NULL ,
PRIMARY KEY ( `id_post` ) )");
 
// creazione della tabella per i commenti
$data->query("CREATE TABLE `commenti` (
`id_commento` INT( 6 ) NOT NULL AUTO_INCREMENT ,
`id_post` INT( 5 ) NOT NULL ,
`autore_commento` VARCHAR( 30 ) NOT NULL ,
`testo_commento` TEXT NOT NULL ,
`data_commento` DATE NOT NULL ,
`approvato` ENUM( '0', '1' ) NOT NULL ,
PRIMARY KEY ( `id_commento` ) )");
$data->disconnetti();
?>
