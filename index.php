<?php
// Salah Zakaria OUAICHOUCHE
spl_autoload_register(function ($className){
  include ("lib/{$className}.class.php");
});
session_name('ouaichouche');
session_start();
if (isset($_SESSION['ident'])) {
  $personne = $_SESSION ['ident'];
}
date_default_timezone_set ('Europe/Paris');
require ('views/pageComplet.php');
 ?>
