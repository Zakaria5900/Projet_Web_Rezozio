<?php
// Salah Zakaria OUAICHOUCHE
session_name('ouaichouche');
require_once("lib/common_service.php");
session_start();
if (isset($_SESSION['ident']))
  return;
produceError('not authentificated');
exit();

 ?>
