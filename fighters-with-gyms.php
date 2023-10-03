<?php
require_once("util-db.php");
require_once("model-fighters-with-gyms.php");

$pageTitle = "Fighters with Gyms";
include "view-header.php";
$fighters = selectfighters();
include "view-fighter-with-gyms.php";
      include "view-footer.php";
?>
