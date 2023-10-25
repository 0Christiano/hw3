<?php
require_once("util-db.php");
require_once("model-fighters-with-gyms.php");

$pageTitle = "Fighters with Gyms";
include "view-header.php";



if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
        case "Add" :
         if (insertMArt($_POST['mStyle'], $_POST['mOrigin'])) {
           echo '<div class="alert alert-success" role="alert"> MArt added</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Edit" :
         if (updateMArt($_POST['mStyle'], $_POST['mOrigin'], $_POST['mid'])) {
           echo '<div class="alert alert-success" role="alert"> MArt edited</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Delete" :
         if (deleteMArt($_POST['mid'])) {
           echo '<div class="alert alert-success" role="alert"> MArt deleted</div>';
         } else{
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
  }
}


$MArt = selectMArts();
include "view-fighters-with-gyms.php";
      include "view-footer.php";
?>
