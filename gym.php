<?php
require_once("util-db.php");
require_once("model-gym.php");

$pageTitle = "gym";
include "view-header.php";
$gyms = selectgyms();
include "view-gym.php";
      include "view-footer.php";
?>
