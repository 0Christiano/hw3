<?php
require_once("util-db.php");
require_once("model-gyms-by-fighter.php");

$pageTitle = "gyms by fighter";
include "view-header.php";
$gym = selectgymsbyfighter($_GET['id']);
include "view-gyms-by-fighter.php";
      include "view-footer.php";
?>
