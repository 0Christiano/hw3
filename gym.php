<?php
require_once("util-db.php");
require_once("model-gym.php");

$pageTitle = "gym";
include "view-header.php";
$gym = selectgym();
include "view-gym.php";
      include "view-footer.php";
?>
