<?php
require_once("util-db.php");
require_once("model-gym.php");

$pageTitle = "gym";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
        case "Add" :
         if (insertGym($_POST['gNumber'], $_POST['gDesc'])) {
           echo '<div class="alert alert-success" role="alert"> Gym added</div>"';
         } else{
           echo '<div class="alert alert-danger" role="alert"> Error</div>"';
         }
        break;
  }
}

$gyms = selectgyms();
include "view-gym.php";
      include "view-footer.php";
?>
