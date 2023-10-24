<?php
require_once("util-db.php");
require_once("model-gym.php");

$pageTitle = "gym";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
        case "Add" :
         insertGym($_POST['gNumber'], $_POST['gDesc']);
        break;
  }
}

$gyms = selectgyms();
include "view-gym.php";
      include "view-footer.php";
?>
