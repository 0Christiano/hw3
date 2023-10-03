<?php
require_once("util-db.php");
require_once("model-MArts-by-gym.php");

$pageTitle = "Martial Arts by Gyms";
include "view-header.php";
$MArts = selectMArtsbygym($_POST['gid']);
include "view-MArts-by-gym.php";
      include "view-footer.php";
?>
